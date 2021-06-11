<div class="form-group">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Escribe el nombre del post', 'required']) !!}
    @error('name')
    <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('slug', 'Slug') !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Slug del post', 'required', 'readonly']) !!}
    @error('slug')
    <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('category_id', 'Categoría') !!}
    {!! Form::select('category_id', $categories, null, ['class' => 'form-control', '']) !!}
    @error('category_id')
    <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    <p class="font-weight-bold">Etiquetas</p>
    @foreach ($tags as $tag)
        <label class="mr-2">
            {!! Form::checkbox('tags[]', $tag->id, null, ['class' => 'mr-1']) !!}
            {{ $tag->name }}
        </label>
    @endforeach
    <br>
    @error('tags')
    <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    <p class="font-weight-bold">Estado</p>
    <label class="mr-2">
        {!! Form::radio('status', 1, true) !!}
        Poner en borrador
    </label>
    <label class="mr-2">
        {!! Form::radio('status', 2) !!}
        Publicar
    </label>
    <br>
    @error('status')
    <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="row mb-3">
    <div class="col">
        <div class="image-wrapper">
            @isset($post->image)
                <img id="picture_post" src="{{ Storage::url($post->image->url) }}" alt="">
            @else
                <img id="picture_post" src="http://blog.test/storage/default_post_img.jpg" alt="">
            @endisset
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            {!! Form::label('file', 'Imagen que se mostrará en el post') !!}
            {!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}

            @error('file')
            <span class="text-danger">{{ $message }}</span>
            @enderror

        </div>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci blanditiis consequatur facere iure libero magni necessitatibus quam tempore vel? A aperiam consequuntur cumque dicta ducimus enim perferendis possimus sit tempora.</p>
    </div>
</div>

<div class="form-group">
    {!! Form::label('extract', 'Extracto') !!}
    {!! Form::textarea('extract', null, ['class' => 'form-control', 'placeholder' => 'Extracto del post', '']) !!}
    @error('extract')
    <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('body', 'Cuerpo del post') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control', 'placeholder' => 'Escribe algo genial', '']) !!}
    @error('body')
    <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
