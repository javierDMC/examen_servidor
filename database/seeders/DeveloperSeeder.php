<?php

namespace Database\Seeders;

use App\Models\Developer;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DeveloperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Developer::factory()->count(20)->create();
    }
}
