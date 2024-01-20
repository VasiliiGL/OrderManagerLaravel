<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    use HasFactory;
    protected $fillable = [
        "designation",
        "data",
        "description",
        "documentfile",
    ];

    public function changedocuments()
    {
       return $this->hasMany(Changedocument::class);
    }
}
/*    Schema::create('notices', function (Blueprint $table) {
            $table->id();
            $table->string('designation'); //обозначение
            $table->date('data'); //дата выпуска извещения
            $table->text('description');
            $table->string('documentfile'); //ссылка на документ - извещение
            $table->timestamps();
        });*/

