<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // Таблица организации-заказчиков
    public function up(): void
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique(); //  Название организации
            $table->text('address');  //  Адрес организации
            $table->string('email')->unique();
            $table->string('phone'); 
            $table->text('description')->nullable();//  описание организации
            $table->string('password'); // пароль организации для входа
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
