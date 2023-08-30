<?php

namespace Database\Seeders;

use App\Models\Demo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DemosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Demo::factory()->count(5)->create();
    }
}
