<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\AdminUser;
use App\Models\Order;
use App\Models\Post;
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

         Order::factory(10)->create();

         AdminUser::factory(1)->create([
            "name"=>"Admin",
            "email"=>"ordermanager@ordermanager.com",
            "password"=>bcrypt("12345"),

         ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
