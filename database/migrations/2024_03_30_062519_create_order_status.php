<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('order_status', function (Blueprint $table) {
            $table->id();
            $table->foreignId("order_id")->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId("status_id")->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->boolean('current')->nullable();
            $table->foreignId("user_id")->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->text('comment')->nullable(); // комментарий исполнителя
            $table->string('document')->nullable(); // письмо заказчика с визой директора, номенклатура, калькуляция.
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_status');
    }
};