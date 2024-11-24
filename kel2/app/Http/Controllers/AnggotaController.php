<?php

namespace App\Http\Controllers;

use App\Models\anggota;
use App\Http\Requests\StoreanggotaRequest;
use App\Http\Requests\UpdateanggotaRequest;
use Illuminate\Support\Facades\Storage;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('layout.app');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.input');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreanggotaRequest $request)
    {
       $requestData = $request->validate([
            'nama' => 'required|string|max:255',
            'foto' => 'required|image|mimes:png,jpg,jpeg',
            'kelas' => 'required|string|max:255',
            'nim' => 'required|string|max:255',
            'jenis_kelamin' => 'required|in:laki-laki,perempuan',
        ]);
        $anggota = new \App\Models\anggota();
        $anggota->fill($requestData);
        $anggota->foto= $request->file('foto')->store('images', 'public');
        $anggota->save();

        // Redirect ke halaman anggota dengan pesan sukses
        return back();
    }

    public function show($name)
    {
        // Daftar nama view yang tersedia
        $validViews = ['adib', 'rizki', 'zahwa', 'wendy'];
        $anggota = anggota::where('nama', $name)->first();;
        // Periksa apakah nama view valid
        if (in_array($name, $validViews)) {
            // Arahkan ke view yang sesuai
            return view("User.$name", compact('anggota'));
        }

        // Jika nama view tidak valid, kembalikan halaman error atau redirect
        return abort(404, 'Halaman tidak ditemukan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(anggota $anggota)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateanggotaRequest $request, anggota $anggota)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(anggota $anggota)
    {
        //
    }
}
