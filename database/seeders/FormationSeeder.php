<?php

namespace Database\Seeders;

use App\Models\formation;
use Illuminate\Database\Seeder;

class FormationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        formation::factory()->count(5)->create();
    }
}
