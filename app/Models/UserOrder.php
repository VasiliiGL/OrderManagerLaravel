<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserOrder extends Model
{
    use HasFactory;
    protected $fillable =[
        "order_id",
        "user_id"
    ];

}

/*   $table->id();
            $table->foreignId("order_id")->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId("user_id")->constrained()->cascadeOnDelete()->cascadeOnUpdate();           
            $table->timestamps();*/