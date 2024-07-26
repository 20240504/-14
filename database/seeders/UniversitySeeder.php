<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; #追記
use DateTime; #追記

class UniversitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('universities')->insert([
            'name'=>'大学名1',
            ]);
        DB::table('universities')->insert([
            'name'=>'大学名2',
            ]);
        DB::table('universities')->insert([
            'name'=>'大学名3',
            ]);       
    }
}
