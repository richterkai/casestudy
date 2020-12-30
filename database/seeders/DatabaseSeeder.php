<?php

namespace Database\Seeders;

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
        \App\Models\Users::factory(10)->create();
        \App\Models\Company::factory(10)->create();
        \App\Models\Job::factory(10)->create();
        \App\Models\Company_Users::factory(10)->create();

    }
}
