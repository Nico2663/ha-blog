<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'user_id', 'content'];

    public static $validationRules = [
        'title'     => 'required|max:140',
        'content'   => 'required',
        'user_id'   => 'required',
    ];

    public static $validationRulesMessages = [
        'required' => 'El campo :attribute es obligatorio.',
        'title.max' => 'El campo título debe tener menos de :max caracteres.'
    ];

    // Un artículo tiene muchos comentarios:
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    // Un artículo tiene un usuario:
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public static function search($q) {
        $query = new Post;
        if (isset($q)) {
            $query = $query
                ->where('content', 'like', "%$q%")
                ->orWhere('title', 'like', "%$q%");
        }
        $posts = $query->get();
        return $posts;
    }
}
