<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Schedule>
 */
class ScheduleFactory extends Factory
{
    public function definition(): array
    {
        $availableHour = $this->faker->numberBetween(9, 20);
        $minutes = [0, 10, 20, 30, 40, 50];
        $mKey = array_rand($minutes);
        $addHour = $this->faker->numberBetween(1, 3);
        
        $startDate = $this->faker->dateTimeThisMonth->setTime($availableHour, $minutes[$mKey]);
        $endDate = clone $startDate;
        $endDate->modify('+' . $addHour . ' hours');

        return [
            'start_date' => $startDate,
            'end_date' => $endDate,
            'day_of_week' => fake()->randomElement(['月曜日', '火曜日', '水曜日', '木曜日', '金曜日', '土曜日', '日曜日']),
        ];
    }
}
