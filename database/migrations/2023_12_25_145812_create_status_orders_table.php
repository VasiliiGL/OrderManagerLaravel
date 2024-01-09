<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

     //состояние выполнения заказа, может иметь несколько стандартных состояний
    public function up(): void
    {
        Schema::create('status_orders', function (Blueprint $table) {
            $table->id();
            $table->enum('status',['прием','резолюзия','отказ','номенклатура','нормирование','согласование','договор','исполнение','контроль','отгрузка']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('status_orders');
    }
};
