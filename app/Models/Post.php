<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'postlat';

    protected $fillable = ['title', 'body'];

}
