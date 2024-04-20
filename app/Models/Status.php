<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;
    protected $fillable = [
        "status",
        "current"
    ];

    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }

}
