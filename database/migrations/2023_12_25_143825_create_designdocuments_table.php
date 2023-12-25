<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Enums\DocumentType;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    /*Для каждого изделия создается документация,
    которая имеет обознаечние, наименование  и подразделяется на чертеж ,
    спецификацию, если это сборка, электронную модель и т.д*/
    public function up(): void
    {
        Schema::create('designdocuments', function (Blueprint $table) {
            $table->id();
            $table->string('designation'); //обозначение конструкторского документа
            $table->string('name'); //наименование изделия
            $table->enum('type',['спецификация','чертеж','модель','нормаль','покупная','другое']);//тип документа
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('designdocuments');
    }
};
