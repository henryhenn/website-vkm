<?php

namespace App\Http\Controllers;

use App\Exports\FormatTableAnggotaExport;
use App\Http\Requests\AnggotaRequest;
use App\Imports\AnggotaImport;
use App\Models\SubMenu;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Validators\ValidationException;
use Spatie\Permission\Models\Permission;

class AnggotaController extends Controller
{
    public function index()
    {
        $this->middleware('permission:View Daftar Anggota');

        $anggota = DB::table('users')
            ->select('id', 'nama_indo', 'nama_mandarin_hanzi', 'nama_mandarin_pinyin', 'telp', 'active', 'created_at')
            ->paginate(100);

        return view('anggota.index', compact('anggota'));
    }

    public function store(AnggotaRequest $request)
    {
        $this->middleware('permission:Create Daftar Anggota');

        User::create($request->validated());

        return back()->with('message', 'Anggota berhasil ditambahkan!');
    }

    public function show(string $id)
    {
        $this->middleware('permission:View Daftar Anggota');

        $anggota = User::findOrFail($id);

        return view('anggota.detail', compact('anggota'));
    }

    public function update(AnggotaRequest $request, string $id)
    {
        $this->middleware('permission:Edit Daftar Anggota');

        User::findOrFail($id)->update($request->validated());

        return back()->with('message', 'Akun berhasil dibuatkan!');
    }

    public function destroy(string $id)
    {
        $this->middleware('permission:Delete Daftar Anggota');

        User::findOrFail($id)->delete();

        return back()->with('message', 'Data anggota berhasil dihapus!');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'password' => 'required'
        ]);

        auth()->user()->update([
            'password' => bcrypt($request->get('password'))
        ]);

        return back()->with('message', 'Password berhasil diupdate!');
    }

    public function permissions(User $user)
    {
        $this->middleware('permission:Control Daftar Anggota');

        $sub_menu = SubMenu::query()
            ->select('sub_menu')
            ->orderBy('sub_menu')
            ->get();
        $permissions = Permission::take(5)->get();

        return view('anggota.permissions', compact('user', 'sub_menu', 'permissions'));
    }

    public function setPermissions(User $user)
    {
        $this->middleware('permission:Control Daftar Anggota');

        $user->syncPermissions(request()->get('permissions'));
        $user->update([
            'user_update' => auth()->user()->nama_indo
        ]);

        return to_route('anggota.index')->with('message', 'Privilege berhasil diset!');
    }

    public function export()
    {
        $this->middleware('permission:Create Daftar Anggota');

        return Excel::download(new FormatTableAnggotaExport, 'format-anggota.xlsx');
    }

    public function import(Request $request)
    {
        $this->middleware('permission:Create Daftar Anggota');

        $this->validate($request, [
            'file' => 'required|file|mimes:xls,xlsx,csv'
        ], [
            'file.required' => 'Input File wajib diisi!',
            'file.file' => 'Input File harus berupa file!',
            'file.mimes' => 'Input File harus berformat: .xlsx, .xls, .csv!',
        ]);

        try {
            Excel::import(new AnggotaImport(), $request->file('file'));

            return back()->with('message', 'Data anggota berhasil diimport!');
        } catch (\InvalidArgumentException $e) {
            return back()->withErrors('Ada error: ' . $e->getMessage());
        }
    }

    /**
     * jQuery Methods
     */

    public function getStatus()
    {
        $status = DB::table('mst_value')
            ->select('id', 'kondisi', 'desc')
            ->where('kondisi', request('status'))
            ->get();

        return response()->json([
            'data' => $status,
            'status' => Response::HTTP_ACCEPTED
        ]);
    }

    public function getAnggotaById(User $user)
    {
        return response()->json([
            'data' => $user,
            'status' => Response::HTTP_ACCEPTED
        ]);
    }
}
