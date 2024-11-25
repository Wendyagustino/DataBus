<?php

namespace App\Http\Controllers;

use App\Models\ListBuku;
use App\Http\Requests\StoreListBukuRequest;
use App\Http\Requests\UpdateListBukuRequest;
use App\Support\Facedes\Storage;

class ListBukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listBuku = ListBuku::latest()->paginate(10);
        return view('listBuku.list_buku', compact('listBuku'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreListBukuRequest $request)
    {
        $requestData = $request->validate([
            'judul_buku' => 'required|string|max:255',
            'sipnosis' => 'required|string|max:255',
            'nama_penulis' => 'required|string|max:255',
            'nama_penerbit' => 'required|string|max:255',
            'tgl_rilis' => 'required|string|max:255',
            'halaman' => 'required|string|max:255',
            'foto' => 'required|image|mimes:png,jpg,jpeg',
        ]);

        // Simpan data ke database
        $listBuku = new ListBuku();
        $listBuku->fill($requestData);
        $listBuku->foto = $request->file('foto')->store('images', 'public');
        $listBuku->save();

        // Redirect ke halaman List Buku dengan pesan sukses
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(ListBuku $listBuku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ListBuku $listBuku)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateListBukuRequest $request, ListBuku $listBuku)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ListBuku $listBuku)
    {
        //
    }
}
