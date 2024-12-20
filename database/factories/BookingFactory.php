<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Booking;
use App\Models\DeliveryMethod;
use App\Models\User;

class BookingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Booking::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'booking_code' => $this->faker->word(),
            'user_id' => User::factory(),
            'delivery_method_id' => DeliveryMethod::factory(),
            'status' => $this->faker->randomElement(["pending",""]),
        ];
    }
}
