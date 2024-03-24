<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CustomerInformation>
 */
class CustomerInformationFactory extends Factory
{
    public function definition(): array
    {
        return [
            'customer_id' => Customer::all()->random()->id,
            'first_visit_datetime' => fake()->dateTimeBetween('1940-01-01', '2005-12-31'),
            'last_visit_datetime' => fake()->dateTimeBetween('1940-01-01', '2005-12-31'),
            'visit_count' => fake()->numberBetween(1, 20),
            'visit_purpose' => fake()->realText(),
            'permission_photo' => fake()->randomElement([1, 0]),
            'permission_dm' => fake()->randomElement([1, 0]),
            'personal_history' => fake()->realText(),
            'remarks' => fake()->realText(),
        ];
    }
}
