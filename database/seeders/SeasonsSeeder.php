<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SeasonsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seasons=[];

        $seasons[]= [
            'id' => 2023
        ];
        $seasons[]= [
            'id' => 2024
        ];

        DB::table('seasons')->delete();
        DB::table('seasons')->insert($seasons);

    }
}
