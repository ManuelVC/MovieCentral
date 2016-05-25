@extends('layouts.basic')

@section('menu')
  @include('partials.navbar.nav_movie')
@endsection

@section('content')
<section class="content">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xs-8 col-xs-offset-2 col-md-12 col-md-offset-0">
						<strong><i class="fa fa-youtube-play"></i> Peliculas</strong> | Resultados  9 - 100 <br><br>
					</div>
				</div>

				@include('partials.movie.list')

			</div>
		</div>
	</div>
</section>
@endsection
