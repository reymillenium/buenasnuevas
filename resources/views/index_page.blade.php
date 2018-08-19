<?php
    $layout_language = isset($language) ? $language : 'es';
?>

@extends('layouts.general_layout_' . "{$layout_language}")

@section('page_title', "Inicio")

@section('content')
    <!-- slider -->
    <div class="rooted">
        <div class="container">

            <h3>Una comunidad unida, en la búsqueda del señor</h3>

            <div class="single-page-artical">

                <div class="artical-content">

                    {{--<img class="img-responsive" src="images/14.jpg" title="banner1">--}}
                    <img class="img-responsive" src="{{asset('images/buenasnuevas_church_front01.jpg')}}" title="banner1">

                    <p align="justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                        in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                        cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>

                <br>

                <div class="col-md-9 roted-left">

                    <div class="grndd">
                        <h3>Establecido en el Amor</h3>
                        <h6>Conoces a Jesucristo de Nazareth?</h6>
                        <p>Curabitur quis arcu sapien, nec pharetra nisi. Aenean porttitor diam id lectus pharetra nec
                            accumsan risus consequat. In gravida dapibus dolor, ut porta felis cursus vel. Integer a
                            tellus nulla. Integer eget orci a elit sollicitudin dapibus eu non elit. Vivamus cursus sem
                            vitae nunc mattis tincidunt praesent ac nisi mi. Aenean porttitor diam id lectus pharetra
                            nec accumsan risus consequat. In gravida dapibus dolor, ut porta felis cursus vel integer a
                            tellus nulla.</p>
                        <a href="single.html" class="vie">View More</a>
                    </div>

                    <div class="worsh">
                        <h3>Videos y Fotos de Adoración</h3>
                        <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin
                            sed leo justo, sit amet venenatis tellus. Ut vehicula pharetra aliquet. Pellentesque ut nisi
                            ac quam varius posuere id id velit. Vestibulum ut nulla ligula. Donec vel leo sed erat
                            ullamcorper laoreet non nec quam. </p>
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
                        <a href="{{ route('videos_page', ['language' => 'es']) }}" class="vie">Ver Todos</a>
                        <!-- recent -->

                    </div>
                </div>

                <div class="col-md-3 rooted-right">
                    <div class="wor">
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
