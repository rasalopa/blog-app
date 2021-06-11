@extends('adminlte::page')

@section('title', "rasalopa's Blog")

@section('content_header')
    @include('partials.session-status')
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <h1>Lista de roles</h1>
                {{--@can('admin.roles.edit')--}}
                    <a class="btn btn-outline-primary" href="{{ route('admin.roles.create') }}"><i class="fa fa-plus"></i> Nueva</a>
                {{--@endcan--}}
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Role</th>
                    {{--@can('admin.roles.edit')--}}
                        <th colspan="2"></th>
                    {{--@endcan--}}
                </tr>
                </thead>
                <tbody>
                    @foreach($roles as $role)
                        <tr>
                            <td>{{$role->id}}</td>
                            <td>{{$role->name}}</td>
                            {{--@can('admin.roles.edit')--}}
                            <td width="100px">
                                <a class="btn btn-primary btn-sm" href="{{ route('admin.roles.edit', $role) }}"><i class="fa fa-pen"></i> Editar</a>
                            </td>
                            {{--@endcan--}}
                            {{--@can('admin.roles.edit')--}}
                            <td width="100px">
                                <form action="{{ route('admin.roles.destroy', $role) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Borrar</button>
                                </form>
                            </td>
                            {{--@endcan--}}
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
