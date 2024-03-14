<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'time' => '17:00',
            'number' => '1人'
        ];
        DB::table('groups')->insert($param);
        $param = [
            'time' => '18:00',
            'number' => '2人'
        ];
        DB::table('groups')->insert($param);
                $param = [
            'time' => '19:00',
            'number' => '3人'
        ];
        DB::table('groups')->insert($param);
        $param = [
            'time' => '20:00',
            'number' => '4人'
        ];
        DB::table('groups')->insert($param);
        $param = [
            'time' => '21:00',
            'number' => '5人'
        ];
        DB::table('groups')->insert($param);
        $param = [
            'time' => '22:00',
        ];
        DB::table('groups')->insert($param);
        $param = [
            'time' => '23:00',
        ];
        DB::table('groups')->insert($param);
        $param = [
            'time' => '24:00',
        ];
        DB::table('groups')->insert($param);
    }
}
