<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; #追記
use DateTime; #追記
use Illuminate\Support\Facades\Hash;#追記


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name'=>'abc',
            'email'=>'abc@gmail.com',
            'password'=> Hash::make('abcd1234'),
            ]);
        DB::table('users')->insert([
            'name'=>'xyz',
            'email'=>'xyg@gmail.com',
            'password'=> Hash::make('xyg12345'),
            ]);
    }
}
