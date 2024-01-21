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
        Schema::create('changedocument_orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('changedocument_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('order_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->integer('need'); // требуемое количесво изделий
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('changedocument_orders');
    }
};
