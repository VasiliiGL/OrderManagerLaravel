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
        Schema::create('changedocuments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('designdocument_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('notice_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('number'); //порядковый номер изменения, встречаются символы и буквы
            $table->string('documentfile')->nullable();; //ссылка на документ - чертеж
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('changedocuments');
    }
};
