@extends('master')

@section('content')

    <div id="admin-post" class="container content">
        
        <h1 class="mt-2 mb-3">Editar Artículo</h1>

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="alert-heading">El formulario contiene los siguientes errores:</h4>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ url('/admin/articulos/' . $post->id . '/editar') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $post->id }}">
            <div class="form-group">
                <label for="title">Título</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Ingresar un título..." value="{{ $post->title }}">
            </div>
            {{-- <div class="form-group">
                <label for="author">Autor</label>
                <input type="text" class="form-control" id="author" name="author" placeholder="Ingresar autor..." value="{{ $post->author }}">
            </div> --}}
            <div class="form-group">
                <label for="author">Autor (Usuario)</label>
                <select name="user_id" id="user_id" class="form-control">
                    <option value="" disabled>Seleccionar...</option>
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}" {{ ($post->user->id == $user->id  ? "selected":"") }}>
                            {{ $user->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="content">Contenido</label>
                <textarea class="form-control" id="content" name="content" rows="6">{{ $post->content }}</textarea>
            </div>
            <div class="form-group">
                <label for="image">Imagen</label>
                <input type="file" class="form-control-file" id="image" name="image">
            </div>
            <button type="submit" class="btn btn-primary mb-4">Editar</button>
        </form>

    </div><!-- /.container -->

@endsection
