<?php

namespace Database\Seeders;
use Package\Post\database\seeders\MemberSeeder;
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
        \App\Models\Member::factory(5)->create();

        
        //  \App\Models\User::factory(5)->create();
        // \Package\Post\App\Models\Member::factory(5)->create();
    }
}
