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
        $this->belongsTo(Designdocument::class);
    }

    public function notice ()
    {
        $this->belongsTo(Notice::class);
    }

    public function assemblyunit()
    {
        return $this->hasOne(Assemblyunit::class)->withDefault();;
    }

    public function orders()
    {
        return $this->belongsToMany(Changedocument::class);
    }


}

/* $table->id();
            $table->foreignId('designdocument_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('number'); //порядковый номер изменения, встречаются символы и буквы
            $table->string('documentfile'); //ссылка на документ - чертеж
            $table->timestamps();*/