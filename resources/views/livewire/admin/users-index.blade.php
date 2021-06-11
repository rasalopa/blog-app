<div class="card">
    <div class="card-header">
        <div class="d-flex justify-content-between align-items-center mb-2">
            <h1>Lista de usuarios</h1>
            <a class="btn btn-outline-primary" href="{{ route('admin.c_users.create') }}"><i class="fa fa-plus"></i> Nuevo</a>
        </div>
        <input wire:model="search" class="form-control mb-2" placeholder="Buscar...">
    </div>
    @if ($users->count())
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>E-mail</th>
                    <th>Estado</th>
                    <th colspan="3"></th>
                </tr>
                </thead>
                <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        @if ($user->status == 1)
                            <td><i style="color:green;" class="success fa fa-user-check"></i></td>
                        @else
                            <td><i style="color:red;" class="fa fa-user-lock"></i></td>
                        @endif
                        <td width="100px">
                            <a class="btn btn-primary btn-sm" href="{{ route('admin.c_users.edit', $user) }}"><i class="fa fa-cog"></i> Editar</a>
                        </td>
                        <td width="100px">
                            <a class="btn btn-danger btn-sm" href="{{ route('admin.c_users.edit', $user) }}"><i class="fa fa-ban"></i> Baja</a>
                        </td>
                        <td width="100px">
                            <form action="{{ route('admin.c_users.destroy', $user) }}" method="POST">
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
            {{ $users->links() }}
        </div>
    @else
        <div class="card-body">
            <strong>No hay usuarios :/</strong>
        </div>
    @endif
</div>
