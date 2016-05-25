<ul class="nav navbar-nav" id="menu">
    <li><a href="{{ url('/') }}">Principal</a></li>
    <li><a href="{{ url('movies') }}">Peliculas</a></li>
    <li class="dropdown active">
        <a href="categorias" class="dropdown-toggle" data-toggle="dropdown">Categorias <i class="fa fa-angle-down"></i></a>
        <ul class="dropdown-menu">
            <li><a href="{{ url('movies/accion') }}">Acción</a></li>
            <li><a href="{{ url('movies/animacion') }}">Animación</a></li>
            <li><a href="{{ url('movies/aventura') }}">Aventura</a></li>
            <li><a href="{{ url('movies/cienciaficcion') }}">Ciencia Ficción</a></li>
            <li><a href="{{ url('movies/comedia') }}">Comedia</a></li>
            <li><a href="{{ url('movies/crimen') }}">Crimen</a></li>
            <li><a href="{{ url('movies/drama') }}">Drama</a></li>
            <li><a href="{{ url('movies/fantasia') }}">Fantasia</a></li>
            <li><a href="{{ url('movies/guerra') }}">Guerra</a></li>
            <li><a href="{{ url('movies/misterio') }}">Misterio</a></li>
            <li><a href="{{ url('movies/romance') }}">Romance</a></li>
            <li><a href="{{ url('movies/suspenso') }}">Suspenso</a></li>
            <li><a href="{{ url('movies/terror') }}">Terror</a></li>
            <li><a href="{{ url('movies/adultos') }}">+ 18</a></li>
        </ul>
    </li>
    @if(isset($user))
        <li><a href="{{ url('mymovies') }}">Mis Peliculas</a></li>
    @else
        <li><a data-toggle="modal" data-target="#myModal" style="cursor: pointer">Iniciar Sesión</a></li>
    @endif
</ul>
