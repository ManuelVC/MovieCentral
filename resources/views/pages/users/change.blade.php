@extends('layouts.basic')

@section('menu')
    @include('partials.navbar.nav_index')
@endsection

@section('content')
<section class="content">
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2">
      <div class="col-md-6 col-md-offset-3">
        <h2>Actualización de contraseña</h2>
        <hr>
        <div class="alert alert-warning">
          Las contraseñas deben coincidir en los dos campos
        </div>
  			<form action="{{url('reset/change')}}">
  				{{csrf_field()}}
          <div class="form-group">
            <label for="password"><i class="fa fa-key"></i> Nueva Contraseña</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Nueva Contraseña" required>
          </div>

          <div class="form-group">
            <label for="reptpassword"><i class="fa fa-key"></i> Repetir Contraseña</label>
            <input type="password" name="repeat" id="reptpassword" class="form-control" placeholder="Repetir Contraseña" required>
          </div>
          <hr>
          <button type="submit" class="btn btn-block btn-danger"><i class="fa fa-user"></i> Guardar Cambios</button>

			</form>
      </div>
		</div>
	</div>
</section>
@endsection
