<?php

namespace Database\Seeders;

use App\Models\Weight_log;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Weight_log::factory(35)->create();
    }
}
