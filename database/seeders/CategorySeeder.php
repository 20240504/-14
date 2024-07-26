<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; #追記
use DateTime; #追記


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name'=>'学院祭',
            ]);
        DB::table('categories')->insert([
            'name'=>'学園祭',
            ]);
        DB::table('categories')->insert([
            'name'=>'サークル',
            ]);
        DB::table('categories')->insert([
            'name'=>'その他',
            ]);    
    }
}
