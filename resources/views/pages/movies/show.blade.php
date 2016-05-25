@extends('layouts.basic')

@section('menu')
  @include('partials.navbar.nav_movie')
@endsection

@section('content')
  <seciton class="content">
  	<div class="row" style="padding: 3em 0">
  		<div class="col-md-3 col-md-offset-1 text-right">
  			<img src="{{asset('assets/images/posters/deadpool.jpg')}}" alt="" width="100%"><br><br>
  			<button class="btn btn-block btn-info"><i class="fa fa-youtube-play"></i> Ver Trailer</button>
  			<button class="btn btn-block btn-danger"><i class="fa fa-shopping-cart" aria-hidden="true"></i> $350.00 Comprar</button>
  		</div>
  		<div class="col-md-7 col-offset-1">
  			<div class="info-header">
  				<h2>DEADPOOL</h2>
  				<span class="info-link">2016</span><span class="info-link">146min</span>
  				<a href="" class="info-link">Acción</a>
  				<a href="" class="info-link">Aventura</a>
  				<a href="" class="info-link">Guerra</a>
  			</div>
  			<br>
  			<div class="info-body">
  				<div class="rating">
  					Rating:
  					<i class="fa fa-star"></i>
  					<i class="fa fa-star"></i>
  					<i class="fa fa-star"></i>
  					<i class="fa fa-star-half-o"></i>
  					<i class="fa fa-star-o"></i>
  				</div>
  				<div class="director">
  					Director:
  					<a href="">Tim Miller</a>
  				</div>
  				<div class="guion">
  					Actores:
  					<a href="">Ryan Reynolds</a>,
  					<a href="">Karan Soni</a>,
  					<a href="">Ed Skrein</a>,
  					<a href="">Michael Benyaer</a>
  				</div>
  				<div class="country">
  					País: US, Canada
  				</div>
  				<div class="producer">
  					Productora: Twentieth Century Fox Film Corporation, Marvel Entertainment, LLC, Marvel Enterprises
  				</div>
  				<div class="datepremier">
  					Fecha de estreno: 2016-05-30
  				</div>
  				<div class="web">
  					Sitio web: <a href="http://www.foxmovies.com/deadpool" target="_blank">http://www.foxmovies.com/deadpool</a>
  				</div>
  				<div class="languages">
  					Idioma:  Español Latino
  				</div>

  				<hr>

  				<div class="sipnosis">
  					Sipnosis: <br>
  					Deadpool es un mercenario que se unió al proyecto Arma X para curar el cáncer de pulmón que lo estaba consumiendo. El proyecto logró darle un factor curativo artificial que salvó su vida pero lo dejó horriblemente desfigurado. Fue así que Deadpool decidió vestir un uniforme que cubriese todo su cuerpo y comenzar a vender sus servicios al mejor postor, logrando sobrevivir a cada misión con una mezcla de locura, ironía y explosiones.
  				</div>
  			</div>
  		</div>

  		<div class="col-md-10 col-md-offset-1">

  			<hr>

  			<div class="comments-header">
  				<h3><i class="fa fa-comments"></i> COMENTARIOS RECIENTES</h3>
  			</div>

  			<div class="col-md-12">
  				<div class="col-md-1">
  					<img src="{{asset('assets/images/profiles/not-found.jpg')}}" alt="" class="comment-img">
  				</div>
  				<div class="col-md-10" style="padding-bottom: 1em">
  					<h4>| Manuel Valdovinos <span class="label label-primary date">2016-05-24</span></h4>
  					Deadpool es un mercenario que se unió al proyecto Arma X para curar el
  				</div>
  			</div>

  			<div class="col-md-12">
  				<div class="col-md-1">
  					<img src="{{asset('assets/images/profiles/not-found.jpg')}}" alt="" class="comment-img">
  				</div>
  				<div class="col-md-10">
  					<h4>| Manuel Valdovinos <span class="label label-primary date">2016-05-24</span></h4>
  					Deadpool es un mercenario que se unió al proyecto Arma X para curar el cáncer de pulmón que lo estaba consumiendo. El proyecto
  				</div>
  			</div>

  			<div class="col-md-12">
  				<div class="col-md-1">
  					<img src="{{asset('assets/images/profiles/not-found.jpg')}}" alt="" class="comment-img">
  				</div>
  				<div class="col-md-10">
  					<h4>| Manuel Valdovinos <span class="label label-primary date">2016-05-24</span></h4>
  					Deadpool es un mercenario que se unió al proyecto Arma X para curar el cáncer de pulmón que lo estaba consumiendo. El proyecto logró darle un factor curativo artificial que salvó su vida pero lo dejó horriblemente desfigurado.
  				</div>
  			</div>

  			<div class="col-md-12">
  				<hr>
  				<form action="">
  					<h3><i class="fa fa-edit"></i> Realiza tu comentario</h3>
  					<div class="col-sm-7 col-offset-1">
  						<div class="alert alert-warning">El comentario no debe sobrepasar los 300 caracteres</div>
  						<textarea name="comment" id="comment" placeholder="Escribe tu comentario" class="form-control"></textarea><br>
  						<button type="submit" class="form-control"><i class="fa fa-comment"></i> Comentar</button>
  					</div>
  				</form>
  			</div>

  		</div>
  	</div>
  </seciton>
@endsection
