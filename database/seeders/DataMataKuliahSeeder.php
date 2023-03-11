<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataMataKuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('data_mata_kuliah')->insert([
            [
                'id' => 1,
                'nama' => 'Praktikum Pemrograman Berbasis Objek',
                'dosen' => 'Imam Fahrur Rozi, ST., MT.',
                'hari' => 'Senin'
            ],
            [
                'id' => 2,
                'nama' => 'Pemrograman Web Lanjut',
                'dosen' => 'Moch. Zawaruddin Abdullah, S.St., M.Kom.',
                'hari' => 'Selasa'
            ],
            [
                'id' => 3,
                'nama' => 'Basis Data',
                'dosen' => 'Dwi Puspitasari, S.Kom., M.Kom.',
                'hari' => 'Rabu'
            ],
            [
                'id' => 4,
                'nama' => 'Matematika',
                'dosen' => 'Deasy Sandhya Elya Ikawati, S.Si, M.Si.',
                'hari' => 'Kamis'
            ],
            [
                'id' => 5,
                'nama' => 'Agama',
                'dosen' => 'Kadek Suarjuna Batubulan, S.Kom., MT.',
                'hari' => "Jum'at"
            ]
        ]);
    }
}
