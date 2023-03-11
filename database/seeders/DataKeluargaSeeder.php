<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataKeluargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('data_keluarga')->insert([
            [
                'id' => 1,
                'nama' => 'Fikril Hadad Ramadhani',
                'jenis_kelamin' => 'Laki-Laki',
                'tanggal_lahir' => '2001-11-27',
                'agama' => 'ISLAM',
                'pekerjaan' => 'Wirausaha',
                'status' => 'Kepala Keluarga'
            ],
            [
                'id' => 2,
                'nama' => 'Mutiara Asma Asharina',
                'jenis_kelamin' => 'Perempuan',
                'tanggal_lahir' => '2002-4-15',
                'agama' => 'ISLAM',
                'pekerjaan' => 'Wirausaha',
                'status' => 'Istri'
            ],
            [
                'id' => 3,
                'nama' => 'Raul',
                'jenis_kelamin' => 'Laki-Laki',
                'tanggal_lahir' => '2022-11-27',
                'agama' => 'ISLAM',
                'pekerjaan' => 'Belum Bekerja',
                'status' => 'Anak'
            ],
            [
                'id' => 4,
                'nama' => 'Rina',
                'jenis_kelamin' => 'Perempuan',
                'tanggal_lahir' => '2023-01-27',
                'agama' => 'ISLAM',
                'pekerjaan' => 'Belum Bekerja',
                'status' => 'Anak'
            ]
        ]);
    }
}
