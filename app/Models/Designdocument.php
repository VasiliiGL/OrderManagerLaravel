<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Designdocument extends Model
{
    use HasFactory;
    protected $fillable = [
        "designation",
        "name",
        "type"
    ];

    public function changedocuments()
    {
       return $this->hasMany(Changedocument::class)->orderBy("created_at");
    }
}

/*Schema::create('designdocuments', function (Blueprint $table) {
    $table->id();
    $table->string('designation'); //обозначение конструкторского документа
    $table->string('name'); //наименование изделия
    $table->enum('type',['спецификация','чертеж','модель','нормаль','покупная','другое']);//тип документа
    $table->timestamps();
});*/