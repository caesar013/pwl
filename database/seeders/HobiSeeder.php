<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HobiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hobi')->insert([
            [
                'id'=>1,
                'hobi'=>'Berenang'
            ],
            [
                'id'=> 2,
                'hobi'=>'Memanah'
            ],
            [
                'id'=> 3,
                'hobi'=>'Berkuda'
            ],
            [
                'id'=> 4,
                'hobi'=>'Main Game'
            ]
        ]);
    }
}
