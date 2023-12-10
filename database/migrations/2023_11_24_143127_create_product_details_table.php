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
        Schema::create('product_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId("product_id")->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId("technology_id")->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId("pricing_id")->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId("material_id")->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId("galvanic_id")->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId("paint_id")->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_details');
    }
};
