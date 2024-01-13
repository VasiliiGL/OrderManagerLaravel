<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusOrder extends Model
{
    use HasFactory;
    protected $fillable = [
        "status"
    ];
}

/*Schema::create('status_orders', function (Blueprint $table) {
    $table->id();
    $table->enum('status',['прием','резолюзия','отказ','номенклатура','нормирование','согласование','договор','исполнение','контроль','отгрузка']);
});*/