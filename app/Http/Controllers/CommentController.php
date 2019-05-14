<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Comment;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $rules = [
            'content' => 'required|max:2000'
        ];
    
        $customMessages = [
            'required' => 'El campo :attribute es obligatorio.',
            'title.max' => 'El campo Título debe tener menos de :max caracteres.'
        ];
    
        $this->validate($request, $rules, $customMessages);

        $comment = new Comment();
        $comment->post_id = $request->post_id;
        $comment->user_id = Auth::id();
        $comment->content = $request->content;
        $comment->save();
        return back();
    }
}
