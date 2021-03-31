@extends('adminlte::page')

@section('title', 'Control Escolar') 

@section('content_header')
    <h1></h1> <!--Titulo del contenido-->
@stop

@section('content')<!--Contenido-->
    <div class="card">
        <div class="card.header">
            <h1 class="card.title"></h1>
        </div>
    
        <div class="card.body">
            <p>Bienvenido, Haz inisiado sesion! </p>
        </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
