<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "number"=> $this->faker->text(),
            "name"=> $this->faker->name(),
            "drawing"=>$this->faker->image("public/storage/product/drawing",640,520,null,false),
            "variation"=> $this->faker->integer(),
            "notice"=> $this->faker->text(),
            "noticedrawing"=>$this->faker->image("public/storage/product/notice",640,520,null,false),
        ];
    }
}
