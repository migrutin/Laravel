<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Database\Seeders\UsersSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([CustomerSeeder::class]);
        $this->call([CostSeeder::class]);
        
     
    }
}
