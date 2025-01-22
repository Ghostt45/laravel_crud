<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
//            'email_verified_at' => now(),
//            'password' => bcrypt('password'),
//            'remember_token' => \Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
