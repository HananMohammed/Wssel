<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

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
     *
     * @return array
     */
    public function definition()
    {
        return [
            "customer_id" => Customer::all()->random()->id ,
            "date" => $this->faker->date(),
            "time" => $this->faker->time(),
            "amount" => rand(50,90),
            "shop_type" =>$this->faker->randomElement(['supermarket', 'restaurant']),
        ];
    }
}
