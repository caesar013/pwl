<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kelas = [
            ['nama_kelas' => 'TI 2A',],
            ['nama_kelas' => 'TI 2B',],
            ['nama_kelas' => 'TI 2C',],
            ['nama_kelas' => 'TI 2D',],
            ['nama_kelas' => 'TI 2E',],
            ['nama_kelas' => 'TI 2F',],
            ['nama_kelas' => 'TI 2G',],
            ['nama_kelas' => 'TI 2H',],
            ['nama_kelas' => 'TI 2I',],
        ];

        DB::table('kelas')->insert($kelas);
    }
}
