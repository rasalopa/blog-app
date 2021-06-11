<div class="card">
    <div class="card-header">
        <div class="d-flex justify-content-between align-items-center mb-2">
            <h1>Lista de usuarios</h1>
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
                    <th colspan="3"></th>
                </tr>
                </thead>
                <tbody>
                @foreach ($users as $user)
                    @if ($user->status == 1)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td width="100px">
                                <a class="btn btn-primary btn-sm" href="{{ route('admin.r_users.edit', $user) }}"><i class="fa fa-cog"></i> Editar</a>
                            </td>
                        </tr>
                    @endif
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
