<div class="form-group">
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre del usuario', 'required', 'disabled']) !!}
</div>

<div class="form-group">
    @foreach ($roles as $rol)
        <label class="mr-2">
            {!! Form::checkbox('roles[]', $rol->id, null, ['class' => 'mr-1']) !!}
            {{ $rol->name }}
        </label>
    @endforeach
    <br>
    @error('roles')
    <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
