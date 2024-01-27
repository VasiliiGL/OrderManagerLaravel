<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

     // Данные о работниках заказчика. Они могут быть не зарегестрированы в системе. и не приязаны таблице user
    public function up(): void
    {
        Schema::create('usercustomers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('firstname');
            $table->string('fathername');
            $table->string('lastname');
            $table->string('jobtitle');
            $table->string('workphone');
            $table->string('personalphone');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usercustomers');
    }
};
