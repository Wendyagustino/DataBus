<?php

namespace Database\Seeders;

use App\Models\ListBuku;
use Illuminate\Database\Seeder;

class ListBukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ListBuku::factory()->create([
            'judul_buku' => 'Basis Data Dasae',
            'sipnosis' => 'BDD',
            'nama_penulis' => 'Sujiwo Tejo',
            'nama_penerbit' => 'Bentang Pustaka',
            'tgl_rilis' => '2020-03-10',
            'halaman' => 240,
            'foto' => 'images/buku.jpeg',
        ]);
    }
}
