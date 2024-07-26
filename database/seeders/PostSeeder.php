<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
DB::table('テーブル名')->insert(['カラム名'=>'データ']);
use Illuminate\Support\Facades\DB; #追記
use DateTime; #追記

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            'title' => 'イベントタイトル',
            'body' => 'イベント詳細',
            'place' => '活動場所',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
        //
    }
}
