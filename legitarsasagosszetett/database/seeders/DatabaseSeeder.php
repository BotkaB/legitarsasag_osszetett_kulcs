<?php

namespace Database\Seeders;

use App\Models\Travel;
use App\Models\Airline;
use App\Models\Flight;
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
        User::factory(100)->create();
        Airline::factory(10)->create();
        Flight::factory(50)->create();
        Travel::factory(10)->create();


       /* User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);*/
    }
}
