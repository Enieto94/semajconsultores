@extends('adminlte::page')

@section('title', 'CRUD POSTS')

@section('content_header')
<h1>
    Posts
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-create-post">
        Crear
    </button>
</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Listado de Posts</h3>
                </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="posts" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Categoria</th>
                            <th>Titulo</th>
                            <th>Contenido</th>
                            <th>Autor</th>
                            <th>Ruta de la imagen</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                        <tr>
                            <td>{{$post->id}}</td>
                            <td>{{$post->category->name}}</td>
                            <td>{{$post->title}}</td>
                            <td>{{$post->content}}</td>
                            <td>{{$post->author}}</td>
                            <td>
                                <img src="{{asset($post->featured)}}" alt="{{$post->title}}" class="img-fluid img-thumbnail" width="120px"/>
                            </td>
                            <td>
                                <button class="btn btn-warning" data-toggle="modal" data-target="#modal-update-post-{{$post->id}}" >Editar</button>

                                <form action="{{route('admin.posts.delete', $post->id)}}" method="POST">
                                    {{csrf_field()}}
                                    @method('DELETE')
                                    <button class="btn btn-danger">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                        <!-- modal  UPDATE-->
                        @include('admin.posts.modal-update-post')
                        <!-- /.modal UPDATE -->
                        @endforeach
                       
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Categoria</th>
                            <th>Titulo</th>
                            <th>Contenido</th>
                            <th>Autor</th>
                            <th>Ruta de la imagen</th>

                        </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</div>

<!-- modal -->
<div class="modal fade" id="modal-create-post">
    <div class="modal-dialog">
        <div class="modal-content bg-default">
            <div class="modal-header">
                <h4 class="modal-title">Crear post</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                </div>
            <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="form-group">
                        <label for="title">Post</label>
                        <input type="text" name="title" class ="form-control" id="post">
                    </div>
                    <div class="form-group">
                        <label for="category-id">Categoria</label>
                        <select name="category_id" class="form-control"  id="category-id">
                            <option value="">--Escoger una categoría--</option>
                            @foreach ($categories as $category)
                            <option value="{{$category->id }}">{{$category->name }}</option>

                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea name="content" class="form-control" id="content" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="author">Autor</label>
                        <input type="text" name="author" class ="form-control" id="author">
                    </div>
                    <div class="form-group">
                        <label for="featured">Imagen principal</label>
                        <input type="file" name="featured" class ="form-control" id="featured">

                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-outline-primary">Guardar</button>
                </div>
            </form>
        </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->



@stop




@section('js')
<script>
$(document).ready(function() {
    $('#categories').DataTable( {
        "order": [[ 3, "desc" ]]
    } );
} );
</script>
@stop