<!DOCTYPE HTML>
<html lang="en">
<head>

    <title>@yield('page_title') - Iglesia Bautista Buenas Nuevas</title>

    <!-- *** Basic characteristics of the web page. *** -->
    <meta charset="UTF-8">
    <!--<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sitio Web de la Iglesia Buenas Nuevas">
    <meta name="keywords" content="buenas nuevas, iglesia, religión">

    <!-- Web site Icon -->
    <link rel="icon" type="image/png" href="{{asset('images/icons/icons8-Church_100.png')}}"/>

    <!---------------------------- ***** External Files with JavaScript code ***** ------------------------------------>

    <!-- Amazing Slider Gallery. Insert to your webpage before the </head> -->
    <script src="{{asset('sliderengine/jquery.js')}}"></script>
    <script src="{{asset('sliderengine/amazingslider.js')}}"></script>
    <script src="{{asset('sliderengine/initslider-1.js')}}"></script>

    <!-- Plugin de jquery para las animaciones -->
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>--}}

    <!-- ** Dirección del fichero .js del plugin Alertify ** -->
    <script type="text/javascript" src="{{asset('alertify/alertify-1.11.1/alertify.min.js')}}"></script>

    <!-- Plugin Swipebox para la Galeria de Imágenes -->
    <script src="{{asset('js/jquery.swipebox.min.js')}}"></script>

    <!-- JQuery Plugins para mostrar imágenes en los select list  -->
    <!-- Image Combo Box  -->
    <script type="text/javascript" src="{{asset('ms-Dropdown-master/js/msdropdown/jquery.dd.js')}}"></script>

    <!-- ** Dirección del fichero .js con funciones y eventos definidos por el Programador ** -->
    <script type="text/javascript" src="{{asset('js/application.js')}}"></script>

    <!-- ** Uso de HighCharts para Graficaciones ** -->

    <!------------------------------- *** Hoja(s) de Estilo (CSS) a Emplear *** --------------------------------------->

    <!-- Bootstrap -->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all">

    {{-- FlexSlider. Minigalería Carrusel de la pagina de inicio --}}
    <link rel="stylesheet" href="{{asset('css/flexslider.css')}}" type="text/css" media="screen"/>

    <!-- Alertify Package: include the core styles -->
    <link rel="stylesheet" href="{{asset('alertify/alertify-1.11.1/css/alertify.min.css')}}"/>

    <!-- Alertify Package: include a theme, can be included into the core instead of using 2 separate files (like now) -->
    <link rel="stylesheet" href="{{asset('alertify/alertify-1.11.1/css/themes/default.css')}}"/>

    <!-- Font(s) a emplear (Lora) -->
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700' rel='stylesheet' type='text/css'>

    <!-- FontAwesome Package -->
    <link rel="stylesheet" href="{{asset('fontawesome/fontawesome-free-5.1.1-web/css/all.css')}}"/>

    <!-- Font Awesome Animated Icons -->
    <link href="{{asset('css/font-awesome-animation.css')}}" rel="stylesheet">

    {{-- AmazingSlider Gallery Package --}}
    <link rel="stylesheet" type="text/css" href="{{asset('sliderengine/amazingslider-1.css')}}">

    <!-- Estilos de componentes definidos por el Programador -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all"/>

    {{-- Swipebox: Gelería de Imágenes --}}
    <link rel="stylesheet" href="{{asset('css/swipebox.css')}}">

    {{-- Hojas de estilo para mostrar imágenes en los select list --}}
    {{-- Image Combo Box --}}
    <link rel="stylesheet" href="{{asset('ms-Dropdown-master/css/msdropdown/dd.css')}}">

</head>

<body>

{{-- Permite mostrar las fotos de la Galería de Imágenes --}}
<script type="text/javascript">

    jQuery(function ($) {
        $(".swipebox").swipebox();
    });

</script>

