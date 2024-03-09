@extends('adminlte::page')

@section('title', $title_page)

@section('content')
    {{ $slot }}
@stop

@section('css')
    <style>
        .title{
            text-align: center;
            padding-top: 3rem;
        }

        .title span{
            color: #F5574D;
        }

        .table-continer .thead{
            border-radius: 25px;
            background-color: #F5574D;
            color: white;
            width: 100%;
        }

        .btn{
            background-color: #F5574D;
            color: white;
        }

        .btn:hover {
            background-color: #da6b63;
            color: white
        }

        .btn:active {
            background-color: #c93c2a;
            color: #f3b9b5;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('css/admin_custom.css') }}">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
