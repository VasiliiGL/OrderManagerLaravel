<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Notice>
 */
class NoticeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'designation' => $this->faker->unique()->bothify('ТБ/####'),
            'data' =>  $this->faker->dateTime(),
            'description'=> $this->faker->text(50),
            "documentfile"=>$this->faker->image("storage/app/public/notices",640,520,null,false),
        ];
    }
}

/*   Schema::create('notices', function (Blueprint $table) {
            $table->id();
            $table->string('designation'); //обозначение
            $table->date('data'); //дата выпуска извещения
            $table->text('description');
            $table->string('documentfile'); //ссылка на документ - извещение
            $table->timestamps();
        });*/