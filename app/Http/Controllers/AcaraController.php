<?php

namespace App\Http\Controllers;

use App\Http\Requests\AcaraRequest;
use App\Models\Acara;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AcaraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->middleware('permissions:View Acara');

        $acara = DB::table('acara')
            ->select('id', 'acara', 'tgl', 'active', 'created_at')
            ->paginate(100);

        return view('acara.index', compact('acara'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AcaraRequest $request)
    {
        $this->middleware('permissions:Create Acara');

        $image = $this->getImage($request);

        Acara::create($this->getRequest($request, $image));

        return back()->with('message', 'Acara berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Acara $acara)
    {
        $this->middleware('permissions:View Acara');

        return view('acara.detail', compact('acara'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AcaraRequest $request, Acara $acara)
    {
        $this->middleware('permissions:Edit Acara');

        if ($request->has('image')) {
            Storage::delete($acara->image);

            $image = $this->getImage($request);

            $acara->update($this->getRequest($request, $image));
        } else {
            $acara->update($this->getRequest($request));
        }

        return back()->with('message', 'Acara berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Acara $acara)
    {
        $this->middleware('permissions:Edit Acara');

        $acara->delete();
        Storage::delete($acara->image);

        return back()->with('message', 'Acara berhasil dihapus!');
    }

    public function updateActive(Acara $acara)
    {
        $acara->update(['active' => request()->get('active')]);

        return back()->with('message', 'Status berhasil diupdate!');
    }

    public function getAcaraById(Acara $acara)
    {
        return response()->json([
            'data' => $acara,
            'status' => Response::HTTP_ACCEPTED
        ]);
    }

    protected function getImage(AcaraRequest $request): string|false
    {
        $image = $request->file('image')->store('acara');

        return $image;
    }

    protected function getRequest(AcaraRequest $request, string $image = null): array
    {
        return [
            'acara' => $request->get('acara'),
            'image' => $image,
            'tgl' => $request->get('tgl'),
            'tempat' => $request->get('tempat'),
            'jam_mulai' => $request->get('jam_mulai'),
            'jam_selesai' => $request->get('jam_selesai'),
        ];
    }
}
