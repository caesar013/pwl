<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtikelModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('artikel')->insert([
            [
                'id' => 'P01',
                'judul' => 'Menegangkan!',
                'penulis' => 'Haikal',
                'tgl_terbit' => '2023-01-07'
            ],
            [
                'id' => 'P02',
                'judul' => 'Mengejutkan!',
                'penulis' => 'Diouf',
                'tgl_terbit' => '2023-02-07'
            ],
            [
                'id' => 'P03',
                'judul' => 'Mengerikan!',
                'penulis' => 'Haikal',
                'tgl_terbit' => '2023-03-07'
            ]
        ]);
    }
}
