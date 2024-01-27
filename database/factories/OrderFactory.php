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
           'customer_id'=>(1),
           'organization_id'=>(1),
           'number' => $this->faker->unique()->bothify('АОК ####'),
           'data' =>  $this->faker->dateTime(),
           'description'=> $this->faker->text(50),
           'desiredDate'=>$this->faker->bothify('# недели'),
           'letter'=>$this->faker->image("storage/app/public/letters",640,520,null,false),
        ];
    }
}

/*     Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id') ->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('organization_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('number'); // номер письма от заказчика 
            $table->date('data'); // дата создания входящего письма
            $table->text('description'); // описание заказа
            $table->string('desiredDate'); // сроки выполнения заказа
            $table->string('letter')->nullable(); // письмо заказчика
            $table->timestamps();
        });*/