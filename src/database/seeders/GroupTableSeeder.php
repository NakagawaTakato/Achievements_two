<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            ["17:00", "1人"],
            ["18:00", "2人"],
            ["19:00", "3人"],
            ["20:00", "4人"],
            ["21:00", "5人"],
            ["22:00"],
            ["23:00"],
            ["24:00"],
        ];

        foreach ($params as $param) {
            DB::table('groups')->insert(['param' => json_encode($param, JSON_UNESCAPED_UNICODE)]);
        }

    }
}
