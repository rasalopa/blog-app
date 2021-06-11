@extends('adminlte::page')

@section('title', "rasalopa's Blog")

@section('content_header')
    @include('partials.session-status')
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <h1>Lista de categorías</h1>
                @can('admin.categories.edit')
                    <a class="btn btn-outline-primary" href="{{ route('admin.categories.create') }}"><i class="fa fa-plus"></i> Nueva</a>
                @endcan
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Categoría</th>
                    <th>Slug</th>
                    <th>Creada</th>
                    <th>Por</th>
                    <th>Actualizada</th>
                    @can('admin.categories.edit')
                        <th colspan="2"></th>
                    @endcan
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->slug }}</td>
                        <td>{{ $category->created_at }}</td>
                        <td>{{ $category->user->name }}</td>
                        <td>{{ $category->updated_at }}</td>
                        @can('admin.categories.edit')
                            <td width="100px">
                                <a class="btn btn-primary btn-sm" href="{{ route('admin.categories.edit', $category) }}"><i class="fa fa-pen"></i> Editar</a>
                            </td>
                        @endcan
                        @can('admin.categories.destroy')
                            <td width="100px">
                                <form action="{{ route('admin.categories.destroy', $category) }}" method="POST">
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
