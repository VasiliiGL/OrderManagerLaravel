<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assemblyunit extends Model
{
    use HasFactory;
    protected $fillable = [
        "changedocument_id",
     ];

    public function changedocument()
    {
        return $this->belongsTo(Changedocument::class);
    }
}

/* Schema::create('assemblyunits', function (Blueprint $table) {
            $table->id();
            $table->foreignId('changedocument_id')->unique()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });*/