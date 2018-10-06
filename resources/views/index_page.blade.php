<?php
    $lang = isset($language) ? $language : 'es';
?>

{{--@extends('layouts.general_layout_' . "{$lang}")--}}
@extends('layouts.general_layout')

@if ($lang == 'es')
    @section('page_title', "Inicio - Iglesia Bautista Buenas Nuevas")
@elseif ($lang == 'en')
    @section('page_title', "Home - Baptist Church Buenas Nuevas")
@elseif ($lang == 'fr')
    @section('page_title', "Accueil - Église Baptiste Buenas Nuevas")
@else
    @section('page_title', "Inicio - Iglesia Bautista Buenas Nuevas")
@endif

@section('content')
    <!-- slider -->
    <div class="rooted">
        <div class="container">
            @if ($lang == 'es')
                <h3>Una comunidad unida, en la búsqueda del señor</h3>
            @elseif ($lang == 'en')
                <h3>A united community, in the search for the Lord</h3>
            @elseif ($lang == 'fr')
                <h3>Une communauté unie à la recherche du Seigneur</h3>
            @else
                <h3>Una comunidad unida, en la búsqueda del señor</h3>
            @endif

            <div class="single-page-artical">

                <div class="artical-content">

                    @if ($lang == 'es')
                        <img class="img-responsive" src="{{asset('images/buenasnuevas_church_front01.jpg')}}" title="Fachada de la Iglesia Bautista Buenas Nuevas">
                        <p align="justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation
                            ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                            reprehenderit
                            in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                            cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                            cupidatat
                            non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                            cupidatat
                            non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    @elseif ($lang == 'en')
                        <img class="img-responsive" src="{{asset('images/buenasnuevas_church_front01.jpg')}}" title="Facade of the Baptist Church Buenas Nuevas">
                        <p align="justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation
                            ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                            reprehenderit
                            in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                            cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                            cupidatat
                            non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                            cupidatat
                            non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    @elseif ($lang == 'fr')
                        <img class="img-responsive" src="{{asset('images/buenasnuevas_church_front01.jpg')}}" title="Façade de la Église Baptiste Buenas Nuevas">
                        <p align="justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation
                            ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                            reprehenderit
                            in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                            cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                            cupidatat
                            non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                            cupidatat
                            non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    @else
                        <img class="img-responsive" src="{{asset('images/buenasnuevas_church_front01.jpg')}}" title="banner1">
                        <p align="justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation
                            ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                            reprehenderit
                            in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                            cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                            cupidatat
                            non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                            cupidatat
                            non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    @endif

                </div>

                <br>

                <div class="col-md-9 roted-left">

                    <div class="grndd">
                        @if ($lang == 'es')
                            <h3>Establecido en el Amor</h3>
                            <h6>Conoces a Jesucristo de Nazareth?</h6>
                            <p>Curabitur quis arcu sapien, nec pharetra nisi. Aenean porttitor diam id lectus pharetra
                                nec
                                accumsan risus consequat. In gravida dapibus dolor, ut porta felis cursus vel. Integer a
                                tellus nulla. Integer eget orci a elit sollicitudin dapibus eu non elit. Vivamus cursus
                                sem
                                vitae nunc mattis tincidunt praesent ac nisi mi. Aenean porttitor diam id lectus
                                pharetra
                                nec accumsan risus consequat. In gravida dapibus dolor, ut porta felis cursus vel
                                integer a
                                tellus nulla.
                            </p>
                            <a href="single.html" class="vie">Ver más</a>
                        @elseif ($lang == 'en')
                            <h3>Established in Love</h3>
                            <h6>Do you know Jesus Christ of Nazareth?</h6>
                            <p>Curabitur quis arcu sapien, nec pharetra nisi. Aenean porttitor diam id lectus pharetra
                                nec
                                accumsan risus consequat. In gravida dapibus dolor, ut porta felis cursus vel. Integer a
                                tellus nulla. Integer eget orci a elit sollicitudin dapibus eu non elit. Vivamus cursus
                                sem
                                vitae nunc mattis tincidunt praesent ac nisi mi. Aenean porttitor diam id lectus
                                pharetra
                                nec accumsan risus consequat. In gravida dapibus dolor, ut porta felis cursus vel
                                integer a
                                tellus nulla.
                            </p>
                            <a href="single.html" class="vie">View more</a>
                        @elseif ($lang == 'fr')
                            <h3>Établi dans l'amour</h3>
                            <h6>Connaissez-vous Jésus Christ de Nazareth?</h6>
                            <p>Curabitur quis arcu sapien, nec pharetra nisi. Aenean porttitor diam id lectus pharetra
                                nec
                                accumsan risus consequat. In gravida dapibus dolor, ut porta felis cursus vel. Integer a
                                tellus nulla. Integer eget orci a elit sollicitudin dapibus eu non elit. Vivamus cursus
                                sem
                                vitae nunc mattis tincidunt praesent ac nisi mi. Aenean porttitor diam id lectus
                                pharetra
                                nec accumsan risus consequat. In gravida dapibus dolor, ut porta felis cursus vel
                                integer a
                                tellus nulla.
                            </p>
                            <a href="single.html" class="vie">Voir plus</a>
                        @else
                            <h3>Establecido en el Amor</h3>
                            <h6>Conoces a Jesucristo de Nazareth?</h6>
                            <p>Curabitur quis arcu sapien, nec pharetra nisi. Aenean porttitor diam id lectus pharetra
                                nec
                                accumsan risus consequat. In gravida dapibus dolor, ut porta felis cursus vel. Integer a
                                tellus nulla. Integer eget orci a elit sollicitudin dapibus eu non elit. Vivamus cursus
                                sem
                                vitae nunc mattis tincidunt praesent ac nisi mi. Aenean porttitor diam id lectus
                                pharetra
                                nec accumsan risus consequat. In gravida dapibus dolor, ut porta felis cursus vel
                                integer a
                                tellus nulla.
                            </p>
                            <a href="single.html" class="vie">Ver más</a>
                        @endif


                    </div>

                    <div class="worsh">
                        @if ($lang == 'es')
                            <h3>Videos y Fotos de Adoración</h3>
                            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                Proin
                                sed leo justo, sit amet venenatis tellus. Ut vehicula pharetra aliquet. Pellentesque ut
                                nisi
                                ac quam varius posuere id id velit. Vestibulum ut nulla ligula. Donec vel leo sed erat
                                ullamcorper laoreet non nec quam.
                            </p>
                        @elseif ($lang == 'en')
                            <h3>Worship Videos and Photos</h3>
                            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                Proin
                                sed leo justo, sit amet venenatis tellus. Ut vehicula pharetra aliquet. Pellentesque ut
                                nisi
                                ac quam varius posuere id id velit. Vestibulum ut nulla ligula. Donec vel leo sed erat
                                ullamcorper laoreet non nec quam.
                            </p>
                        @elseif ($lang == 'fr')
                            <h3>Adoration Vidéos et Photos</h3>
                            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                Proin
                                sed leo justo, sit amet venenatis tellus. Ut vehicula pharetra aliquet. Pellentesque ut
                                nisi
                                ac quam varius posuere id id velit. Vestibulum ut nulla ligula. Donec vel leo sed erat
                                ullamcorper laoreet non nec quam.
                            </p>
                        @else
                            <h3>Videos y Fotos de Adoración</h3>
                            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                Proin
                                sed leo justo, sit amet venenatis tellus. Ut vehicula pharetra aliquet. Pellentesque ut
                                nisi
                                ac quam varius posuere id id velit. Vestibulum ut nulla ligula. Donec vel leo sed erat
                                ullamcorper laoreet non nec quam.
                            </p>
                        @endif


                        <div class="recent">
                            <ul id="flexiselDemo3">
                                <li>
                                    <div class="team1">
                                        <iframe src="https://player.vimeo.com/video/38880155" width="100%" height="130" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                    </div>
                                </li>
                                <li>
                                    <div class="team1">
                                        <iframe src="https://player.vimeo.com/video/19764899?color=fffef8&title=0&byline=0&portrait=0" width="100%" height="130" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                    </div>
                                </li>
                                <li>
                                    <div class="team1">
                                        <iframe src="https://player.vimeo.com/video/17599940" width="100%" height="130" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                    </div>
                                </li>
                                <li>
                                    <div class="team1">
                                        <iframe src="https://player.vimeo.com/video/1871839" width="100%" height="130" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                    </div>
                                </li>
                                <li>
                                    <div class="team1">
                                        <iframe src="https://player.vimeo.com/video/19764899?color=fffef8&title=0&byline=0&portrait=0" width="100%" height="130" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                    </div>
                                </li>
                            </ul>


                            <script type="text/javascript" src="{{asset('js/jquery.flexisel.js')}}"></script>
                        </div>
                        <a href="{{ route('videos_page', ['language' => $lang]) }}" class="vie">
                            @if ($lang == 'es')
                                Ver Todos
                            @elseif ($lang == 'en')
                                See All
                            @elseif ($lang == 'fr')
                                Voir Tous
                            @else
                                Ver Todos
                            @endif
                        </a>
                        <!-- recent -->

                    </div>
                </div>

                <div class="col-md-3 rooted-right">
                    <div class="wor">
                        @if ($lang == 'es')
                            <h3>Actividades</h3>
                            <br>
                            <ul>Domingo:
                                <li><a href="#">• 9:45 am - Escuela Dominical</a></li>
                                <li><a href="#">• 11:00 am - Servicio de Adoración</a></li>
                                <li><a href="#">• Al terminar: Ensayo del Coro</a></li>
                            </ul>
                            <br>
                            <ul>Miércoles:
                                <li><a href="#">• 7:30 pm - Estudio Bíblico y Oración</a></li>
                            </ul>
                        @elseif ($lang == 'en')
                            <h3>Activities</h3>
                            <br>
                            <ul>Sunday:
                                <li><a href="#">• 9:45 am - Sunday school</a></li>
                                <li><a href="#">• 11:00 am - Worship Service</a></li>
                                <li><a href="#">• When finished: Chorus Rehearsal</a></li>
                            </ul>
                            <br>
                            <ul>Wednesday:
                                <li><a href="#">• 7:30 pm - Bible Study and Prayer</a></li>
                            </ul>
                        @elseif ($lang == 'fr')
                            <h3>Activités</h3>
                            <br>
                            <ul>Dimanches:
                                <li><a href="#">• 9:45 am - École du Dimanche</a></li>
                                <li><a href="#">• 11:00 am - Service de Culte</a></li>
                                <li><a href="#">• Une fois terminé: Répétition de Choeur</a></li>
                            </ul>
                            <br>
                            <ul>Mercredi:
                                <li><a href="#">• 7:30 pm - Etude Biblique et Prière</a></li>
                            </ul>
                        @else
                            <h3>Actividades</h3>
                            <br>
                            <ul>Domingos:
                                <li><a href="#">• 9:45 am - Escuela Dominical</a></li>
                                <li><a href="#">• 11:00 am - Servicio de Adoración</a></li>
                                <li><a href="#">• Al terminar: Ensayo del Coro</a></li>
                            </ul>
                            <br>
                            <ul>Miércoles:
                                <li><a href="#">• 7:30 pm - Estudio Bíblico y Oración</a></li>
                            </ul>
                        @endif
                    </div>

                    <div class="fb-like-box" data-href="https://www.facebook.com/w3layouts" data-width="250" data-height="380" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
                    <div id="fb-root"></div>
                    <script>(function (d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                            if (d.getElementById(id))
                                return;
                            js = d.createElement(s);
                            js.id = id;
                            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
                            fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));</script>
                </div>

                <div class="clearfix"></div>

            </div>
        </div>
    </div>
@endsection
