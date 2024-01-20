<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Designdocument>
 */
class DesigndocumentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

                "designation" => $this->faker->unique()->bothify('ТБ # ### ###'),
                'name'=>$this->faker->randomElement('Корпус','Основание','Рамка','Болт','Втулка'),
                "type"=> 'чертеж'
        ];
    }
}
