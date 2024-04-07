<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderStatus extends Model
{
    use HasFactory;
    protected $fillable = [
        "order_id",
        "status_id",
        "user_id",
        "comment",
        "document"
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

/*  $table->id();
            $table->foreignId("order_id")->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId("status_id")->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId("user_id")->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->text('comment')->nullable();; // комментарий исполнителя
            $table->string('document')->nullable();; // письмо заказчика с визой директора, номенклатура, калькуляция.
            $table->timestamps();*/