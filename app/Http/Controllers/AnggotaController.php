<?php

namespace App\Http\Controllers;

use App\Http\Requests\AnggotaRequest;
use App\Models\SubMenu;
use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Password;
use Spatie\Permission\Models\Permission;

class AnggotaController extends Controller
{
    public function index()
    {
        $this->middleware('permission:View Daftar Anggota');

        $anggota = User::query()
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

        User::find($id)->delete();

        return back()->with('message', 'Data Anggota Berhasil Dihapus!');
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
