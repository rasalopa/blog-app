<div class="form-group">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Escribe el nombre del rol']) !!}
    @error('name')
    <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    <h2 class="h3">Lista de permisos</h2>
    @foreach ($permissions as $permission)
        <label class="mr-2 mt-2 mb-2">
            {!! Form::checkbox('permissions[]', $permission->id, null, ['class' => 'mr-1']) !!}
            {{ $permission->description }}
        </label>
    @endforeach
    <br>
    @error('roles')
    <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
