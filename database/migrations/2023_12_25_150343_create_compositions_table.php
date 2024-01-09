<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    //Таблица определяет состав изделия
    public function up(): void
    {
        Schema::create('compositions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('assembly_unit_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();;
            $table->foreignId('document_change_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();;
            $table->integer('applicability'); //применяемость входящей детали в сборке, количество в составе
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('compositions');
    }
};
