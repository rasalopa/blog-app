<div class="card">
    <div class="card-header">
        <div class="d-flex justify-content-between align-items-center mb-2">
            <h1>Lista de posts</h1>
            <a class="btn btn-outline-primary" href="{{ route('admin.posts.create') }}"><i class="fa fa-plus"></i> Nuevo</a>
        </div>
        <input wire:model="search" class="form-control mb-2" placeholder="Buscar...">
    </div>
    @if ($posts->count())
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Titulo</th>
                        <th>Estado</th>
                        <th>Categoría</th>
                        <th>Creado</th>
                        <th>Actualizado</th>
                        <th colspan="3"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->name }}</td>
                            <td>
                                @if ($post->status == 2)
                                    Publicado
                                @else
                                    Borrador
                                @endif
                            </td>
                            <td>{{ $post->category->name }}</td>
                            <td>{{ $post->created_at }}</td>
                            <td>{{ $post->updated_at }}</td>
                            <td width="100px">
                                @if ($post->status == 2)
                                    <a class="btn btn-success btn-sm" href="{{ route('posts.show', $post) }}" target="_blank"><i class="fa fa-eye"></i> Ver</a>
                                @endif
                            </td>
                            <td width="100px">
                                <a class="btn btn-primary btn-sm" href="{{ route('admin.posts.edit', $post) }}"><i class="fa fa-pen"></i> Editar</a>
                            </td>
                            <td width="100px">
                                <form action="{{ route('admin.posts.destroy', $post) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Borrar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{ $posts->links() }}
        </div>
    @else
        <div class="card-body">
            <strong>No hay posts :/</strong>
        </div>
    @endif
</div>
