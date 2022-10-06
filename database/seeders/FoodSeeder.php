<?php

namespace Database\Seeders;
use App\Models\T_Food;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        T_Food::factory()->count(10)->create();
    }
}
