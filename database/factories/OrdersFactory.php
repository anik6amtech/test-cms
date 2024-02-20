<?php

namespace Database\Factories;

use App\Models\Orders;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */

class OrdersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Orders::class;
    public function definition(): array
    {
        return [
            'order_number' => $this->faker->unique()->uuid,
            'user_name' => $this->faker->name,
            'user_email' => $this->faker->unique()->safeEmail,
            'user_phone' => $this->faker->phoneNumber,
            'total_amount' => $this->faker->randomFloat(2, 10, 500),
            'order_date' => $this->faker->dateTimeBetween('-1 year', 'now'),
            // Add other fields as needed
        ];
    }
}
