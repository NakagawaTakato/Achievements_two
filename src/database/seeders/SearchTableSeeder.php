<?php

namespace Database\Seeders;

use App\Models\Search;
use Illuminate\Database\Seeder;

class SearchTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Search::factory()->count(35)->create();
    }
}
