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
           //"number" => $this->faker->unique()->numberBetween(1,1000)
           'number' => $this->faker->unique()->bothify('АОК ####'),
           'data' =>  $this->faker->dateTime(),
           'description'=> $this->faker->text(50),
           'desiredDate'=>$this->faker->bothify('# недели'),
           'letter'=>$this->faker->image("letters"),
        ];
    }
}

/* $table->string('number'); // номер письма от заказчика 
            $table->date('data'); // дата создания входящего письма
            $table->text('description'); // описание заказа
            $table->string('desiredDate'); // сроки выполнения заказа
            $table->string('letter'); // письмо заказчика
            $table->timestamps();*/