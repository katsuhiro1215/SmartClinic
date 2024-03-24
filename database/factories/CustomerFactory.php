<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    public function definition(): array
    {
        return [
            'lastname' => fake()->lastName(),
            'firstname' => fake()->firstName(),
            'lastname_kana' => fake()->lastKanaName(),
            'firstname_kana' => fake()->firstKanaName(),
            'customer_photo_path' => fake()->url(),
            'birth' => fake()->dateTimeBetween('1940-01-01', '2005-12-31'),
            'gender' => fake()->randomElement(['男', '女', 'その他']),
            'blood' => fake()->randomElement(['A型', 'B型', 'O型', 'AB型', null]),
            'zipcode' => fake()->postcode(),
            'address1' => fake()->prefecture(),
            'address2' => fake()->city(),
            'address3' => fake()->streetName(),
            'address4' => fake()->streetName(),
            'phone_number' => fake()->phoneNumber(),
            'mobile_number' => fake()->phoneNumber(),
            'email' => fake()->unique()->safeEmail(),
        ];
    }
}
