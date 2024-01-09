<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // таблица заказов
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('number'); // номер письма от заказчика 
            $table->date('data'); // дата создания входящего письма
            $table->text('description'); // описание заказа
            $table->string('desiredDate'); // сроки выполнения заказа
            $table->string('letter')->nullable(); // письмо заказчика
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
