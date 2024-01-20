<?php

namespace Database\Factories;

use App\Models\Status;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Status>
 */
class StatusFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           'type'=>$this->faker->randomElement('прием','резолюзия','отказ','номенклатура','нормирование','согласование','договор','исполнение','контроль','отгрузка'),
            'current'=>'false'
        ];
    }
}
