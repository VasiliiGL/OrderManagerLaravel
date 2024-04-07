<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    use HasFactory;
    protected $fillable = [
         "user_id",
         "organization_id",
        "firstname",
        "fathername",
        "lastname",
        "jobtitle",
        "workphone",
        "personalphone"
     ];

     public function user()
     {
        return $this->belongsTo(User::class);
     }
     public function organization()
     {
        return $this->belongsTo(Organization::class);
     }
}
