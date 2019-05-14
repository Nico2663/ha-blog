<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Mail\PostCreated;

class PostController extends Controller
{
    public function showList()
    {
        $posts = Post::all();
        return view('admin.posts', ['posts' => $posts]);
    }
    
    public function showCreate()
    {
        // Mostrar fomulario de creación:
        $users = User::all();
        return view('admin/postCreate', [
            'users' => $users,
        ]);
    } 

    public function showEdit($id)
    {
        // Mostrar fomulario de edición:
        $post = Post::find($id);
        $users = User::all();
        return view('admin/postEdit', [
            'post'  => $post,
            'users' => $users,
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, Post::$validationRules, Post::$validationRulesMessages);
        $post = Post::create($request->all());

        $path = $request->file('image')->store('img/posts');
        $post->image = $path;
        $post->save();

        Mail::to(Auth::user()->email)->send(new PostCreated($post));

        return redirect('admin/articulos')->with('mensaje', "El artículo $post->id fue creado exitosamente.");
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, Post::$validationRules, Post::$validationRulesMessages);
        
        $post = Post::find($id);
        $post->title = $request->title;
        $post->user_id = $request->user_id;
        $post->content = $request->content;

        if ($request->file('image') != null) {
            $path = $request->file('image')->store('img/posts');
            $post->image = $path;
        }

        $post->save();

        return redirect('admin/articulos')->with('mensaje', "El artículo $post->id fue actualizado exitosamente.");
    } 

    public function delete($id)
    {
        $post = Post::find($id);
        Storage::delete($post->image); // Elimina la imagen.
        $post->delete(); // Elimina el artículo de la base de datos.
        return redirect('admin/articulos')->with('mensaje', "El artículo $id fue eliminado exitosamente.");
    } 
}
