<?php

namespace Database\Seeders;

use App\Models\chapitre;
use Illuminate\Database\Seeder;

class ChapitreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        chapitre::factory()->count(50)->create();
    }
}
