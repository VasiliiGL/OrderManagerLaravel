<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserСustomer extends Model
{
    use HasFactory;
    
    protected $fillable = [
        "firstname",
        "fathername",
        "lastname",
        "jobtitle",
        "workphone",
        "personalphone"
     ];
     public function orders()
     {
         return $this->belongsToMany(Order::class);
     }

     public function customer()
     {
        return $this->belongsTo(Customer::class);
     }
}

/*Schema::create('userсustomers', function (Blueprint $table) {
    $table->id();
    $table->string('firstname');
    $table->string('fathername');
    $table->string('lastname');
    $table->string('jobtitle');
    $table->string('workphone');
    $table->string('personalphone');
    $table->timestamps();
});*/