<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Organization>
 */
class OrganizationFactory extends Factory
{
    protected static ?string $password;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' =>$this-> faker->unique()->bothify('OOO #######'),
            'address' =>$this->faker->address(),
            'email' => $this-> faker->unique()->safeEmail(),
            'phone' =>$this->faker->phoneNumber(),
            'description'=> $this->faker->text(50),
            'password' => static::$password ??= Hash::make('password'),
        ];
    }
}

/* Schema::create('organizations', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique(); //  Название организации
            $table->text('address');  //  Адрес организации
            $table->string('email')->unique();
            $table->string('phone'); 
            $table->text('description')->nullable();//  описание организации
            $table->string('password'); // пароль организации для входа
            $table->timestamps();
        });*/