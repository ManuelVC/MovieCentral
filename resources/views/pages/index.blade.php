@extends('layouts.basic')

@section('menu')
  @include('partials.navbar.nav_index')
@endsection

@section('content')
    <section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">

                <div class="item active" style="width: 100%; background-image: url({{ asset('assets/images/banners/zootopia.jpg') }})">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">ZOOTÓPIA</h1>
                                    <h2 class="animation animated-item-2">La moderna metrópoli mamífera de Zootrópolis es una ciudad absolutamente única....</h2>
                                    <a class="btn-slide animation animated-item-3" href="#">Rentar Pelicula $150.00</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->

                <div class="item" style="background-image: url({{ asset('assets/images/banners/civil-war.jpg') }})">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">CIVIL  WAR</h1>
                                    <h2 class="animation animated-item-2">Steve Rogers liderando al nuevo equipo de Vengadores en sus continúos esfuerzos para mantener a salvo a la humanidad....</h2>
                                    <a class="btn-slide animation animated-item-3" href="#">Rentar Pelicula $200.00</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->

                <div class="item" style="background-image: url({{ asset('assets/images/banners/jungle_book.jpg') }})">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">EL LIBRO DE LA SELVA</h1>
                                    <h2 class="animation animated-item-2">Después de ser abandonado en la selva, una familia de lobos cría al pequeño cachorro humano Mowgli...</h2>
                                    <a class="btn-slide animation animated-item-3" href="#">Rentar Pelicula $180.00</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="fa fa-chevron-right"></i>
        </a>
    </section><!--/#main-slider-->

    <section id="recent-works">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Peliculas mas Solicitadas</h2>
                <p class="lead">Movie | Central te ofrece las <a href="{{url('movies')}}">peliculas</a> mas rentadas por todos los usuarios que forman <br>
                parte de esta pagina.</p>
            </div>

            <div class="row">
                <div class="col-xs-8 col-xs-offset-2 col-sm-6 col-sm-offset-0 col-md-3 col-sm-offset-0">
                    <div class="recent-work-wrap">
                        <img  src="{{ asset('assets/images/posters/avatar.jpg') }}" width="293px" height="300px" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Avatar</a> </h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                <p>$200.00</p>
                                <a class="preview" href="{{ asset('assets/images/portfolio/full/item1.png') }}" rel="prettyPhoto"><i class="fa fa-eye"></i> Comprar</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-8 col-xs-offset-2 col-sm-6 col-sm-offset-0 col-md-3 col-sm-offset-0">
                    <div class="recent-work-wrap">
                        <img  src="{{ asset('assets/images/posters/deadpool.jpg') }}" width="293px" height="300px" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Deadpool</a></h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                <p>$200.00</p>
                                <a class="preview" href="images/portfolio/full/item2.png" rel="prettyPhoto"><i class="fa fa-eye"></i> Comprar</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-8 col-xs-offset-2 col-sm-6 col-sm-offset-0 col-md-3 col-sm-offset-0">
                    <div class="recent-work-wrap">
                        <img  src="{{ asset('assets/images/posters/interestelar.jpg') }}" width="293px" height="300px" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Interestelar</a></h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                <p>$200.00</p>
                                <a class="preview" href="images/portfolio/full/item3.png" rel="prettyPhoto"><i class="fa fa-eye"></i> Comprar</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-8 col-xs-offset-2 col-sm-6 col-sm-offset-0 col-md-3 col-sm-offset-0">
                    <div class="recent-work-wrap">
                        <img  src="{{ asset('assets/images/posters/maze-runner-2.jpg') }}" width="293px" height="300px" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Maze Runner 2</a></h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                <p>$200.00</p>
                                <a class="preview" href="images/portfolio/full/item4.png" rel="prettyPhoto"><i class="fa fa-eye"></i> Comprar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-xs-8 col-xs-offset-2 col-sm-6 col-sm-offset-0 col-md-3 col-sm-offset-0">
                    <div class="recent-work-wrap">
                        <img  src="{{ asset('assets/images/posters/genesys.jpg') }}" width="293px" height="300px" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Terminator Genesys</a></h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                <p>$200.00</p>
                                <a class="preview" href="images/portfolio/full/item5.png" rel="prettyPhoto"><i class="fa fa-eye"></i> Comprar</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-8 col-xs-offset-2 col-sm-6 col-sm-offset-0 col-md-3 col-sm-offset-0">
                    <div class="recent-work-wrap">
                        <img  src="{{ asset('assets/images/posters/avengers.jpg') }}" width="293px" height="300px" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Avengers: Age of Ultrón</a></h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                <p>$200.00</p>
                                <a class="preview" href="images/portfolio/full/item6.png" rel="prettyPhoto"><i class="fa fa-eye"></i> Comprar</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-8 col-xs-offset-2 col-sm-6 col-sm-offset-0 col-md-3 col-sm-offset-0">
                    <div class="recent-work-wrap">
                        <img  src="{{ asset('assets/images/posters/ant-man.jpg') }}" width="293px" height="300px" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Ant-Man</a></h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                <p>$200.00</p>
                                <a class="preview" href="images/portfolio/full/item7.png" rel="prettyPhoto"><i class="fa fa-eye"></i> Comprar</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-8 col-xs-offset-2 col-sm-6 col-sm-offset-0 col-md-3 col-sm-offset-0">
                    <div class="recent-work-wrap">
                        <img  src="{{ asset('assets/images/posters/300.jpg') }}" width="293px" height="300px" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">300</a></h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                <p>$200.00</p>
                                <a class="preview" href="images/portfolio/full/item8.png" rel="prettyPhoto"><i class="fa fa-eye"></i> Comprar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#recent-works-->

    <section id="middle">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 wow fadeInDown">
                    <div class="skill">
                        <h2>Categorias Skill</h2>
                        <p>Skill de las <a href="{{url('categories')}}">categorias</a> que mas se solicitan en Movie | Central</p>

                        <div class="progress-wrap">
                            <h3>Acción</h3>
                            <div class="progress">
                              <div class="progress-bar  color1" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
                                <span class="bar-width">85%</span>
                              </div>

                            </div>
                        </div>

                        <div class="progress-wrap">
                            <h3>Animación</h3>
                            <div class="progress">
                              <div class="progress-bar color2" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                               <span class="bar-width">95%</span>
                              </div>
                            </div>
                        </div>

                        <div class="progress-wrap">
                            <h3>Romance</h3>
                            <div class="progress">
                              <div class="progress-bar color3" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                <span class="bar-width">20%</span>
                              </div>
                            </div>
                        </div>

                        <div class="progress-wrap">
                            <h3>Terror</h3>
                            <div class="progress">
                              <div class="progress-bar color4" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                <span class="bar-width">90%</span>
                              </div>
                            </div>
                        </div>
                    </div>

                </div><!--/.col-sm-6-->

                <div class="col-sm-6 wow fadeInDown">
                    <div class="accordion">
                        <h2>Movie | Central</h2>
                        <div class="panel-group" id="accordion1">
                          <div class="panel panel-default">
                            <div class="panel-heading active">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1">
                                  Aplicación
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>

                            <div id="collapseOne1" class="panel-collapse collapse in">
                              <div class="panel-body">
                                  <div class="media accordion-inner">
                                        <div class="pull-left">
                                            <img width="150px" height="150px" src="{{ asset('assets/images/logo.png') }}">
                                        </div>
                                        <div class="media-body">
                                             <h4>Objetivo</h4>
                                             <p>La página Movie | Central fue creada pensando en aquellas personas
                                             que les gusta ver peliculas pero a un costo menor al real y que puedan tener
                                             su lista de peliculas accesible desde cualquier ordenador</p>
                                        </div>
                                  </div>
                              </div>
                            </div>
                          </div>

                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1">
                                  Misión
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>
                            <div id="collapseTwo1" class="panel-collapse collapse">
                              <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.
                              </div>
                            </div>
                          </div>

                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseThree1">
                                  Visión
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>
                            <div id="collapseThree1" class="panel-collapse collapse">
                              <div class="panel-body">
                                Anim pariatr cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.
                              </div>
                            </div>
                          </div>

                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseFour1">
                                  Contacto
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>
                            <div id="collapseFour1" class="panel-collapse collapse">
                              <div class="panel-body">
                                <p>Correo: manuel.161293@gmail.com</p>
                              </div>
                            </div>
                          </div>
                        </div><!--/#accordion1-->
                    </div>
                </div>

            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#middle-->

    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2 wow fadeInDown">
                    <div class="testimonial">
                        <h2>Comentarios recientes</h2>
                         <div class="media testimonial-inner">
                            <div class="pull-left">
                                <img class="img-responsive img-circle" width="50px" height="50px" src="{{ asset('assets/images/profiles/not-found.jpg') }}">
                            </div>
                            <div class="media-body">
                                <p>Esta es la mejor pelicula de avengers que eh visto y con una calidad mejor...</p>
                                <span><strong>- Angel Baz/</strong> <a href="{{url('')}}">Avengers</a></span>
                            </div>
                         </div>

                         <div class="media testimonial-inner">
                            <div class="pull-left">
                                <img class="img-responsive img-circle" width="50px" height="50px" src="{{ asset('assets/images/profiles/not-found.jpg') }}">
                            </div>
                            <div class="media-body">
                                <p>Gracias Movie | Central por tener este repositorio de peliculas a un buen precio...</p>
                                <span><strong>- Manuel Valdovinos/</strong> <a href="{{url('')}}">Ant-Man</a></span>
                            </div>
                         </div>


                         <div class="media testimonial-inner">
                            <div class="pull-left">
                                <img class="img-responsive img-circle" width="50px" height="50px" src="{{ asset('assets/images/profiles/not-found.jpg') }}">
                            </div>
                            <div class="media-body">
                                <p>Hasta que encontre esta pelicula, ya tenia tiempo queriendola ver...</p>
                                <span><strong>- Arturo Sanchez/</strong> <a href="{{url('')}}">Terminator Genesys</a></span>
                            </div>
                         </div>


                         <div class="media testimonial-inner">
                            <div class="pull-left">
                                <img class="img-responsive img-circle" width="50px" height="50px" src="{{ asset('assets/images/profiles/not-found.jpg') }}">
                            </div>
                            <div class="media-body">
                                <p>La mejor pelicula de guerra. Fury, se las recomiendo...</p>
                                <span><strong>- Fabian Salcedo/</strong> <a href="{{url('')}}">Fury</a></span>
                            </div>
                         </div>

                         <div class="media testimonial-inner">
                            <div class="pull-left">
                                <img class="img-responsive img-circle" width="50px" height="50px" src="{{ asset('assets/images/profiles/not-found.jpg') }}">
                            </div>
                            <div class="media-body">
                                <p>Zootopia de buena calidad y a un precio accesible. Gracias Movie | Central...</p>
                                <span><strong>- Brat Pit/</strong> <a href="{{url('')}}">Zootopia</a></span>
                            </div>
                         </div>

                    </div>
                </div>

            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#content-->

@endsection
