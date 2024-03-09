@extends('adminlte::page')

@section('title', $title_page)

@if (!empty($title))
    @section('content_header')
    <h1>{{ $title }}</h1>
    @stop
@endif

@section('content')
    {{ $slot }}
@stop

@section('css')
    <style>
        .title{
            text-align: center;
            padding-top: 2rem;
        }

        .title span{
            color: #F5574D;
        }

        .table{
            
        }
    </style>
    <link rel="stylesheet" href="{{ asset('css/admin_custom.css') }}">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
