@extends('layouts.basic')

@section('menu')
  @include('partials.navbar.nav_index')
@endsection

@section('content')
  <section class="container">
    <div class="row">
        <div class="col-md-4">
          <img src="{{asset('assets/images/profiles/not-found.jpg')}}" alt="" width="60%" height="auto" />
          <form class="" method="POST">
            <div class="form-group" style="padding-top: .5em">
              <input type="file" id="file">
            </div>
            <hr>
            <div class="form-group">
              <label> Usuario Registrado:</label>
              <label class="form-control">Usuario</label>
            </div>
            <div class="form-group">
              <label> E-mail Registrado:</label>
              <label class="form-control">email@hotmail.com</label>
            </div>
          </form>
        </div>
        <div class="col-md-7 col-md-offset-1">
          <h2 class="text-center">Datos Personales</h2>
          <table class="table table-striped table-hover">
            <tr>
              <td>Nombre: </td>
              <td>Manuel</td>
            </tr>
            <tr>
              <td>Apellidos: </td>
              <td>Valdovinos Carrazco</td>
            </tr>
          </table>
        </div>
    </div>
  </section>
@endsection
