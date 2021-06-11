@extends('adminlte::page')

@section('title', "rasalopa's Blog")

@section('content_header')
    @include('partials.session-status')
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <h1>Lista de etiquetas</h1>
                @can('admin.tags.edit')
                    <a class="btn btn-outline-primary" href="{{ route('admin.tags.create') }}"><i class="fa fa-plus"></i> Nueva</a>
                @endcan
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Tag</th>
                    <th>Slug</th>
                    <th>Color</th>
                    <th>Creada</th>
                    <th>Por</th>
                    <th>Actualizada</th>
                    @can('admin.tags.edit')
                        <th colspan="2"></th>
                    @endcan
                </tr>
                </thead>
                <tbody>
                @foreach($tags as $tag)
                    <tr>
                        <td>{{ $tag->id }}</td>
                        <td>{{ $tag->name }}</td>
                        <td>{{ $tag->slug }}</td>
                        <td>{{ $tag->color }}</td>
                        <td>{{ $tag->created_at }}</td>
                        <td>{{ $tag->user->name }}</td>
                        <td>{{ $tag->updated_at }}</td>
                        @can('admin.tags.edit')
                            <td width="100px">
                                <a class="btn btn-primary btn-sm" href="{{ route('admin.tags.edit', $tag) }}"><i class="fa fa-pen"></i> Editar</a>
                            </td>
                        @endcan
                        @can('admin.tags.destroy')
                            <td width="100px">
                                <form action="{{ route('admin.tags.destroy', $tag) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Borrar</button>
                                </form>
                            </td>
                        @endcan
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
