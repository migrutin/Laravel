<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cost;
use App\Models\User;

class CostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cost::factory()->times(80)->create();
    }
}