<!-- Header -->
<div class="header">

    <div class="header-top">
        <div class="container">
            <div class="head-left">

                <!--<div class="agileits_top_menu">-->

                <div class="w3l_header_left">
                    <ul>
                        <li id="li_address" class="faa-parent animated-hover" style="cursor: pointer">
                            <i class="fa fa-map-marker faa-bounce faa-slow" aria-hidden="true"></i>1351 NW 32nd Ct,
                            Miami, FL 33125, USA
                        </li>
                        <li id="li_phone" class="faa-parent animated-hover" style="cursor: pointer">
                            <i class="fa fa-phone faa-ring fa-slow" aria-hidden="true"></i>(305) 635-8058
                        </li>
                        <li id="li_email" class="faa-parent animated-hover" style="cursor: pointer">
                            <i class="fa fa-envelope faa-shake fa-slow" aria-hidden="true"></i>
                            <a id="a_email" href="mailto:buenasnuevasmiami@gmail.com" target="_newtab">BuenasNuevasMiami@gmail.com</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="head-right">
                <ul id="ul_languages" class="languages">
                    <li>
                        <a class="es" href="{{route(collect(request()->segments())->last(), ['language'=> 'es'])}}"><img src="{{asset('images/icons/languages/Spain.png')}}">
                            {{--                        <a class="es" href="#"><img src="{{asset('images/icons/languages/Spain.png')}}">--}}
                            Español</a>
                    </li>
                    |
                    <li>
                        <a class="en" href="{{route(collect(request()->segments())->last(), ['language'=> 'en'])}}"><img src="{{asset('images/icons/languages/United-kingdom.png')}}">
                            {{--                        <a class="en" href="#"><img src="{{asset('images/icons/languages/United-kingdom.png')}}">--}}
                            English</a>
                    </li>
                    |
                    <li>
                        <a class="fr" href="{{route(collect(request()->segments())->last(), ['language'=> 'fr'])}}"><img src="{{asset('images/icons/languages/France.png')}}"> Français</a>
                    </li>
                    |

                    {{--<!-- Authentication Links -->--}}
                    @guest
                        <li id="li_email" style="cursor: pointer">
                            <a class="login faa-parent animated-hover" href="{{ route('login_page', ['language' => 'es']) }}"><i class="fas fa-sign-in-alt faa-horizontal fa-slow" aria-hidden="true"></i>
                                Ingresar</a>
                        </li>
                        {{--<li><a href="{{ route('register') }}">Register</a></li>--}}
                    @else
                        <li>
                            <a class="login faa-parent animated-hover" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt faa-horizontal fa-slow" aria-hidden="true"></i>
                                Desconectarse
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    @endguest
                    {{--<!-- \Authentication Links -->--}}


                    <div class="clearfix"></div>
                </ul>


                <!--                <ul class="number">
                                    <li><a href="#">Need Prayer </a></li>|
                                    <li><a href="#"> Sermons </a></li>|
                                    <li><a href="#">Online Giving </a></li>|
                                    <li><a href="#">Praying Groups</a></li>|
                                    <li><a href="#">Worship Services</a></li>
                                    <div class="clearfix"> </div>
                                </ul>-->


                {{--<select id="slct_idiomas">--}}
                {{--<OPTION class="es" VALUE="1">Español</OPTION><img src="{{asset('images/icons/languages/Spain.png')}}" width="24px"></img>--}}
                {{--<OPTION class="es" style="background-image: url(images/icons/languages/Spain.png)" VALUE="1">Español</OPTION>--}}
                {{--<OPTION VALUE="2">English</OPTION>--}}
                {{--<OPTION VALUE="3">Français</OPTION>--}}
                {{--</select>--}}

            </div>

            <div class="clearfix"></div>
        </div>
    </div>


    <div class="header-bottom">
        <div class="container">
            <div class="logo">
                <a href="{{route('index_page', ['language' => 'es'])}}"><img src="{{asset('images/logos/logo_Church_Photoshop_es.png')}}" class="img-responsive" alt=""/></a>
            </div>

            <!-- Authentication Links -->
            @guest
                <div class="bottom-left">
                    <a href="{{route('register_page', ['language' => 'es'])}}">¿NUEVO AQUÍ? REGÍSTRESE</a>
                </div>
            @else
            @endguest
            {{--<!-- /Authentication Links -->--}}

            <div class="clearfix"></div>
        </div>
    </div>

    <div class="container">
        <div class="head-na">
            <div class="dropdown head-nav">
                <span class="menu"> </span>
                <ul id="ul_menu" class="menu cl-effect-15">
                    {{--<li><a id="a_index" href="index_es.html">Inicio</a></li>--}}
                    <li><a href="{{ route('index_page', ['language'=>'es']) }}">Inicio</a></li>
                    <label>|</label>
                    {{--<li><a id="a_our_mission" href="ourmission_es.html" data-hover="NUESTRA MISIÓN">NUESTRA MISIÓN</a></li>--}}
                    <li><a href="{{ route('our_mission_page', ['language'=>'es']) }}">NUESTRA MISIÓN</a></li>
                    <label>|</label>
                    {{--<li><a id="a_activities" href="activities_es.html" data-hover="ACTIVIDADES">ACTIVIDADES</a></li>--}}
                    <li><a href="{{ route('activities_page', ['language'=>'es']) }}">ACTIVIDADES</a></li>
                    <label>|</label>
                    {{--<li><a id="a_ministries" href="ministries_es.html" data-hover="MINISTERIOS">MINISTERIOS</a></li>--}}
                    <li><a href="{{ route('ministries_page', ['language'=>'es']) }}">MINISTERIOS</a></li>
                    <label>|</label>
                    {{--<li><a id="a_study" href="study_es.html" data-hover="ESTUDIO">ESTUDIO</a></li>--}}
                    <li><a href="{{ route('study_page', ['language'=>'es']) }}">ESTUDIO</a></li>
                    <label>|</label>


                    <li id="li_resources" class="dropdown" onmouseover="showUnorderedListHover()" onmouseout="hideUnorderedListMouseLeave()">

                        <a href="#" class="dropdown-toggle hvr-underline-from-center" data-hover="RECURSOS">RECURSOS
                            <b class="fa fa-caret-down"></b>
                        </a>

                        <ul class="sub-menu dropdown-menu" onmouseout="hideUnorderedListMouseLeave()">

                            <!-- Dropdown Links -->
                            @guest
                                <li>
                                    {{--<a id="a_library" href="https://www.cristianismohist.com/"  data-hover="LIBRERÍA" target="_newtab"><i class="fa fa-book-open"></i> LIBRERÍA</a>--}}
                                    <a id="a_library" href="https://www.cristianismohist.com/" target="_newtab"><i class="fa fa-book-open"></i>
                                        LIBRERÍA</a>
                                </li>

                                <li><a href=""><i class="fa fa-link"></i> ENLACES</a></li>
                            @else
                                <li>
                                    <a href="{{ route('user_page', ['language' => 'es']) }}"><i class="fa fa-user"></i> {{ Auth::user()->first_name}}
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('videos_page', ['language' => 'es']) }}"><i class="fa fa-video"></i>
                                        VIDEOS</a></li>
                                <li>
                                    <a href="{{ route('pictures_page', ['language' => 'es']) }}"><i class="fa fa-image"></i>
                                        FOTOS</a></li>
                                <li>
                                    {{--<a id="a_library" href="https://www.cristianismohist.com/"  data-hover="LIBRERÍA" target="_newtab"><i class="fa fa-book-open"></i> LIBRERÍA</a>--}}
                                    <a id="a_library" href="https://www.cristianismohist.com/" target="_newtab"><i class="fa fa-book-open"></i>
                                        LIBRERÍA</a>
                                </li>

                                <li><a href=""><i class="fa fa-link"></i> ENLACES</a></li>
                        @endguest
                        <!-- /Dropdown Links -->

                        </ul>
                    </li>
                    <label>|</label>

                    <!--<li><a id="a_photos" href="photos_es.html" data-hover="FOTOS">FOTOS</a></li><label>|</label>-->
                    {{--<li><a id="a_contact" href="contact_es.html" data-hover="CONTACTO">CONTACTO</a></li>--}}
                    <li><a href="{{ route('contact_page',  ['language'=> 'es']) }}">CONTACTO</a></li>
                    <div class="clearfix"></div>
                </ul>
            </div>

            <!-- script-for-nav -->
            <script type="text/javascript" src="{{asset('js/header.js')}}"></script>
            <!-- script-for-nav -->

            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        </div>
    </div>

