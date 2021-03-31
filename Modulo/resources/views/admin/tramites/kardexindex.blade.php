@extends('adminlte::page') <!--PLANTILLA DE ADMINLTE-->
@section('title', 'Control Escolar')<!--TITULO DE LA SECCION(NOMBRE DE LA PESTAÑA)-->

@section('content')<!--SECCION DEL CONTENIDO DE LA VISTA KARDEX-->
  <!--agregamos el buscar a los alumnos por la matricula-->
  <div class="btn-group btn-group-justified">Matricula:
    <input type="search" class="form-control rounded" aria-label="Search" aria-describedby="search-addon" />
    <span class="input-group-text border-0" id="search-addon">
      <i class="fas fa-search"></i>
    </span>
  </div>
  <!--agregamos el boton para descargar kardex-->
  <a href="{{ route('descargarPDF') }}"class="btn btn-success btn-sm float-right">Descargar</a>


</article>        
          


@endsection


       

     

