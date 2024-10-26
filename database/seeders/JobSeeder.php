<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Job; // Asegúrate de importar el modelo Job

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Job::factory(200)->create();
    }
}
