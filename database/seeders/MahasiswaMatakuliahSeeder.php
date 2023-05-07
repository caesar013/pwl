<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaMatakuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mhsmatkul =
        [
            [
                'mahasiswa_id' => 1,
                'matakuliah_id' => 1,
                'nilai' => 70,
            ],
            [
                'mahasiswa_id' => 1,
                'matakuliah_id' => 2,
                'nilai' => 60,
            ],
            [
                'mahasiswa_id' => 1,
                'matakuliah_id' => 3,
                'nilai' => 80,
            ],
            [
                'mahasiswa_id' => 1,
                'matakuliah_id' => 4,
                'nilai' => 90,
            ],
            [
                'mahasiswa_id' => 3,
                'matakuliah_id' => 1,
                'nilai' => 40,
            ],
            [
                'mahasiswa_id' => 3,
                'matakuliah_id' => 2,
                'nilai' => 50,
            ],
            [
                'mahasiswa_id' => 3,
                'matakuliah_id' => 3,
                'nilai' => 70,
            ],
            [
                'mahasiswa_id' => 3,
                'matakuliah_id' => 4,
                'nilai' => 95,
            ],
        ];

        DB::table('mahasiswa_matakuliah')->insert($mhsmatkul);
    }
}
