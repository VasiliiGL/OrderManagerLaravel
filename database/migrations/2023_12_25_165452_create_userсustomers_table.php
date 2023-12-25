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
        Schema::create('userсustomers', function (Blueprint $table) {
            $table->id();
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
        Schema::dropIfExists('userсustomers');
    }
};
