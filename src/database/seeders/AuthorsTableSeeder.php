<?php

namespace Database\Seeders;

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
        'name' => '仙人',
        'image' => 'img/sushi.jpg',
        'city' => '東京都',
        'shop' => '寿司'
    ];
    DB::table('authors')->insert($param);
    $param = [
        'name' => '牛助',
        'image' => 'img/yakiniku.jpg',
        'city' => '大阪府',
        'shop' => '焼肉'
    ];
    DB::table('authors')->insert($param);
    $param = [
        'name' => '戦慄',
        'image' => 'img/izakaya.jpg',
        'city' => '福岡県',
        'shop' => '居酒屋'
    ];
    DB::table('authors')->insert($param);
    $param = [
        'name' => 'ルーク',
        'image' => 'img/izakaya.jpg',
        'city' => '東京都',
        'shop' => 'イタリアン'
    ];
    DB::table('authors')->insert($param);

    $param = [
        'name' => '志摩屋',
        'image' => 'img/ramen.jpg',
        'city' => '福岡県',
        'shop' => 'ラーメン'
    ];
    DB::table('authors')->insert($param);
    $param = [
        'name' => '香',
        'image' => 'img/yakiniku.jpg',
        'city' => '東京都',
        'shop' => '焼肉'
    ];
    DB::table('authors')->insert($param);
    $param = [
        'name' => 'JJ',
        'image' => 'img/italian.jpg',
        'city' => '大阪府',
        'shop' => 'イタリアン'
    ];
    DB::table('authors')->insert($param);
    $param = [
        'name' => 'ラーメンの極み',
        'image' => 'img/ramen.jpg',
        'city' => '東京都',
        'shop' => 'ラーメン'
    ];
    DB::table('authors')->insert($param);

    $param = [
        'name' => '鳥雨',
        'image' => 'img/izakaya.jpg',
        'city' => '大阪府',
        'shop' => '居酒屋'
    ];
    DB::table('authors')->insert($param);
    $param = [
        'name' => '築地色合',
        'image' => 'img/sushi.jpg',
        'city' => '東京都',
        'shop' => '寿司'
    ];
    DB::table('authors')->insert($param);
    $param = [
        'name' => '晴海',
        'image' => 'img/yakiniku.jpg',
        'city' => '大阪府',
        'shop' => '焼肉'
    ];
    DB::table('authors')->insert($param);
    $param = [
        'name' => '三子',
        'image' => 'img/yakiniku.jpg',
        'city' => '福岡県',
        'shop' => '焼肉'
    ];
    DB::table('authors')->insert($param);

    $param = [
        'name' => '八戒',
        'image' => 'img/izakaya.jpg',
        'city' => '東京都',
        'shop' => '居酒屋'
    ];
    DB::table('authors')->insert($param);
    $param = [
        'name' => '福助',
        'image' => 'img/sushi.jpg',
        'city' => '大阪府',
        'shop' => '寿司'
    ];
    DB::table('authors')->insert($param);
    $param = [
        'name' => 'ラー北',
        'image' => 'img/ramen.jpg',
        'city' => '東京都',
        'shop' => 'ラーメン'
    ];
    DB::table('authors')->insert($param);
    $param = [
        'name' => '翔',
        'image' => 'img/izakaya.jpg',
        'city' => '大阪府',
        'shop' => '居酒屋'
    ];
    DB::table('authors')->insert($param);

    $param = [
        'name' => '経緯',
        'image' => 'img/sushi.jpg',
        'city' => '東京都',
        'shop' => '寿司'
    ];
    DB::table('authors')->insert($param);
    $param = [
        'name' => '漆',
        'image' => 'img/yakiniku.jpg',
        'city' => '東京都',
        'shop' => '焼肉'
    ];
    DB::table('authors')->insert($param);
    $param = [
        'name' => 'THE TOOL',
        'image' => 'img/italian.jpg',
        'city' => '福岡県',
        'shop' => 'イタリアン'
    ];
    DB::table('authors')->insert($param);
    $param = [
        'name' => '木船',
        'image' => 'img/sushi.jpg',
        'city' => '大阪府',
        'shop' => '寿司'
    ];
    DB::table('authors')->insert($param);
    }
}
