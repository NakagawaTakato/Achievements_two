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
        'class-name' => 'wrapper-box',
        'name' => '仙人',
        'image' => 'img/sushi.jpg',
        'city' => '東京都',
        'shop' => '寿司',
    ];
    DB::table('authors')->insert($param);
    $param = [
        'class-name' => 'wrapper-box_two',
        'name' => '牛助',
        'image' => 'img/yakiniku.jpg',
        'city' => '大阪府',
        'shop' => '焼肉',
    ];
    DB::table('authors')->insert($param);
    $param = [
        'class-name' => 'wrapper-box_three',
        'name' => '戦慄',
        'image' => 'img/izakaya.jpg',
        'city' => '福岡県',
        'shop' => '居酒屋',
    ];
    DB::table('authors')->insert($param);
    $param = [
        'class-name' => 'wrapper-box_four',
        'name' => 'ルーク',
        'image' => 'img/izakaya.jpg',
        'city' => '東京都',
        'shop' => 'イタリアン',
    ];
    DB::table('authors')->insert($param);

    $param = [
        'class-name' => 'wrapper-box_five',
        'name' => '志摩屋',
        'image' => 'img/ramen.jpg',
        'city' => '福岡県',
        'shop' => 'ラーメン',
    ];
    DB::table('authors')->insert($param);
    $param = [
        'class-name' => 'wrapper-box_six',
        'name' => '香',
        'image' => 'img/yakiniku.jpg',
        'city' => '東京都',
        'shop' => '焼肉',
    ];
    DB::table('authors')->insert($param);
    $param = [
        'class-name' => 'wrapper-box_seven',
        'name' => 'JJ',
        'image' => 'img/italian.jpg',
        'city' => '大阪府',
        'shop' => 'イタリアン',
    ];
    DB::table('authors')->insert($param);
    $param = [
        'class-name' => 'wrapper-box_eight',
        'name' => 'ラーメンの極み',
        'image' => 'img/ramen.jpg',
        'city' => '東京都',
        'shop' => 'ラーメン',
    ];
    DB::table('authors')->insert($param);

    $param = [
        'class-name' => 'wrapper-box_nine',
        'name' => '鳥雨',
        'image' => 'img/izakaya.jpg',
        'city' => '大阪府',
        'shop' => '居酒屋',
    ];
    DB::table('authors')->insert($param);
    $param = [
        'class-name' => 'wrapper-box_ten',
        'name' => '築地色合',
        'image' => 'img/sushi.jpg',
        'city' => '東京都',
        'shop' => '寿司',
    ];
    DB::table('authors')->insert($param);
    $param = [
        'class-name' => 'wrapper-box_eleven',
        'name' => '晴海',
        'image' => 'img/yakiniku.jpg',
        'city' => '大阪府',
        'shop' => '焼肉',
    ];
    DB::table('authors')->insert($param);
    $param = [
        'class-name' => 'wrapper-box_twelve',
        'name' => '三子',
        'image' => 'img/yakiniku.jpg',
        'city' => '福岡県',
        'shop' => '焼肉',
    ];
    DB::table('authors')->insert($param);

    $param = [
        'class-name' => 'wrapper-box_thirteen',
        'name' => '八戒',
        'image' => 'img/izakaya.jpg',
        'city' => '東京都',
        'shop' => '居酒屋',
    ];
    DB::table('authors')->insert($param);
    $param = [
        'class-name' => 'wrapper-box_fourteen',
        'name' => '福助',
        'image' => 'img/sushi.jpg',
        'city' => '大阪府',
        'shop' => '寿司',
    ];
    DB::table('authors')->insert($param);
    $param = [
        'class-name' => 'wrapper-box_fifteen',
        'name' => 'ラー北',
        'image' => 'img/ramen.jpg',
        'city' => '東京都',
        'shop' => 'ラーメン',
    ];
    DB::table('authors')->insert($param);
    $param = [
        'class-name' => 'wrapper-box_sixteen',
        'name' => '翔',
        'image' => 'img/izakaya.jpg',
        'city' => '大阪府',
        'shop' => '居酒屋',
    ];
    DB::table('authors')->insert($param);

    $param = [
        'class-name' => 'wrapper-box_seventeen',
        'name' => '経緯',
        'image' => 'img/sushi.jpg',
        'city' => '東京都',
        'shop' => '寿司',
    ];
    DB::table('authors')->insert($param);
    $param = [
        'class-name' => 'wrapper-box_eighteen',
        'name' => '漆',
        'image' => 'img/yakiniku.jpg',
        'city' => '東京都',
        'shop' => '焼肉',
    ];
    DB::table('authors')->insert($param);
    $param = [
        'class-name' => 'wrapper-box_nineteen',
        'name' => 'THE TOOL',
        'image' => 'img/italian.jpg',
        'city' => '福岡県',
        'shop' => 'イタリアン',
    ];
    DB::table('authors')->insert($param);
    $param = [
        'class-name' => 'wrapper-box_twenty',
        'name' => '木船',
        'image' => 'img/sushi.jpg',
        'city' => '大阪府',
        'shop' => '寿司',
    ];
    DB::table('authors')->insert($param);

    Author::factory()->count(35)->create();
    }
}
