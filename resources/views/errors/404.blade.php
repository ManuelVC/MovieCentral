@extends('layouts.basic')

@section('menu')
  @include('partials.navbar.nav_index')
@endsection

@section('content')
  <section id="error" class="container text-center">
      <h1>404, Pagina no encontrada</h1>
      <p>La pagina a la que desea acceder no existe ó a ocurrido un error interno.</p>
      <a class="btn btn-primary" href="{{url('/')}}">Regresar a la pagina principal</a>
  </section><!--/#error-->
@endsection
