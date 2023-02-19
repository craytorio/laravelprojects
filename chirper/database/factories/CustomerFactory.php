<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'lastName'=>fake()->lastname(),
            'firstName'=>fake()->firstname(),
            'contactNumber'=>fake()->phoneNumber(),
            'address'=>fake()->address(),
            'email'=>fake()->SafeEmail(),
            
        ];
    }
}
