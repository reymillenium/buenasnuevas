<!DOCTYPE HTML>
{{--<html lang="en">--}}
<html lang="{{$lang}}">
<head>

    <title>@yield('page_title')</title>

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
                            Español
                        </a>
                    </li>
                    |
                    <li>
                        <a class="en" href="{{route(collect(request()->segments())->last(), ['language'=> 'en'])}}"><img src="{{asset('images/icons/languages/United-kingdom.png')}}">
                            English
                        </a>
                    </li>
                    |
                    <li>
                        <a class="fr" href="{{route(collect(request()->segments())->last(), ['language'=> 'fr'])}}"><img src="{{asset('images/icons/languages/France.png')}}">
                            Français
                        </a>
                    </li>
                    |

                    {{--<!-- Authentication Links -->--}}
                    @guest
                        <li id="li_email" style="cursor: pointer">
                            <a class="login faa-parent animated-hover" href="{{ route('login_page', ['language' => 'es']) }}"><i class="fas fa-sign-in-alt faa-horizontal fa-slow" aria-hidden="true"></i>
                                @if ($lang == 'en')
                                    Login
                                @elseif ($lang == 'fr')
                                    Entrer
                                @else
                                    Ingresar
                                @endif
                            </a>
                        </li>
                    @else
                        <li>
                            <a class="login faa-parent animated-hover" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">

                                <i class="fas fa-sign-out-alt faa-horizontal fa-slow" aria-hidden="true"></i>
                                @if ($lang == 'en')
                                    Logout
                                @elseif ($lang == 'fr')
                                    Déconnecter
                                @else
                                    Desconectarse
                                @endif
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    @endguest
                    {{--<!-- \Authentication Links -->--}}

                    <div class="clearfix"></div>
                </ul>
            </div>

            <div class="clearfix"></div>

        </div>
    </div>

    <div class="header-bottom">
        <div class="container">
            <div class="logo">
                @if ($lang == 'en')
                    <a href="{{route('index_page', ['language' => 'en'])}}"><img src="{{asset('images/logos/logo_Church_Photoshop_en.png')}}" class="img-responsive" alt=""/></a>
                @elseif ($lang == 'fr')
                    <a href="{{route('index_page', ['language' => 'fr'])}}"><img src="{{asset('images/logos/logo_Church_Photoshop_fr.png')}}" class="img-responsive" alt=""/></a>
                @else
                    <a href="{{route('index_page', ['language' => 'es'])}}"><img src="{{asset('images/logos/logo_Church_Photoshop_es.png')}}" class="img-responsive" alt=""/></a>
                @endif

            </div>

            <!-- Authentication Links -->
            @guest
                <div class="bottom-left">
                    @if ($lang == 'en')
                        <a href="{{route('register_page', ['language' => 'en'])}}">¿NEW HERE? REGISTER</a>
                    @elseif ($lang == 'fr')
                        <a href="{{route('register_page', ['language' => 'fr'])}}">NOUVEAU ICI? S'INSCRIRE</a>
                    @else
                        <a href="{{route('register_page', ['language' => 'es'])}}">¿NUEVO AQUÍ? REGÍSTRESE</a>
                    @endif
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

                    <li>
                        @if ($lang == 'en')
                            <a href="{{ route('index_page', ['language'=>'en']) }}" data-hover="Home">Home</a>
                        @elseif ($lang == 'fr')
                            <a href="{{ route('index_page', ['language'=>'fr']) }}" data-hover="Accueil">Accueil</a>
                        @else
                            <a href="{{ route('index_page', ['language'=>'es']) }}" data-hover="Inicio">Inicio</a>
                        @endif
                    </li>

                    <label>|</label>

                    <li>
                        @if ($lang == 'en')
                            <a href="{{ route('our_mission_page', ['language'=>'en']) }}" data-hover="OUR MISSION">OUR
                                MISSION</a>
                        @elseif ($lang == 'fr')
                            <a href="{{ route('our_mission_page', ['language'=>'fr']) }}" data-hover="NOTRE MISSION">NOTRE
                                MISSION</a>
                        @else
                            <a href="{{ route('our_mission_page', ['language'=>'es']) }}" data-hover="NUESTRA MISIÓN">NUESTRA
                                MISIÓN</a>
                        @endif
                    </li>

                    <label>|</label>

                    <li>
                        @if ($lang == 'en')
                            <a href="{{ route('activities_page', ['language'=>'en']) }}" data-hover="ACTIVITIES">ACTIVITIES</a>
                        @elseif ($lang == 'fr')
                            <a href="{{ route('activities_page', ['language'=>'fr']) }}" data-hover="ACTIVITÉS">ACTIVITÉS</a>
                        @else
                            <a href="{{ route('activities_page', ['language'=>'es']) }}" data-hover="ACTIVIDADES">ACTIVIDADES</a>
                        @endif
                    </li>

                    <label>|</label>

                    <li>
                        @if ($lang == 'en')
                            <a href="{{ route('ministries_page', ['language'=>'en']) }}" data-hover="MINISTRIES">MINISTRIES</a>
                        @elseif ($lang == 'fr')
                            <a href="{{ route('ministries_page', ['language'=>'fr']) }}" data-hover="MINISTÈRES">MINISTÈRES</a>
                        @else
                            <a href="{{ route('ministries_page', ['language'=>'es']) }}" data-hover="MINISTERIOS">MINISTERIOS</a>
                        @endif
                    </li>

                    <label>|</label>

                    <li>
                        @if ($lang == 'en')
                            <a href="{{ route('study_page', ['language'=>'en']) }}" data-hover="STUDY">STUDY</a>
                        @elseif ($lang == 'fr')
                            <a href="{{ route('study_page', ['language'=>'fr']) }}" data-hover="STUDIO">STUDIO</a>
                        @else
                            <a href="{{ route('study_page', ['language'=>'es']) }}" data-hover="ESTUDIO">ESTUDIO</a>
                        @endif
                    </li>

                    <label>|</label>


                    {{--<li id="li_resources" class="dropdown" onmouseover="showUnorderedListHover()" onmouseout="hideUnorderedListMouseLeave()">--}}
                    <li id="li_resources" class="dropdown">

                        @if ($lang == 'en')
                            <a href="#" class="dropdown-toggle hvr-underline-from-center" data-hover="RESOURCES">RESOURCES
                                <b class="fa fa-caret-down"></b></a>
                        @elseif ($lang == 'fr')
                            <a href="#" class="dropdown-toggle hvr-underline-from-center" data-hover="RESSOURCES">RESSOURCES
                                <b class="fa fa-caret-down"></b></a>
                        @else
                            <a href="#" class="dropdown-toggle hvr-underline-from-center" data-hover="RECURSOS">RECURSOS
                                <b class="fa fa-caret-down"></b></a>
                        @endif

                        <ul class="sub-menu dropdown-menu" onmouseout="hideUnorderedListMouseLeave()">
                        {{--<ul class="sub-menu dropdown-menu">--}}

                        <!-- Dropdown Links -->
                            @guest
                                <li>
                                    <a id="a_library" href="https://www.cristianismohist.com/" target="_newtab"><i class="fa fa-book-open"></i>
                                        @if ($lang == 'en')
                                            LIBRARY
                                        @elseif ($lang == 'fr')
                                            LIBRAIRIE
                                        @else
                                            LIBRERÍA
                                        @endif
                                    </a>
                                </li>

                                <li><a href=""><i class="fa fa-link"></i>
                                        @if ($lang == 'en')
                                            LINKS
                                        @elseif ($lang == 'fr')
                                            LIENS
                                        @else
                                            ENLACES
                                        @endif
                                    </a>
                                </li>
                            @else
                                @if ($lang == 'en')
                                    <li>
                                        <a href="{{ route('user_page', ['language' => 'en']) }}"><i class="fa fa-user"></i> {{ Auth::user()->first_name}}
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('videos_page', ['language' => 'en']) }}"><i class="fa fa-video"></i>
                                            VIDEOS</a>
                                    </li>

                                    <li>
                                        <a href="{{ route('pictures_page', ['language' => 'en']) }}"><i class="fa fa-image"></i>
                                            PICTURES</a>
                                    </li>

                                    <li>
                                        <a id="a_library" href="https://www.cristianismohist.com/" target="_newtab"><i class="fa fa-book-open"></i>
                                            LIBRARY</a>
                                    </li>

                                    <li><a href=""><i class="fa fa-link"></i> LINKS</a></li>
                                @elseif ($lang == 'fr')
                                    <li>
                                        <a href="{{ route('user_page', ['language' => 'fr']) }}"><i class="fa fa-user"></i> {{ Auth::user()->first_name}}
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('videos_page', ['language' => 'fr']) }}"><i class="fa fa-video"></i>
                                            VIDÉOS</a>
                                    </li>

                                    <li>
                                        <a href="{{ route('pictures_page', ['language' => 'fr']) }}"><i class="fa fa-image"></i>
                                            PHOTOS</a>
                                    </li>

                                    <li>
                                        <a id="a_library" href="https://www.cristianismohist.com/" target="_newtab"><i class="fa fa-book-open"></i>
                                            LIBRAIRIE</a>
                                    </li>

                                    <li><a href=""><i class="fa fa-link"></i> LIENS</a></li>
                                @else
                                    <li>
                                        <a href="{{ route('user_page', ['language' => 'es']) }}"><i class="fa fa-user"></i> {{ Auth::user()->first_name}}
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('videos_page', ['language' => 'es']) }}"><i class="fa fa-video"></i>
                                            VIDEOS</a>
                                    </li>

                                    <li>
                                        <a href="{{ route('pictures_page', ['language' => 'es']) }}"><i class="fa fa-image"></i>
                                            FOTOS</a>
                                    </li>

                                    <li>
                                        <a id="a_library" href="https://www.cristianismohist.com/" target="_newtab"><i class="fa fa-book-open"></i>
                                            LIBRERÍA</a>
                                    </li>

                                    <li><a href=""><i class="fa fa-link"></i>ENLACES</a></li>
                            @endif

                        @endguest
                        <!-- /Dropdown Links -->

                        </ul>
                    </li>

                    <div id="div_resources_mobile">

                        @Auth
                            <li id="li_user">
                                @if ($lang == 'en')
                                    <a href="{{ route('user_page', ['language'=>'en']) }}" data-hover="{{ Auth::user()->first_name . ' Dashboard' }}">{{ Auth::user()->first_name . ' Dashboard' }}</a>
                                @elseif ($lang == 'fr')
                                    <a href="{{ route('user_page', ['language'=>'fr']) }}" data-hover="{{ Auth::user()->first_name . ' Dashboard' }}">{{ Auth::user()->first_name . ' Dashboard' }}</a>
                                @else
                                    <a href="{{ route('user_page', ['language'=>'es']) }}" data-hover="{{ Auth::user()->first_name . ' Dashboard' }}">{{ Auth::user()->first_name . ' Dashboard' }}</a>
                                @endif
                            </li>

                            <li id="li_videos">
                                @if ($lang == 'en')
                                    <a href="{{ route('videos_page', ['language'=>'en']) }}" data-hover="VIDEOS">VIDEOS</a>
                                @elseif ($lang == 'fr')
                                    <a href="{{ route('videos_page', ['language'=>'fr']) }}" data-hover="VIDÉOS">VIDÉOS</a>
                                @else
                                    <a href="{{ route('videos_page', ['language'=>'es']) }}" data-hover="VIDEOS">VIDEOS</a>
                                @endif
                            </li>

                            <li id="li_pictures">
                                @if ($lang == 'en')
                                    <a href="{{ route('pictures_page', ['language'=>'en']) }}" data-hover="PICTURES">PICTURES</a>
                                @elseif ($lang == 'fr')
                                    <a href="{{ route('pictures_page', ['language'=>'fr']) }}" data-hover="PHOTOS">PHOTOS</a>
                                @else
                                    <a href="{{ route('pictures_page', ['language'=>'es']) }}" data-hover="FOTOS">FOTOS</a>
                                @endif
                            </li>
                        @endauth

                        <li id="li_library">
                            @if ($lang == 'en')
                                <a href="https://www.cristianismohist.com/" target="_newtab" data-hover="LIBRARY">LIBRARY</a>
                            @elseif ($lang == 'fr')
                                <a href="https://www.cristianismohist.com/" target="_newtab" data-hover="LIBRAIRIE">LIBRAIRIE</a>
                            @else
                                <a href="https://www.cristianismohist.com/" target="_newtab" data-hover="LIBRERÍA">LIBRERÍA</a>
                            @endif
                        </li>

                        <li id="li_links">
                            @if ($lang == 'en')
                                <a href="" data-hover="LINKS">LINKS</a>
                            @elseif ($lang == 'fr')
                                <a href="" data-hover="LIENS">LIENS</a>
                            @else
                                <a href="" data-hover="ENLACES">ENLACES</a>
                            @endif
                        </li>


                    </div>


                    <label>|</label>

                    <li>
                        @if ($lang == 'en')
                            <a href="{{ route('contact_page',  ['language'=> 'en']) }}" data-hover="CONTACT">CONTACT</a>
                        @elseif ($lang == 'fr')
                            <a href="{{ route('contact_page',  ['language'=> 'fr']) }}" data-hover="CONTACT">CONTACT</a>
                        @else
                            <a href="{{ route('contact_page',  ['language'=> 'es']) }}" data-hover="CONTACTO">CONTACTO</a>
                        @endif
                    </li>

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
            <h3>
                @if ($lang == 'en')
                    Our Location
                @elseif ($lang == 'fr')
                    Notre emplacement
                @else
                    Nuestra Ubicación
                @endif
            </h3>

            <p id="p_church_name" class="">
                @if ($lang == 'en')
                    Baptist Church Buenas Nuevas
                @elseif ($lang == 'fr')
                    Bonne nouvelle église baptiste
                @else
                    Iglesia Bautista Buenas Nuevas
                @endif
            </p>

            <p id="p_address1" class="">
                1351 NW 32nd Ct
            </p>

            <p id="p_address2" class="">
                Miami, FL 33125, USA
            </p>

            <p>
                <span>
                    @if ($lang == 'en')
                        Phone :
                    @elseif ($lang == 'fr')
                        Téléphone :
                    @else
                        Teléfono :
                    @endif
                </span> (305) 635-8058
            </p>

            <span>Email : </span><a href="mailto:example@gmail.com">info@company.com</a>
        </div>

        <div class="col-md-3 ma">
            <h3>
                @if ($lang == 'en')
                    FIND US
                @elseif ($lang == 'fr')
                    Nous trouver
                @else
                    Búsquenos
                @endif
            </h3>
            <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12947831.742778081!2d-95.665!3d37.599999999999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited+States!5e0!3m2!1sen!2sin!4v1427784587281" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>-->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3592.5357459729416!2d-80.25020808555051!3d25.7858937138933!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9b73dc4f73af1%3A0x98b16e86c8b112c4!2sIglesia+Bautists+Buenas+Nuevas!5e0!3m2!1ses!2sus!4v1507517766144" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>

        <div class="col-md-3 or">
            @if ($lang == 'en')
                <h3>Our Church</h3>
                <li><a href="{{ route('our_mission_page', ['language'=>'en']) }}">• Our Mission</a></li>
                <li><a href="{{ route('activities_page', ['language'=>'en']) }}">• Activities</a></li>
                <li><a href="{{ route('ministries_page', ['language'=>'en']) }}">• Ministeries</a></li>
                <li><a href="{{ route('study_page', ['language'=>'en']) }}">• Study</a></li>
                <li><a href="{{ route('contact_page', ['language'=>'en']) }}">• Contact</a></li>
            @elseif ($lang == 'fr')
                <h3>Notre Église</h3>
                <li><a href="{{ route('our_mission_page', ['language'=>'fr']) }}">• Notre mission</a></li>
                <li><a href="{{ route('activities_page', ['language'=>'fr']) }}">• Activités</a></li>
                <li><a href="{{ route('ministries_page', ['language'=>'fr']) }}">• Ministères</a></li>
                <li><a href="{{ route('study_page', ['language'=>'fr']) }}">• Studio</a></li>
                <li><a href="{{ route('contact_page', ['language'=>'fr']) }}">• Contact</a></li>
            @else
                <h3>Nuestra Iglesia</h3>
                <li><a href="{{ route('our_mission_page', ['language'=>'es']) }}">• Nuestra misión</a></li>
                <li><a href="{{ route('activities_page', ['language'=>'es']) }}">• Actividades</a></li>
                <li><a href="{{ route('ministries_page', ['language'=>'es']) }}">• Ministerios</a></li>
                <li><a href="{{ route('study_page', ['language'=>'es']) }}">• Estudio</a></li>
                <li><a href="{{ route('contact_page', ['language'=>'es']) }}">• Contacto</a></li>
            @endif


        </div>

        <div class="col-md-3 con">
            <h3>
                @if ($lang == 'en')
                    Connect
                @elseif ($lang == 'fr')
                    Connecter
                @else
                    Conéctese
                @endif
            </h3>
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