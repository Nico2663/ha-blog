@extends('master')

@section('content')
<div class="container">

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

            <h1 class="my-4">Artículos</h1>

            @foreach($posts as $post)         
                <!-- Blog Post -->
                <div class="card mb-4">

                    {{-- 
                        Los primeros 7 artículos se cargaron vía Seeds y sus imágenes están dentro de /public/img/.
                        En cambio, los sigiuentes artículos tienen imágenes guardadas en /storage/app/public/ o en S3.
                        Por eso se tuvo que implementar el siguiente código:
                    --}}
                    @if (isset($post->image) && $post->id > 7)
                        <img class="card-img-top" src="{{ Storage::url($post->image) }}" alt="{{ $post->title }}">
                    @elseif(isset($post->image) && $post->id <= 7)
                        <img class="card-img-top" src="{{ asset('img/' . $post->image) }}" alt="{{ $post->title }}">
                    @else
                        <img class="card-img-top" src="{{ asset('img/900x400.png') }}" alt="{{ $post->title }}">
                    @endif
                    
                    <div class="card-body">
                        <h2 class="card-title">{{ $post->title }}</h2>
                        <p class="card-text">
                            {{ $post->content }}
                        </p>
                        <a href="{{ url('articulo/' . $post->id) }}" class="btn btn-primary">Leer más &rarr;</a>
                    </div>
                    <div class="card-footer text-muted">
                        Publicado el {{ $post->created_at }} por <a href="#">{{ $post->user->name }}</a>
                    </div>
                </div>
            @endforeach


            <!-- Pagination -->
            <ul class="pagination justify-content-center mb-4">
                <li class="page-item">
                    <a class="page-link" href="#">&larr; Más viejo</a>
                </li>
                <li class="page-item disabled">
                    <a class="page-link" href="#">Más nuevo &rarr;</a>
                </li>
            </ul>

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

            <!-- Search Widget -->
            <div class="card my-4">
                <h5 class="card-header">Buscar</h5>
                <form action="{{ url('articulos') }}" method="GET">
                    <div class="card-body">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Buscar...">
                            <span class="input-group-btn">
                                <button class="btn btn-secondary" type="submit">Buscar</button>
                            </span>
                        </div>
                    </div>
                </form>
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