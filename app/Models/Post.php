<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Mail\Mailables\Content;

class Post extends Model
{
    //
    use HasFactory;

    protected $fillable = [

        'title',
        'content',
        'id_user',
        
    ];


}
