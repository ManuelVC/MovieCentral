@extends('layouts.basic')

@section('menu')
	@include('partials.navbar.nav_index')
@endsection

@section('content')
<section class="content">
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3">
			<h2 style="text-align: center;border-bottom:1px solid #d9534f;box-sizing: border-box; padding: .7em .5em"><i class="fa fa-group"></i> CREAR CUENTA</h2>
			<form action="#">

				<div class="text-center alert alert-warning">Favor de completar los campos requeridos <span style="color: red;font-size: 1.1em;">*</span></div>

				{{csrf_field()}}

				<div class="form-group" style="box-sizing: border-box; padding: 0 .5em">
					<label for="username"><i class="fa fa-user"></i> Usuario <span style="color: red;font-size: 1.1em;">*</span></label>
					<input type="text" name="username" id="username" class="form-control" placeholder="Usuario" required>
				</div>

				<div class="form-group" style="box-sizing: border-box; padding: 0 .5em">
					<label for="email"><i class="fa fa-envelope"></i> E-mail address <span style="color: red;font-size: 1.1em;">*</span></label>
					<input type="email" name="email" id="email" class="form-control" placeholder="E-mail address" required>
				</div>

				<div class="form-group" style="box-sizing: border-box; padding: 0 .5em">
					<label for="password"><i class="fa fa-key"></i> Contraseña <span style="color: red;font-size: 1.1em;">*</span></label>
					<input type="password" name="password" id="password" class="form-control" placeholder="Contraseña" required>
				</div>

				<div class="form-group" style="box-sizing: border-box; padding: 0 .5em">
					<label for="passwordr"><i class="fa fa-key"></i> Repetir contraseña <span style="color: red;font-size: 1.1em;">*</span></label>
					<input type="password" name="repeat" id="passwordr" class="form-control" placeholder="Repetir contraseña" required>
				</div>

				<hr>

				<div class="form-group">
					<button type="submit" class="btn btn-block btn-danger btn-lg"><i class="fa fa-user"></i> Crear cuenta</button>
				</div>

			</form>
		</div>
	</div>
</section>
@endsection
