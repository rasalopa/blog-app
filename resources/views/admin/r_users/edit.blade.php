@extends('adminlte::page')

@section('title', "rasalopa's Blog")

@section('content_header')
@stop

@section('content')
    <div class="col-12 col-sm-10 col-lg-6 mx-auto">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <h1>Editar rol de usuario</h1>
                    <a class="btn btn-outline-primary" href="{{ route('admin.r_users.index') }}"><i class="fa fa-list"></i> Lista de usuarios</a>
                </div>
            </div>
            <div class="card-body">
                {!! Form::model($r_user, ['route' => ['admin.r_users.update', $r_user], 'autocomplete' => 'off', 'method' => 'put']) !!}

                @include('partials.role-form')

            </div>
            <div class="card-footer">
                {!! Form::button('<i class="fa fa-save"></i> Guardar', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@stop
