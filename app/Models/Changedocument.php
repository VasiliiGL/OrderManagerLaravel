<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Changedocument extends Model
{
    use HasFactory;

    protected $fillable = [
        "designdocument_id",
        "number",
        "documentfile"
    ];

    public function designdocument()
    {
        return  $this->belongsTo(Designdocument::class);
    }

    public function notice ()
    {
        return $this->belongsTo(Notice::class);
    }

    public function assemblyunit()
    {
        return $this->hasOne(Assemblyunit::class)->withDefault();;
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class,'changedocument_orders')->withPivot('need','id');
    }

    public function assemblyunits()
    {
        return $this->belongsToMany(Assemblyunit::class);
    }

    public function techprocesses()
    {
        return $this->hasMany(Techprocess::class);
    }


}

/* $table->id();
            $table->foreignId('designdocument_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('number'); //порядковый номер изменения, встречаются символы и буквы
            $table->string('documentfile'); //ссылка на документ - чертеж
            $table->timestamps();*/