<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

     // Детали-изделия которые состоят из нескольхих элементов выделим в отдельный список - сборочные единицы
    public function up(): void
    {
        Schema::create('assembly_units', function (Blueprint $table) {
            $table->id();
            $table->foreignId("document_change_id")->unique()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assembly_units');
    }
};
