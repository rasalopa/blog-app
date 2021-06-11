@extends('adminlte::page')

@section('title', "rasalopa's Blog")

@section('content_header')

@stop

@section('content')
    <div class="col-12 col-sm-10 col-lg-10 mx-auto">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <h1>Nuevo post</h1>
                    <a class="btn btn-outline-primary" href="{{ route('admin.posts.index') }}"><i class="fa fa-list"></i> Lista de posts</a>
                </div>
            </div>
            <div class="card-body">
                {!! Form::open(['route' => 'admin.posts.store', 'autocomplete' => 'off', 'files' => true]) !!}

                @include('partials.post-form')

            </div>
            <div class="card-footer">
                {!! Form::button('<i class="fa fa-save"></i> Guardar', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <style>
        .image-wrapper{
            position: relative;
            padding-bottom: 56.25%;
        }

        .image-wrapper img{
            position: absolute;
            object-fit: cover;
            width: 100%;
            height: 100%;
        }
    </style>
@stop

@section('js')
    <script src="{{ asset('vendor/stringToSlug_1_3/jquery.stringToSlug.js') }}"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/24.0.0/classic/ckeditor.js"></script>
    <script>
        $(document).ready( function() {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });

            ClassicEditor
                .create(document.querySelector('#extract'))
                .catch(error => {
                    console.error(error);
                });

            ClassicEditor
                .create(document.querySelector('#body'))
                .catch(error => {
                    console.error(error);
                });

            //Cambiar imagen
            document.getElementById("file").addEventListener('change', cambiarImagen);

            function cambiarImagen(event){
                var file = event.target.files[0];

                var reader = new FileReader();
                reader.onload = (event) => {
                    document.getElementById("picture_post").setAttribute('src', event.target.result);
                };

                reader.readAsDataURL(file);
            }

        });
    </script>
@stop
