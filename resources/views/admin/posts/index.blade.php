@extends('adminlte::page')

@section('title', "rasalopa's Blog")

@section('content_header')
    @include('partials.session-status')
@stop

@section('content')
    @livewire('admin.posts-index')
@stop
