<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory()->create([
            'firts_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'test@example.com'
        ]);

       $this->call(JobSeeder::class);
    }
}
