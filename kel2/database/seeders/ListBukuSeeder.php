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
            'judul_buku' => 'Panduan Implementasi Dasar Sistem Embedded berbasis ATMega8535 dan Arduino Uno',
            'sipnosis' => 'Implementasi Dasar Sistem',
            'nama_penulis' => 'Yoanda Alim Syahbana, Egal Hendriyanto	',
            'nama_penerbit' => 'PCR',
            'tgl_rilis' => '2023-05-02',
            'halaman' => 47,
            'foto' => 'images/dasar sistem.jpeg',
        ]);
    }
}
