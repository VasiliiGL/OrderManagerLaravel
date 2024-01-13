<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    use HasFactory;
    protected $fillable = [
        "title",
        "address",
        "email",
        "phone",
        "description",
        "password"
    ];
    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
/*$table->id();
$table->string('title')->unique(); //  Название организации
$table->text('address');  //  Адрес организации
$table->string('email')->unique();
$table->string('phone'); 
$table->text('description')->nullable();//  описание организации
$table->string('password'); // пароль организации для входа
$table->timestamps();*/