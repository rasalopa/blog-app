<div class="form-group">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Escribe el nombre de la categoría', 'required']) !!}
    @error('name')
    <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('slug', 'Slug') !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Slug de la categoría', 'required', 'readonly']) !!}
    @error('slug')
    <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
