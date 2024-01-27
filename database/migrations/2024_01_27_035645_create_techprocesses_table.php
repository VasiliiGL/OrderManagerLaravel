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
        Schema::create('techprocesses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('changedocument_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('type'); 
            $table->text('description'); // описание ТП
            $table->float('cost'); // ориентировочная трудоемкость
            $table->text('document'); // ссылка на документ ТП
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('techprocesses');
    }
};
