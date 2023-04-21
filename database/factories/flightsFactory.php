<?php

namespace Database\Factories;

use App\Models\planes;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Flight>
 */
class flightsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'flight_number' => $this->faker->unique()->regexify('[A-Z]{2}[0-9]{4}'),
            'departure_airport' => $this->faker->city(),
            'destination_airport' => $this->faker->city(),
            'ending_airport' => $this->faker->city(),
            'departure_time' => Carbon::instance($this->faker->dateTimeBetween('-1 week', '+1 week')),

            'arrival_time' => Carbon::instance($this->faker->dateTimeBetween('-1 week', '+1 week')),
            'plane_id' => planes::inRandomOrder()->first()->id,
        ];
    }
}
