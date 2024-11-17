<?php

namespace App\Http\Controllers;

use App\Models\anggota;
use App\Http\Requests\StoreanggotaRequest;
use App\Http\Requests\UpdateanggotaRequest;

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
       // Validasi input
       $requestData = $request->validate([
            'nama' => 'required|string|max:255',
            'kelas' => 'required|string|max:255',
            'nim' => 'required|string|max:255',
            'jenis_kelamin' => 'required|in:laki-laki,perempuan',
        ]);

        // Simpan data ke database
        $anggota = new \app\Models\anggota();
        $anggota->fill($requestData);
        $anggota->save();

        // Redirect ke halaman anggota dengan pesan sukses
        return redirect()->route('layout.app')->with('success', 'Anggota berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show($name)
    {
        // Daftar nama view yang tersedia
        $validViews = ['adib', 'rizki', 'zahwa', 'wendy'];

        // Periksa apakah nama view valid
        if (in_array($name, $validViews)) {
            // Arahkan ke view yang sesuai
            return view("user.$name");
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
