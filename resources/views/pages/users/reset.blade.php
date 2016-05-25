@extends('layouts.basic')

@section('menu')
    @include('partials.navbar.nav_index')
@endsection

@section('content')
<section class="content">
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2">
			<form action="{{url('reset/change')}}">
				{{csrf_field()}}

				Favor de ingresar el <code>E-mail</code> de tu cuenta en Movie | Central

				<hr>

				<div class="form-group">
					<div class="col-xs-8">
						<input type="text" name="user" id="user" class="form-control" placeholder="E-mail ejemplo@gmail.com">
					</div>
					<div class="col-xs-4">
						<button type="submit" class="btn btn-danger"><i class="fa fa-envelope"></i> Enviar Contraseña</button>
					</div>
				</div>
			</form>

		</div>
	</div>
</section>
@endsection
