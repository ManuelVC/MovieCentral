@extends('layouts.basic')

@section('menu')
	@include('partials.navbar.nav_category')
@endsection

@section('content')
<div class="col-xs-10 col-xs-offset-1 cat" style="padding-top: 1em">
	<ul class="portfolio-filter text-center cat-list">
			<li><a class="btn btn-default" href="#" data-filter="*">Acción</a></li>
			<li><a class="btn btn-default" href="#" data-filter=".bootstrap">Animación</a></li>
			<li><a class="btn btn-default" href="#" data-filter=".html">Aventura</a></li>
			<li><a class="btn btn-default" href="#" data-filter=".wordpress">Ciencia Ficción</a></li>
			<li><a class="btn btn-default" href="#" data-filter=".html">Comedia</a></li>
			<li><a class="btn btn-default" href="#" data-filter=".html">Crimen</a></li>
			<li><a class="btn btn-default" href="#" data-filter=".html">Drama</a></li>
			<li><a class="btn btn-default" href="#" data-filter=".html">Fantasia</a></li>
			<li><a class="btn btn-default" href="#" data-filter=".html">Guerra</a></li>
			<li><a class="btn btn-default" href="#" data-filter=".html">Misterio</a></li>
			<li><a class="btn btn-default" href="#" data-filter=".html">Romance</a></li>
			<li><a class="btn btn-default" href="#" data-filter=".html">Suspenso</a></li>
			<li><a class="btn btn-default" href="#" data-filter=".html">Terror</a></li>
			<li><a class="btn btn-default" href="#" data-filter=".html">+ 18</a></li>
			<li><a class="btn btn-default active" href="#" data-filter=".html">Todas</a></li>
	</ul><!--/#portfolio-filter-->
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
