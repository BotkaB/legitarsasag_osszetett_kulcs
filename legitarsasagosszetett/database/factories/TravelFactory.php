<?php

namespace Database\Factories;
use App\Models\User;
use App\Models\Flight;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Travel>
 */
class TravelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'evaluation'=>fake('hu_Hu')->sentence,
            'flight_id'=> Flight::all()->random()->flight_id,
            'user_id'=> User::all()->random()->id,
            

        ];
    }
}
