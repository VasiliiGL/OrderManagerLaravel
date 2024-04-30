<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChangedocumentOrder extends Model
{
    use HasFactory;
    protected $fillable = [
        "changedocument_id",
        "order_id",
        "need"
    ];
}
/*    Schema::create('changedocument_order', function (Blueprint $table) {
            $table->id();
            $table->foreignId('changedocument_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('order_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });*/