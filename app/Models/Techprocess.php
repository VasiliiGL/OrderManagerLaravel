<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Techprocess extends Model
{
    use HasFactory;
    protected $fillable = [
        "changedocument_id",
        "type",
        "description",
        "cost",
        "document"
    ];
  
    public function changedocument()
     {
        return $this->belongsTo(Changedocument::class);
     }

}
/*  Schema::create('techprocesses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('changedocument_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('type'); 
            $table->text('description'); // описание ТП
             $table->float('cost'); // ориентировочная трудоемкость
            $table->timestamps();
        });*/