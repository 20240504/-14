<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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
            'user_id' => 2,
            'category_id' => 4,
            'prefecture_id' => 47,
            'university_id' => 3,
            'title' => 'イベント',
            'body' => '詳細',
            'place' => '場所',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
        DB::table('posts')->insert([
            'user_id' => 2,
            'category_id' => 3,
            'prefecture_id' => 27,
            'university_id' => 2,
            'title' => '2',
            'body' => '2',
            'place' => '2',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
        DB::table('posts')->insert([
            'user_id' => 1,
            'category_id' => 1,
            'prefecture_id' => 7,
            'university_id' => 1,
            'title' => 'イベントタイトル3',
            'body' => 'イベント詳細3',
            'place' => '活動場所3',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
        DB::table('posts')->insert([
            'user_id' => 1,
            'category_id' => 2,
            'prefecture_id' => 37,
            'university_id' => 2,
            'title' => 'イベントタイトル4',
            'body' => 'イベント詳細4',
            'place' => '活動場所4',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
        DB::table('posts')->insert([
            'user_id' => 2,
            'category_id' => 2,
            'prefecture_id' => 37,
            'university_id' => 2,
            'title' => 'イベントタイトル5',
            'body' => 'イベント詳細5',
            'place' => '活動場所5',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
        //
    }
}
