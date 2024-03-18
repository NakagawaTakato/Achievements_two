<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NumberTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $values = [
            "1人",
            "2人",
            "3人",
            "4人",
            "5人",
        ];
//
        foreach ($values as $value) {
            DB::table('numbers')->insert(['value' => ($value)]);
        }
    }
}
