<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\AdminUser;
use App\Models\Customer;
use App\Models\Designdocument;
use App\Models\Notice;
use App\Models\Order;
use App\Models\Organization;
use App\Models\Post;
use App\Models\Status;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         \App\Models\User::factory(10)->create();

         Post::factory(10)->create();

         //Order::factory(10)->create();

         Designdocument::factory(10)->create();

         Notice::factory(5)->create();

         //Status::factory(10)->create();


         AdminUser::factory(1)->create([
            "name"=>"Admin",
            "email"=>"ordermanager@ordermanager.com",
            "password"=>bcrypt("12345"),

         ]);

         Customer::factory(1)->create([
            "title"=>"OOO Customer",
            "address"=>"Ломоносова д.5",
            "email"=>"customer@customer.com",
            "phone"=>"241570",
            "description"=>"Customer",
            "password"=>bcrypt("111"),

         ]);

         Organization::factory(1)->create([
            "title"=>"OOO ИжПЗ-Механика",
            "address"=>"Щорса д.1",
            "email"=>"organization@organization.com",
            "phone"=>"241570",
            "description"=>"Механическая обработка",
            "password"=>bcrypt("111"),

         ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}

/* return [
            'title' =>$this-> faker()->name()->unique()->bothify('OOO #######'),
            'address' =>$this->faker()->address(),
            'email' => $this-> faker()->unique()->safeEmail(),
            'phone' =>$this->faker()->phoneNumber(),
            'description'=> $this->faker->text(50),
            'password' => static::$password ??= Hash::make('password'),
        ];*/