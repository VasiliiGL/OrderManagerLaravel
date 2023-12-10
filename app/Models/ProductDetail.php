<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    use HasFactory;

    protected $fillable =[
        "product_id",
        "technology_id",
        "pricing_id",
        "material_id",
        "galvanic_id",
        "paint_id"
    ];
}
