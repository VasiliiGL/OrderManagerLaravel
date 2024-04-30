<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        "customer_id",
        "organization_id",
        "number",
        "data",
        "description",
        "desiredDate",
        "letter"
    ];

    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
    public function usercustomers()
    {
        return $this->belongsToMany(UserCustomer::class);
    }
    public function statuses()
    {
        return $this->belongsToMany(Status::class);
    }
    public function changedocuments()
    {
        return $this->belongsToMany(Changedocument::class,'changedocument_orders')->withPivot('need','id');
    }

}

/*$table->id();
$table->foreignId('customer_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
$table->foreignId('organization_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
$table->string('number'); // номер письма от заказчика 
$table->date('data'); // дата создания входящего письма
$table->text('description'); // описание заказа
$table->string('desiredDate'); // сроки выполнения заказа
$table->string('letter')->nullable(); // письмо заказчика
$table->timestamps();*/