</div>
<!-- /Header -->


{{-- CONTENT --}}
@yield('content')
{{-- /CONTENT --}}


<!-- FOOTER -->
<footer class="footer">

    <div class="container">


        <div class="col-md-3 loc">
            <h3>Nuestra Ubicación</h3>

            <p id="p_church_name" class="">
                Iglesia Bautista Buenas Nuevas
            </p>

            <p id="p_address1" class="">
                1351 NW 32nd Ct
            </p>

            <p id="p_address2" class="">
                Miami, FL 33125, USA
            </p>

            <p><span>Teléfono :</span> (305) 635-8058</p>
            <span>Email : </span><a href="mailto:example@gmail.com">info@company.com</a>
        </div>

        <div class="col-md-3 ma">
            <h3>Búsquenos</h3>
            <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12947831.742778081!2d-95.665!3d37.599999999999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited+States!5e0!3m2!1sen!2sin!4v1427784587281" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>-->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3592.5357459729416!2d-80.25020808555051!3d25.7858937138933!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9b73dc4f73af1%3A0x98b16e86c8b112c4!2sIglesia+Bautists+Buenas+Nuevas!5e0!3m2!1ses!2sus!4v1507517766144" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>

        <div class="col-md-3 or">
            <h3>Nuestra Iglesia</h3>
            <li><a href="{{ route('our_mission_page', ['language'=>'es']) }}">• Nuestra misión</a></li>
            <li><a href="{{ route('activities_page', ['language'=>'es']) }}">• Actividades</a></li>
            <li><a href="{{ route('ministries_page', ['language'=>'es']) }}">• Ministerios</a></li>
            <li><a href="{{ route('study_page', ['language'=>'es']) }}">• Estudio</a></li>
            <li><a href="{{ route('contact_page', ['language'=>'es']) }}">• Contacto</a></li>
        </div>

        <div class="col-md-3 con">
            <h3>Conéctese</h3>
            <ul class="social">
                <li>
                    <a href="https://www.facebook.com/pages/Iglesia-Bautista-Buenas-Nuevas/115422128483909" target="_newtab"><i class="fb"> </i>Facebook</a>
                </li>
                <li><a href="https://twitter.com/BuenasNuevasMia" target="_newtab"><i class="twt"> </i>Twitter</a></li>
                <li><a href="https://www.youtube.com/channel/UCIE9xdywddNXIxJFzAUr2uA"><i class="yout"> </i>You Tube</a>
                </li>
                <li><a href="#"><i class="lik"> </i>Likedin</a></li>
                <li><a href="#"><i class="skyp"> </i>Skype</a></li>
                <div class="clearfix"></div>
            </ul>
        </div>

        {{--<div class="clearfix"></div>--}}

    </div>
</footer>
<!-- /FOOTER -->

<!-- FOOTER BOTTOM -->
<div class="footer-bottom">
    <div class="container" style="text-align: center;">
        <p>
            {{-- © --}}
            <a href="http://reiniergarcia.com" style="text-decoration: none;">
            <span class="faa-parent animated-hover">
                 Copyrights <i class="far fa-copyright faa-bounce"></i> {{date('Y')}} Reinier Garcia Ramos. All rights reserved
            </span>
            </a>

        </p>
    </div>
</div>
<!-- /FOOTER BOTTOM -->

</body>
</html>