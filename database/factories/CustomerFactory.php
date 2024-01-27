<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
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
            'title' =>$this-> faker()->name()->unique()->bothify('OOO #######'),
            'address' =>$this->faker()->address(),
            'email' => $this-> faker()->unique()->safeEmail(),
            'phone' =>$this->faker()->phoneNumber(),
            'description'=> $this->faker->text(50),
            'password' => static::$password ??= Hash::make('password'),

        ];
    }
}

/*protected $fillable = [
        "title",
        "address",
        "email",
        "phone",
        "description",
        "password"
    ];*/