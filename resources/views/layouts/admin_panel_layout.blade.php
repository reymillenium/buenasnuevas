<!DOCTYPE HTML>
{{--<html lang="en">--}}
<html lang="{{$lang}}">
<head>

    <title>@yield('page_title')</title>

{{--<meta charset="utf-8">--}}
{{--<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">--}}
{{--<meta name="description" content="">--}}
{{--<meta name="author" content="">--}}
{{--<link rel="icon" href="{{asset('admin_panel/favicon.ico')}}">--}}

<!-- *** Basic characteristics of the web page. *** -->
    <meta charset="UTF-8">
    <!--<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sitio Web de la Iglesia Buenas Nuevas">
    <meta name="keywords" content="buenas nuevas, iglesia, religión">

    <!-- Web site Icon -->
    <link rel="icon" type="image/png" href="{{asset('images/icons/icons8-Church_100.png')}}"/>


    <!-- Bootstrap core CSS -->
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"--}}
    {{--integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">--}}

    {{-- Esta versión de bootstrap permite mostrar bien los formularios (La anterior no) --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" crossorigin="anonymous">

    <!-- Font Awesome Core -->
    <link rel="stylesheet" href="{{asset('fontawesome/fontawesome-free-5.1.1-web/css/all.css')}}"/>
    {{--<link rel="stylesheet" href="{{asset('admin_panel/fonts/font-awesome-4.7.0/css/font-awesome.css')}}">--}}

<!-- Alertify: include the core style -->
    <link rel="stylesheet" href="{{asset('admin_panel/css/alertifyjs/css/alertify.min.css')}}"/>

    <!-- Alertify: include a theme (default in this case) -->
    <link rel="stylesheet" href="{{asset('admin_panel/css/alertifyjs/css/themes/default.min.css')}}"/>

    <!-- Alertify: include a theme (semantic in this case. It's bigger) -->
    {{--    <link rel="stylesheet" href="{{asset('admin_panel/css/alertifyjs/css/themes/semantic.min.css')}}" />--}}

<!-- Alertify: include a theme (Bootstrap in this case.) -->
    {{--    <link rel="stylesheet" href="{{asset('admin_panel/css/alertifyjs/css/themes/bootstrap.min.css')}}" />--}}

<!-- Alertify: include a theme (default rtl in this case.) -->
    {{--    <link rel="stylesheet" href="{{asset('admin_panel/css/alertifyjs/css/themes/default.rtl.min.css')}}" />--}}

<!-- Font Awesome Animated Icons -->
    <link rel="stylesheet" href="{{asset('admin_panel/css/font-awesome-animation.css')}}">

    <!-- Custom General Style for the template -->
    <link href="{{asset('admin_panel/css/general_style.css')}}" rel="stylesheet">

    <!-- Custom styles for the Sticky footer navbar -->
    <link href="{{asset('admin_panel/css/sticky-footer-navbar.css')}}" rel="stylesheet">

    <!-- Custom table styles for the tables -->
    <link rel="stylesheet" href="{{asset('admin_panel/css/tablesStyles.css')}}">

    <!-- Custom sidenav style for the Fixed SideBar -->
    <link rel="stylesheet" href="{{asset('admin_panel/css/sidenav_style.css')}}">

    <!-- Custom style for the Checkboxes -->
    <link rel="stylesheet" href="{{asset('admin_panel/css/checkbox_style.css')}}">

    {{-- pretty checkbox CDN, A pure CSS library to beautify checkbox and radio buttons! --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css"/>
</head>

<body>

<header>
    <!-- Fixed Navbar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">

        <a class="navbar-brand  faa-parent animated-hover" href="{{ route('index_page', ['language' => $lang]) }}">
            <i class="fa fa-church faa-float fa-fast"></i>
            @if ($lang == 'en')
                Buenas Nuevas Control Panel
            @elseif ($lang == 'fr')
                Panneau de Contrôle de Buenas Nuevas
            @else
                Panel de Control de Buenas Nuevas
            @endif
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                {{--<li class="nav-item active">--}}
                {{--<a class="nav-link faa-parent animated-hover" href="{{ route('user.users_page', ['language'=> $lang]) }}">--}}
                {{--<span class="sr-only fa fa-user">(current)</span> --}}
                {{--<span class="fa fa-users faa-ring fa-fast"></span>--}}
                {{--Usuarios--}}
                {{--</a>--}}
                {{--</li>--}}

                {{--<li class="nav-item">--}}
                {{--<a class="nav-link" href="#">Another Link--}}
                {{--</a>--}}
                {{--</li>--}}

                {{--<li class="nav-item">--}}
                {{--<a class="nav-link disabled" href="#">Disabled Link--}}
                {{--</a>--}}
                {{--</li>--}}
            </ul>

            <div class="languages">
                {{--<ul id="ul_languages" class="languages">--}}
                <li>
                    @if (isset($user))
                        <a class="es" href="{{route('user.'.collect(request()->segments())->last(), ['language'=> 'es', $user])}}"><img src="{{asset('images/icons/languages/Spain.png')}}">
                            Español
                        </a>
                    @else
                        <a class="es" href="{{route('user.'.collect(request()->segments())->last(), ['language'=> 'es', 1])}}"><img src="{{asset('images/icons/languages/Spain.png')}}">
                            Español
                        </a>
                    @endif

                </li>
                |
                <li>
                    @if(isset($user))
                        <a class="en" href="{{route('user.'.collect(request()->segments())->last(), ['language'=> 'en', $user])}}"><img src="{{asset('images/icons/languages/United-kingdom.png')}}">
                            English
                        </a>
                    @else
                        <a class="en" href="{{route('user.'.collect(request()->segments())->last(), ['language'=> 'en', 1])}}"><img src="{{asset('images/icons/languages/United-kingdom.png')}}">
                            English
                        </a>
                    @endif
                </li>
                |
                <li>
                    @if(isset($user))
                        <a class="fr" href="{{route('user.'.collect(request()->segments())->last(), ['language'=> 'fr', $user])}}"><img src="{{asset('images/icons/languages/France.png')}}">
                            Français
                        </a>
                    @else
                        <a class="fr" href="{{route('user.'.collect(request()->segments())->last(), ['language'=> 'fr', 1])}}"><img src="{{asset('images/icons/languages/France.png')}}">
                            Français
                        </a>
                    @endif
                </li>
                |

                {{--<!-- Authentication Links -->--}}
                @guest
                    <li id="li_login_pc" style="cursor: pointer">
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
                {{--</ul>--}}
            </div>

            <form class="form-inline mt-2 mt-md-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <!-- / Fixed Navbar -->
</header>

<!-- Page content -->
<main role="main" class="container" style="margin-left: 0;">
    <div class="row mt-3" style="padding: 0; width: 100%;  margin-left: 0px;">
        <div class="content col-11" style="padding: 0">
            @yield('content')
        </div>
        @section('sidebar')
            <div class="col-1">
                <!-- Side navigation -->
                <div class="sidenav">

                    {{--<a href="{{ route('users.new_user_page') }}" id="a_new_user"--}}
                    {{--class="btn btn-default btn-success faa-parent animated-hover">--}}
                    {{--<i class="fa fa-user faa-ring fa-fast"></i>--}}
                    {{--Crear usuario--}}
                    {{--</a>--}}

                    <a href="{{ route('user.users_page', ['language'=> $lang]) }}" class="faa-parent animated-hover">
                        <i class="fa fa-users faa-ring fa-slow"></i>
                        @if ($lang == 'en')
                            &nbsp;Users
                        @elseif ($lang == 'fr')
                            &nbsp;Utilisateurs
                        @else
                            &nbsp;Usuarios
                        @endif
                    </a>

                    {{-- <a href="{{ route('users.new_user_page') }}" class="faa-parent animated-hover">--}}
                    <a href="#" class="faa-parent animated-hover">
                        <i class="fa fa-user-plus faa-ring fa-slow"></i>
                        @if ($lang == 'en')
                            &nbsp;Create user
                        @elseif ($lang == 'fr')
                            &nbsp;Créer utilisateur
                        @else
                            &nbsp;Crear usuario
                        @endif
                    </a>

                    <a href="#" class="faa-parent animated-hover">
                        <i class="fa fa-list-alt faa-ring fa-slow"></i>
                        @if ($lang == 'en')
                            &nbsp; Comments
                        @elseif ($lang == 'fr')
                            &nbsp; Commentaires
                        @else
                            &nbsp; Comentarios
                        @endif
                    </a>

                    <a href="#" class="faa-parent animated-hover">
                        <i class="fa fa-film faa-ring fa-slow"></i>
                        @if ($lang == 'en')
                            &nbsp; Videos
                        @elseif ($lang == 'fr')
                            &nbsp; Vidéos
                        @else
                            &nbsp; Videos
                        @endif
                    </a>

                    <a href="#" class="faa-parent animated-hover">
                        <i class="fa fa-image faa-ring fa-slow"></i>
                        @if ($lang == 'en')
                            &nbsp; Images
                        @elseif ($lang == 'fr')
                            &nbsp; Images
                        @else
                            &nbsp; Imágenes
                        @endif
                    </a>

                    <a href="#" class="faa-parent animated-hover">
                        <i class="fa fa-calendar-alt faa-ring fa-slow"></i>
                        @if ($lang == 'en')
                            &nbsp; Schedule
                        @elseif ($lang == 'fr')
                            &nbsp; Programme
                        @else
                            &nbsp; Horario
                        @endif
                    </a>

                    <a href="#" class="faa-parent animated-hover">
                        <i class="fa fa-id-card faa-ring fa-slow"></i>
                        @if ($lang == 'en')
                            &nbsp;Contact info
                        @elseif ($lang == 'fr')
                            &nbsp;Contact
                        @else
                            &nbsp;Contacto
                        @endif
                    </a>

                    <a href="#" class="faa-parent animated-hover">
                        &nbsp;<i class="fa fa-info faa-ring fa-slow"></i>
                        @if ($lang == 'en')
                            &nbsp;&nbsp;&nbsp;About
                        @elseif ($lang == 'fr')
                            &nbsp;&nbsp;&nbsp;À propos de
                        @else
                            &nbsp;&nbsp;&nbsp;Acerca de
                        @endif
                    </a>
                </div>
            </div>
        @show
    </div>
</main>
<!-- / Page content -->

<!-- Page Footer -->
<footer class="footer">
    <div class="container">
        <a href="http://reiniergarcia.com" style="text-decoration: none; left: 200px !important;">
            <span class="text-muted faa-parent animated-hover">
                <span class="fa fa-copyright faa-ring fa-slow"></span> All Copyrights Reserved BlasterSoft: {{date('Y')}}
            </span>
        </a>
    </div>
</footer>
<!-- / Page Footer -->

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

<!-- ** Dirección del fichero .js del plugin Alertify ** -->
<script type="text/javascript" src="{{asset('admin_panel/css/alertifyjs/alertify.min.js')}}"></script>


<!-- Application JavaScript Files
================================================== -->
<script src="{{asset('admin_panel/js/application.js')}}"></script>


</body>
</html>
