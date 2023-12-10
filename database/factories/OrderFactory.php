<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "number"=>$this->faker->unique()->integer(),
            "user_id"=>$this->faker->id(),
            "task"=>$this->faker->text(),
            "writing"=>$this->faker->image("public/storage/orders",640,520,null,false),
        ];
    }
}
