@extends('layouts.basic')

@section('menu')
	@include('partials.navbar.nav_category')
@endsection

@section('content')
<div class="col-xs-10 col-xs-offset-1 cat">
	<ul class="cat-list">
		<li><a href="#">Acción</a></li>
		<li><a href="#">Animación</a></li>
		<li><a href="#">Aventura</a></li>
		<li><a href="#">Ciencia Ficción</a></li>
		<li><a href="#">Comedia</a></li>
		<li><a href="#">Crimen</a></li>
		<li><a href="#">Drama</a></li>
		<li><a href="#">Fantasia</a></li>
		<li><a href="#">Guerra</a></li>
		<li><a href="#">Misterio</a></li>
		<li><a href="#">Romance</a></li>
		<li><a href="#">Suspenso</a></li>
		<li><a href="#">Terror</a></li>
		<li><a href="#">+ 18</a></li>
	</ul>
</div>
<section class="content">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xs-8 col-xs-offset-2 col-md-12 col-md-offset-0">
						<strong><i class="fa fa-tags"></i> Categoria Accion</strong> | Resultados  9 - 100 <br><br>
					</div>
				</div>

				@include('partials.movie.list')

			</div>
		</div>
	</div>
</section>
@endsection
