<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\DeliveryMethod;
use App\Models\Order;
use App\Models\User;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'order_code' => $this->faker->word(),
            'user_id' => User::factory(),
            'delivery_method_id' => DeliveryMethod::factory(),
            'status' => $this->faker->randomElement(["pending"]),
            'payment_status' => $this->faker->randomElement(["unpaid"]),
        ];
    }
}