<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['post_id', 'content'];

    // Un comentario tiene un artículo:
    public function post()
    {
        return $this->belongsTo('App\Post');
    }

    // Un comentario tiene un usuario:
    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
