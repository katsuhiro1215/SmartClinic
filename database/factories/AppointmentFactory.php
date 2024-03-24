<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\Schedule;
use App\Models\Threapist;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Appointment>
 */
class AppointmentFactory extends Factory
{
    public function definition(): array
    {
        return [
            'customer_id' => Customer::all()->random()->id,
            'schedule_id' => Schedule::all()->random()->id,
            'threapist_id' => Threapist::all()->random()->id,
            'appointment_details' => fake()->realText(),
            'status' => fake()->randomElement(['予約済み', 'キャンセル', '完了', null]),
        ];
    }
}
