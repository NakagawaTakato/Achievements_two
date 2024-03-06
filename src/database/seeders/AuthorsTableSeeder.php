<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    $param = [
        'category_id' => 1,
        'name' => '仙人',
        'image' => 'img/sushi.jpg',
        'city' => '東京都',
        'shop' => '寿司',
        'gender' => 1
    ];
    DB::table('authors')->insert($param);
    $param = [
        'category_id' => 2,
        'name' => '牛助',
        'image' => 'img/yakiniku.jpg',
        'city' => '大阪府',
        'shop' => '焼肉',
        'gender' => 2
    ];
    DB::table('authors')->insert($param);
    $param = [
        'category_id' => 3,
        'name' => '戦慄',
        'image' => 'img/izakaya.jpg',
        'city' => '福岡県',
        'shop' => '居酒屋',
        'gender' => 3
    ];
    DB::table('authors')->insert($param);
    $param = [
        'category_id' => 4,
        'name' => 'ルーク',
        'image' => 'img/izakaya.jpg',
        'city' => '東京都',
        'shop' => 'イタリアン',
        'gender' => 1
    ];
    DB::table('authors')->insert($param);

    $param = [
        'category_id' => 5,
        'name' => '志摩屋',
        'image' => 'img/ramen.jpg',
        'city' => '福岡県',
        'shop' => 'ラーメン',
        'gender' => 3
    ];
    DB::table('authors')->insert($param);
    $param = [
        'category_id' => 2,
        'name' => '香',
        'image' => 'img/yakiniku.jpg',
        'city' => '東京都',
        'shop' => '焼肉',
        'gender' => 1
    ];
    DB::table('authors')->insert($param);
    $param = [
        'category_id' => 4,
        'name' => 'JJ',
        'image' => 'img/italian.jpg',
        'city' => '大阪府',
        'shop' => 'イタリアン',
        'gender' => 2
    ];
    DB::table('authors')->insert($param);
    $param = [
        'category_id' => 5,
        'name' => 'ラーメンの極み',
        'image' => 'img/ramen.jpg',
        'city' => '東京都',
        'shop' => 'ラーメン',
        'gender' => 1
    ];
    DB::table('authors')->insert($param);

    $param = [
        'category_id' => 3,
        'name' => '鳥雨',
        'image' => 'img/izakaya.jpg',
        'city' => '大阪府',
        'shop' => '居酒屋',
        'gender' => 2
    ];
    DB::table('authors')->insert($param);
    $param = [
        'category_id' => 1,
        'name' => '築地色合',
        'image' => 'img/sushi.jpg',
        'city' => '東京都',
        'shop' => '寿司',
        'gender' => 1
    ];
    DB::table('authors')->insert($param);
    $param = [
        'category_id' => 2,
        'name' => '晴海',
        'image' => 'img/yakiniku.jpg',
        'city' => '大阪府',
        'shop' => '焼肉',
        'gender' => 2
    ];
    DB::table('authors')->insert($param);
    $param = [
        'category_id' => 2,
        'name' => '三子',
        'image' => 'img/yakiniku.jpg',
        'city' => '福岡県',
        'shop' => '焼肉',
        'gender' => 3
    ];
    DB::table('authors')->insert($param);

    $param = [
        'category_id' => 3,
        'name' => '八戒',
        'image' => 'img/izakaya.jpg',
        'city' => '東京都',
        'shop' => '居酒屋',
        'gender' => 1
    ];
    DB::table('authors')->insert($param);
    $param = [
        'category_id' => 1,
        'name' => '福助',
        'image' => 'img/sushi.jpg',
        'city' => '大阪府',
        'shop' => '寿司',
        'gender' => 2
    ];
    DB::table('authors')->insert($param);
    $param = [
        'category_id' => 5,
        'name' => 'ラー北',
        'image' => 'img/ramen.jpg',
        'city' => '東京都',
        'shop' => 'ラーメン',
        'gender' => 1
    ];
    DB::table('authors')->insert($param);
    $param = [
        'category_id' => 3,
        'name' => '翔',
        'image' => 'img/izakaya.jpg',
        'city' => '大阪府',
        'shop' => '居酒屋',
        'gender' => 2
    ];
    DB::table('authors')->insert($param);

    $param = [
        'category_id' => 1,
        'name' => '経緯',
        'image' => 'img/sushi.jpg',
        'city' => '東京都',
        'shop' => '寿司',
        'gender' => 1
    ];
    DB::table('authors')->insert($param);
    $param = [
        'category_id' => 2,
        'name' => '漆',
        'image' => 'img/yakiniku.jpg',
        'city' => '東京都',
        'shop' => '焼肉',
        'gender' => 1
    ];
    DB::table('authors')->insert($param);
    $param = [
        'category_id' => 4,
        'name' => 'THE TOOL',
        'image' => 'img/italian.jpg',
        'city' => '福岡県',
        'shop' => 'イタリアン',
        'gender' => 3
    ];
    DB::table('authors')->insert($param);
    $param = [
        'category_id' => 1,
        'name' => '木船',
        'image' => 'img/sushi.jpg',
        'city' => '大阪府',
        'shop' => '寿司',
        'gender' => 2
    ];
    DB::table('authors')->insert($param);
    }
}
