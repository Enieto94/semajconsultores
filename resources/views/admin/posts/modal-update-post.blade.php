<div class="modal fade" id="modal-update-post-{{$post->id}}">
    <div class="modal-dialog">
        <div class="modal-content bg-default">
            <div class="modal-header">
                <h4 class="modal-title">Actualizar Post</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                </div>
            <form action="{{ route('admin.posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="form-group">
                        <label for="title">Post</label>
                        <input type="text" name="title" class ="form-control" id="post" value="{{$post->title}}">
                    </div>
                    <div class="form-group">
                        <label for="category-id">Categoria</label>
                        <select name="category_id" class="form-control"  id="category-id">
                            <option value="">--Escoger una categoría--</option>
                            @foreach ($categories as $category)
                            <option value="{{$category->id }}" <?= $category->id == $post->category->id ? 'selected': '' ?> >{{$category->name }}</option>

                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea name="content" class="form-control" id="post" cols="30" rows="10">{{$post->content}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="author">Autor</label>
                        <input type="text" name="author" class ="form-control" id="author" value="{{$post->author}}">
                    </div>
                    <div class="form-group">
                        <label for="featured">Imagen</label>
                        <input type="file" name="featured" class ="form-control" id="featured">
                        <img src="{{asset($post->featured)}}" width="120px" class="img-fluid img-thumbnail" alt="{{$post->featured}}"/>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="submit" class="btn btn-outline-primary">Guardar</button>
                    <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>