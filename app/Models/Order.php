<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        "number",
        "data",
        "description",
        "desiredDate",
        "letter"
    ];

    public function users()
    {
        $this->belongsToMany(User::class);
    }
    public function organizations()
    {
        $this->belongsTo(Organization::class);
    }
    public function customers()
    {
        $this->belongsTo(Customer::class);
    }
    public function usercustomers()
    {
        $this->belongsToMany(UserСustomer::class);
    }
   public function statuses()
   {
        $this->belongsToMany(Status::class);
   }
    
}

/* $table->string('number'); // номер письма от заказчика 
            $table->date('data'); // дата создания входящего письма
            $table->text('description'); // описание заказа
            $table->string('desiredDate'); // сроки выполнения заказа
            $table->string('letter'); // письмо заказчика
            $table->timestamps();*/