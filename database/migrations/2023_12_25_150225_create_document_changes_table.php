<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

     //Для каждого документа может быть несколько изменений, 
     //таблица будет хранить новые версии чертежа , номер изменения,новый документ и фаил извещения об изменении
    public function up(): void
    {
        Schema::create('document_changes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('designdocument_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('changenumber'); // номер изменения
            $table->string('notice'); // номер извещения
            $table->date('data'); // дата изменения/создания(выпуска) документа
            $table->string('notificationfile'); //ссылка на документ - извещение
            $table->string('documentfile'); //ссылка на документ - чертеж
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('document_changes');
    }
};
