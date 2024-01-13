<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderProcessing extends Model
{
    use HasFactory;
    protected $fillable = [
        "order_id",
        "status_order_id",
        "user_id",
        "comment",
        "document"
    ];
}

/*  Schema::create('order_processings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('status_order_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate(); // кто изменил статус
            $table->text('comment'); // комментарий исполнителя
            $table->string('document'); // письмо заказчика с визой директора, номенклатура, калькуляция.
            $table->timestamps();
        });*/