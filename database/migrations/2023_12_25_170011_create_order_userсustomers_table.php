<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // связь работников заказчика с заказом. В одном заказе может быть несколько работников
    public function up(): void
    {
        Schema::create('order_usercustomers', function (Blueprint $table) {
            $table->id();
            $table->foreignId("order_id")->constrained()->cascadeOnDelete()->cascadeOnUpdate(); 
            $table->foreignId("usercustomer_id")->constrained()->cascadeOnDelete()->cascadeOnUpdate();          
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_usercustomers');
    }
};
