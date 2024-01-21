<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssemblyunitChangedocument extends Model
{
    use HasFactory;
    protected $fillable = [
        "changedocument_id",
        "assemblyunit_id",
        "applicability"
     ];
}
/* Schema::create('assemblyunit_changedocuments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('changedocument_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('assemblyunit_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->integer('applicability'); //количество деталей в сборке
            $table->timestamps();
        });*/