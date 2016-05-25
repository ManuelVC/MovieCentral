<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Movie | Central</title>

	<!-- core CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <link rel="shortcut icon" href="{{ asset('assets/images/ico/favicon.ico') }}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('assets/images/ico/apple-touch-icon-144-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('assets/images/ico/apple-touch-icon-114-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('assets/images/ico/apple-touch-icon-72-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('assets/images/ico/apple-touch-icon-57-precomposed.png') }}">
</head><!--/head-->

<body class="homepage">

    <header id="header">

        @yield('failed')

        @yield('success')

        @yield('info_user')

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/"><img src="{{ asset('assets/images/logo.png') }}" alt="logo" width="120px"></a>
                </div>

                <div class="collapse navbar-collapse navbar-right">
                    @yield('menu')
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Movie | Central - Inicio de Sesión</h4>
          </div>

            <form action="{{url('/')}}" method="POST" class="modal-body">

            @if(count($errors->all()) > 0)
                <div class="alert alert-danger">
                    <h4>Se encontraron los siguientes errores</h4>
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                    <label for="email"><i class="fa fa-user"></i> E-mail</label>
                    <input type="text" name="email" id="email" value="{{old('email')}}" class="form-control" placeholder="E-mail">
                </div>

                <div class="form-group">
                    <label for="password"><i class="fa fa-key"></i> Contraseña</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Contraseña">
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-block" id="enviar"><i class="fa fa-user"></i> Entrar</button>
                    <a href="{{ url('user/account') }}" class="btn btn-block btn-default">Crear cuenta</a>
                </div>
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <a href="{{ url('user/reset') }}"><i class="fa fa-key"></i> Olvide mi contraseña</a>
                    </div>
                </div>
            </form>

        </div>
      </div>
    </div>



	@yield('content')



	<section id="bottom">
        <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4">
                    <div class="widget text-center">
                        <img src="{{ asset('assets/images/profiles/avatar.png') }}" style="border-radius: 50%" width="150px" alt="Avatar">
                        <h3 style="padding-top: .5em;">Manuel Valdovinos</h3>
                        <ul>
                            <li>Programador</li>
                            <li>Ing. en Computación</li>
                        </ul>
                    </div>
                </div><!--/.col-md-3-->
            </div>
        </div>
    </section><!--/#bottom-->

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2016 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">MovieCentral</a>. Todos los derechos reservados.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="http://facebook.com/" target="_blank" style="font-size: 2em;"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="http://twitter.com/" target="_blank" style="font-size: 2em;"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="http://instagram.com/" target="_blank" style="font-size: 2em;"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="http://youtube.com/" target="_blank" style="font-size: 2em;"><i class="fa fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.isotope.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    @yield('script');
</body>
</html>
