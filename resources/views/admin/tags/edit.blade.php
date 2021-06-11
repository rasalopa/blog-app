@extends('adminlte::page')

@section('title', "rasalopa's Blog")

@section('content_header')

@stop

@section('content')
    <div class="col-12 col-sm-10 col-lg-6 mx-auto">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <h1>Editar etiqueta</h1>
                    <a class="btn btn-outline-primary" href="{{ route('admin.tags.index') }}"><i class="fa fa-list"></i> Lista de etiquetas</a>
                </div>
            </div>
            <div class="card-body">
                {!! Form::model($tag, ['route' => ['admin.tags.update', $tag], 'method' => 'PUT']) !!}

                @include('partials.tag-form')

            </div>
            <div class="card-footer">
                {!! Form::button('<i class="fa fa-save"></i> Actualizar', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('js')
    <script src="{{ asset('vendor/stringToSlug_1_3/jquery.stringToSlug.js') }}"></script>
    <script>
        $(document).ready( function() {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });
    </script>
@stop
