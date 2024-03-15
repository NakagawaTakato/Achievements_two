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
        // ここからグループデータの挿入
        $params = [
            ['time' => '17:00', 'number' => '1人'],
            ['time' => '18:00', 'number' => '2人'],
            ['time' => '19:00', 'number' => '3人'],
            ['time' => '20:00', 'number' => '4人'],
            ['time' => '21:00', 'number' => '5人'],
            ['time' => '22:00'],
            ['time' => '23:00'],
            ['time' => '24:00']
        ];

        foreach ($params as $param) {
            DB::table('groups')->insert(['param' => $param]);
        }
    }
}
