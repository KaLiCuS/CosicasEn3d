@extends('adminlte::page')

@section('title', 'inicio')

@section('content_header')
    <h1 class= "text-center"><b>Bienvenido a Cosicas en 3d<b></h1>
@stop

@section('content')
    <h5 class="text-center">¡Buenas! <b> {{ Auth::user()->name }} </b> Desde aquí podrás subir tus proyectos para imprimirlos posteriormente y realizar un seguimiento del pedido </h5>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop