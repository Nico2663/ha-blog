@extends('master')

@section('content')

<div class="container">

    <div class="row">

        <div class="col-lg-8">

            <h1 class="mt-4">{{ $post->title }}</h1>

            <p class="lead">
                Autor: <a href="#">{{ $post->user->name }}</a>
            </p>

            <hr>

            <p>Publicado el {{ $post->created_at }}</p>

            <hr>

            {{-- 
                Los primeros 7 artículos se cargaron vía Seeds y sus imágenes están dentro de /public/img/.
                En cambio, los sigiuentes artículos tienen imágenes guardadas en /storage/app/public/ o en S3.
                Por eso se tuvo que implementar el siguiente código:
            --}}
            @if (isset($post->image) && $post->id > 7)
                <img class="img-fluid rounded" src="{{ Storage::url($post->image) }}" alt="{{ $post->title }}">
            @elseif(isset($post->image) && $post->id <= 7)
                <img class="img-fluid rounded" src="{{ asset('img/' . $post->image) }}" alt="{{ $post->title }}">
            @else
                <img class="img-fluid rounded" src="{{ asset('img/900x400.png') }}" alt="{{ $post->title }}">
            @endif

            <hr>

            <!-- Post Content -->
            <div class="post-content">
                {{ $post->content }}
            </div>

            <hr>

            @if(Auth::check())
                <!-- Comments Form -->
                <div class="card my-4">
                    <h5 class="card-header">Dejar un comentario:</h5>
                    <div class="card-body">
                        <form action="/admin/comentarios/crear" method="post">
                            @csrf
                            <input type="hidden" name="post_id" value="{{ $post->id }}">
                            <div class="form-group">
                                <textarea class="form-control" name="content" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Comentar</button>
                        </form>
                    </div>
                </div>
            @endif

            @foreach ($post->comments as $key => $comment)
                <!-- Single Comment -->
                <div class="media mb-4">
                    <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                    <div class="media-body">
                        <h5 class="mt-0">{{ $comment->user->name }}</h5>
                        {{ $comment->content }}
                    </div>
                </div>
            @endforeach

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-lg-4">

            <!-- Search Widget -->
            <div class="card my-4">
                <h5 class="card-header">Buscar</h5>
                <div class="card-body">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Buscar...">
                        <span class="input-group-btn">
                            <button class="btn btn-secondary" type="button">Buscar</button>
                        </span>
                    </div>
                </div>
            </div>

            <!-- Categories Widget -->
            <div class="card my-4">
                <h5 class="card-header">Categorías</h5>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="#">PHP</a>
                                </li>
                                <li>
                                    <a href="#">HTML</a>
                                </li>
                                <li>
                                    <a href="#">Laravel</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="#">JavaScript</a>
                                </li>
                                <li>
                                    <a href="#">CSS</a>
                                </li>
                                <li>
                                    <a href="#">Tutoriales</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Side Widget -->
            <div class="card my-4">
                <h5 class="card-header">Side Widget</h5>
                <div class="card-body">
                    You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
                </div>
            </div>

        </div>

    </div><!-- /.row -->

</div><!-- /.container -->

@endsection
