<?php

namespace App\Models;

use Egulias\EmailValidator\Warning\Comment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable =[
        "title",
        "description",
        "preview",
        "thumbnail"
    ];

    public function comments()
    {
        $this->hasMany(Comment::class)->orderBy("created_at");
    }
}
