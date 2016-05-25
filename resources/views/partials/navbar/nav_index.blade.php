<ul class="nav navbar-nav" id="menu">
    <li class="active"><a href="{{ url('/') }}">Principal</a></li>
    <li><a href="{{ url('movies') }}">Peliculas</a></li>
    <li class="dropdown">
        <a href="categorias" class="dropdown-toggle" data-toggle="dropdown">Categorias <i class="fa fa-angle-down"></i></a>
        <ul class="dropdown-menu">
            <li><a href="{{ url('category/accion') }}">Acción</a></li>
            <li><a href="{{ url('category/animación') }}">Animación</a></li>
            <li><a href="{{ url('category/aventura') }}">Aventura</a></li>
            <li><a href="{{ url('category/cienciaficción') }}">Ciencia Ficción</a></li>
            <li><a href="{{ url('category/comedia') }}">Comedia</a></li>
            <li><a href="{{ url('category/crimen') }}">Crimen</a></li>
            <li><a href="{{ url('category/drama') }}">Drama</a></li>
            <li><a href="{{ url('category/fantasia') }}">Fantasia</a></li>
            <li><a href="{{ url('category/guerra') }}">Guerra</a></li>
            <li><a href="{{ url('category/misterio') }}">Misterio</a></li>
            <li><a href="{{ url('category/romance') }}">Romance</a></li>
            <li><a href="{{ url('category/suspenso') }}">Suspenso</a></li>
            <li><a href="{{ url('category/terror') }}">Terror</a></li>
            <li><a href="{{ url('category/adultos') }}">+ 18</a></li>
        </ul>
    </li>
    @if(isset($user))
        <li><a href="{{ url('mymovies') }}">Mis Peliculas</a></li>
    @else
        <li><a data-toggle="modal" data-target="#myModal" style="cursor: pointer">Iniciar Sesión</a></li>
    @endif
</ul>
