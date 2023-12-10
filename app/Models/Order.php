<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        "number",
        "user_id",
        "task",
        "writing"
    ];

    public function orderdetail()
    {
        $this->hasOne(OrderDetail::class);
    }
    public function user()
    {
        $this ->belongsTo(User::class);
    }
}
