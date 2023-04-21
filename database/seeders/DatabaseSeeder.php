<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\flights;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
//        \App\Models\planes::factory(10)->create();
//        flights::factory(10)->create();
//        \App\Models\passengers::factory(10)->create();
        \App\Models\bookings::factory(10)->create();

    }
}
