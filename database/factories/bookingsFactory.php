<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class bookingsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'flight_id' => \App\Models\flights::factory(),
            'passenger_id' => \App\Models\passengers::factory(),
//            'seat_number' => $this->faker->unique()->regexify('[A-F][1-9][0-9]?'),
        ];
    }
}
