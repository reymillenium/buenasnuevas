<?php
    $lang = isset($language) ? $language : 'es';
?>

{{--@extends('layouts.general_layout_' . "{$lang}")--}}
@extends('layouts.general_layout')

@if ($lang == 'en')
    @section('page_title', "Ministries - Baptist Church Buenas Nuevas")
@elseif ($lang == 'fr')
    @section('page_title', "Ministères - Église Baptiste Buenas Nuevas")
@else
    @section('page_title', "Ministerios - Iglesia Bautista Buenas Nuevas")
@endif

@section('content')
    @if ($lang == 'en')
        <!-- services -->
        <div class="service">
            <div class="container">
                <h2>Ministeries</h2>
                <div class="content text-center">
                    <div class="services_overview">
                        <h3>Services Overview</h3>
                        <div class="col-md-4 service_grid">
                            <div class="view view-tenth">
                                <a href="{{route('index_page', ['language'=>'en'])}}">
                                    <div class="inner_content clearfix">
                                        <div class="product_image">
                                            <img src="{{asset('images/Bautizo.jpg')}}" class="img-responsive" alt="Service Overview # 1"/>
                                            <div class="mask">
                                                <h4>Service Overview # 1</h4>
                                                <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin,
                                                    lorem
                                                    quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem
                                                    nibh
                                                    id elit. Proin gravida nibh vel velit auctor aliquet. Aenean
                                                    sollicitudin</p>
                                                <h5>Continue reading...</h5>

                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <h4>On the other hand, we denounce</h4>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint
                                occaecati
                                cupiditate</p>

                        </div>
                        <div class="col-md-4 service_grid">
                            <div class="view view-tenth">
                                <a href="{{route('index_page', ['language'=>'en'])}}">
                                    <div class="inner_content clearfix">
                                        <div class="product_image">
                                            <img src="{{asset('images/Boda.jpg')}}" class="img-responsive" alt="Service Overview # 2"/>
                                            <div class="mask">
                                                <h4>Service Overview # 2</h4>
                                                <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin,
                                                    lorem
                                                    quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem
                                                    nibh
                                                    id elit. Proin gravida nibh vel velit auctor aliquet. Aenean
                                                    sollicitudin</p>
                                                <h5>Continue reading...</h5>

                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <h4>On the other hand, we denounce</h4>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint
                                occaecati
                                cupiditate</p>

                        </div>
                        <div class="col-md-4 service_grid span_55">
                            <div class="view view-tenth">
                                <a href="{{route('index_page', ['language'=>'en'])}}">
                                    <div class="inner_content clearfix">
                                        <div class="product_image">
                                            <img src="{{asset('images/ServicioDeAdoracion.jpg')}}" class="img-responsive" alt="Service Overview # 3"/>
                                            <div class="mask">
                                                <h4>Service Overview # 3</h4>
                                                <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin,
                                                    lorem
                                                    quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem
                                                    nibh
                                                    id elit. Proin gravida nibh vel velit auctor aliquet. Aenean
                                                    sollicitudin</p>
                                                <h5>Continue reading...</h5>

                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <h4>On the other hand, we denounce</h4>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint
                                occaecati
                                cupiditate</p>

                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="latest-news">
                        <div class="row">
                            <header>
                                <h3>Our latest news</h3>
                            </header>
                        </div>
                        <div class="col-md-4 grid_7">
                            <div class="element">
                                <div class="view view-tenth">
                                    <a href="{{route('index_page', ['language'=>'en'])}}">
                                        <div class="inner_content clearfix">
                                            <div class="product_image">
                                                <img src="{{asset('images/5.jpg')}}" class="img-responsive" alt="Latest News # 1"/>
                                                <div class="mask">
                                                    <h4>Latest News # 1</h4>
                                                    <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin,
                                                        lorem quis bibendum auctor, nisi elit consequat ipsum, nec
                                                        sagittis
                                                        sem nibh id elit. Proin gravida nibh vel velit auctor aliquet.
                                                        Aenean sollicitudin</p>
                                                    <h5>Continue reading...</h5>

                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <h4>Sit amet consectet</h4>
                                <p>Condimentum libero. Nunc hendre rit augue vel tempor posuere Consectur aldipiscing
                                    elit.
                                    Maecenas molesetdbus idictum neque puru. </p>
                            </div>
                        </div>
                        <div class="col-md-4 grid_7">
                            <div class="element">
                                <div class="view view-tenth">
                                    <a href="{{route('index_page', ['language'=>'en'])}}">
                                        <div class="inner_content clearfix">
                                            <div class="product_image">
                                                <img src="{{asset('images/7.jpg')}}" class="img-responsive" alt="Latest News # 2"/>
                                                <div class="mask">
                                                    <h4>Latest News # 2</h4>
                                                    <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin,
                                                        lorem quis bibendum auctor, nisi elit consequat ipsum, nec
                                                        sagittis
                                                        sem nibh id elit. Proin gravida nibh vel velit auctor aliquet.
                                                        Aenean sollicitudin</p>
                                                    <h5>Continue reading...</h5>

                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <h4>Proin dictum eleme</h4>
                                <p>Condimentum libero. Nunc hendre rit augue vel tempor posuere Consectur aldipiscing
                                    elit.
                                    Maecenas molesetdbus idictum neque puru. </p>
                            </div>
                        </div>
                        <div class="col-md-4 grid_7">
                            <div class="element">
                                <div class="view view-tenth">
                                    <a href="{{route('index_page', ['language'=>'en'])}}">
                                        <div class="inner_content clearfix">
                                            <div class="product_image">
                                                <img src="{{asset('images/9.jpg')}}" class="img-responsive" alt="Latest News # 3"/>
                                                <div class="mask">
                                                    <h4>Latest News # 3</h4>
                                                    <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin,
                                                        lorem quis bibendum auctor, nisi elit consequat ipsum, nec
                                                        sagittis
                                                        sem nibh id elit. Proin gravida nibh vel velit auctor aliquet.
                                                        Aenean sollicitudin</p>
                                                    <h5>Continue reading...</h5>

                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <h4>Neque porro quisqu</h4>
                                <p>Condimentum libero. Nunc hendre rit augue vel tempor posuere Consectur aldipiscing
                                    elit.
                                    Maecenas molesetdbus idictum neque puru. </p>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                    </div>
                </div>
            </div>

        </div>
        </div>
        <!-- services -->
    @elseif ($lang == 'fr')
        <!-- services -->
        <div class="service">
            <div class="container">
                <h2>Ministères</h2>
                <div class="content text-center">
                    <div class="services_overview">
                        <h3>Résumé des Services</h3>
                        <div class="col-md-4 service_grid">
                            <div class="view view-tenth">
                                <a href="{{route('index_page', ['language'=>'fr'])}}">
                                    <div class="inner_content clearfix">
                                        <div class="product_image">
                                            <img src="{{asset('images/Bautizo.jpg')}}" class="img-responsive" alt="Résumé du Service # 1"/>
                                            <div class="mask">
                                                <h4>Résumé du Service # 1</h4>
                                                <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin,
                                                    lorem
                                                    quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem
                                                    nibh
                                                    id elit. Proin gravida nibh vel velit auctor aliquet. Aenean
                                                    sollicitudin</p>
                                                <h5>Continuer la lecture...</h5>

                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <h4>On the other hand, we denounce</h4>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint
                                occaecati
                                cupiditate</p>

                        </div>
                        <div class="col-md-4 service_grid">
                            <div class="view view-tenth">
                                <a href="{{route('index_page', ['language'=>'fr'])}}">
                                    <div class="inner_content clearfix">
                                        <div class="product_image">
                                            <img src="{{asset('images/Boda.jpg')}}" class="img-responsive" alt="Résumé du Service # 2"/>
                                            <div class="mask">
                                                <h4>Résumé du Service # 2</h4>
                                                <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin,
                                                    lorem
                                                    quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem
                                                    nibh
                                                    id elit. Proin gravida nibh vel velit auctor aliquet. Aenean
                                                    sollicitudin</p>
                                                <h5>Continuer la lecture...</h5>

                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <h4>On the other hand, we denounce</h4>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint
                                occaecati
                                cupiditate</p>

                        </div>
                        <div class="col-md-4 service_grid span_55">
                            <div class="view view-tenth">
                                <a href="{{route('index_page', ['language'=>'fr'])}}">
                                    <div class="inner_content clearfix">
                                        <div class="product_image">
                                            <img src="{{asset('images/ServicioDeAdoracion.jpg')}}" class="img-responsive" alt="Résumé du Service # 3"/>
                                            <div class="mask">
                                                <h4>Résumé du Service # 3</h4>
                                                <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin,
                                                    lorem
                                                    quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem
                                                    nibh
                                                    id elit. Proin gravida nibh vel velit auctor aliquet. Aenean
                                                    sollicitudin</p>
                                                <h5>Continuer la lecture...</h5>

                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <h4>On the other hand, we denounce</h4>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint
                                occaecati
                                cupiditate</p>

                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="latest-news">
                        <div class="row">
                            <header>
                                <h3>Nos dernières nouvelles</h3>
                            </header>
                        </div>
                        <div class="col-md-4 grid_7">
                            <div class="element">
                                <div class="view view-tenth">
                                    <a href="{{route('index_page', ['language'=>'fr'])}}">
                                        <div class="inner_content clearfix">
                                            <div class="product_image">
                                                <img src="{{asset('images/5.jpg')}}" class="img-responsive" alt="Nouvelles # 1"/>
                                                <div class="mask">
                                                    <h4>Nouvelles # 1</h4>
                                                    <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin,
                                                        lorem quis bibendum auctor, nisi elit consequat ipsum, nec
                                                        sagittis
                                                        sem nibh id elit. Proin gravida nibh vel velit auctor aliquet.
                                                        Aenean sollicitudin</p>
                                                    <h5>Continuer la lecture...</h5>

                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <h4>Sit amet consectet</h4>
                                <p>Condimentum libero. Nunc hendre rit augue vel tempor posuere Consectur aldipiscing
                                    elit.
                                    Maecenas molesetdbus idictum neque puru. </p>
                            </div>
                        </div>
                        <div class="col-md-4 grid_7">
                            <div class="element">
                                <div class="view view-tenth">
                                    <a href="{{route('index_page', ['language'=>'fr'])}}">
                                        <div class="inner_content clearfix">
                                            <div class="product_image">
                                                <img src="{{asset('images/7.jpg')}}" class="img-responsive" alt="Nouvelles # 2"/>
                                                <div class="mask">
                                                    <h4>Nouvelles # 2</h4>
                                                    <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin,
                                                        lorem quis bibendum auctor, nisi elit consequat ipsum, nec
                                                        sagittis
                                                        sem nibh id elit. Proin gravida nibh vel velit auctor aliquet.
                                                        Aenean sollicitudin</p>
                                                    <h5>Continuer la lecture...</h5>

                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <h4>Proin dictum eleme</h4>
                                <p>Condimentum libero. Nunc hendre rit augue vel tempor posuere Consectur aldipiscing
                                    elit.
                                    Maecenas molesetdbus idictum neque puru. </p>
                            </div>
                        </div>
                        <div class="col-md-4 grid_7">
                            <div class="element">
                                <div class="view view-tenth">
                                    <a href="{{route('index_page', ['language'=>'fr'])}}">
                                        <div class="inner_content clearfix">
                                            <div class="product_image">
                                                <img src="{{asset('images/9.jpg')}}" class="img-responsive" alt="Nouvelles # 3"/>
                                                <div class="mask">
                                                    <h4>Nouvelles # 3</h4>
                                                    <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin,
                                                        lorem quis bibendum auctor, nisi elit consequat ipsum, nec
                                                        sagittis
                                                        sem nibh id elit. Proin gravida nibh vel velit auctor aliquet.
                                                        Aenean sollicitudin</p>
                                                    <h5>Continuer la lecture...</h5>

                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <h4>Neque porro quisqu</h4>
                                <p>Condimentum libero. Nunc hendre rit augue vel tempor posuere Consectur aldipiscing
                                    elit.
                                    Maecenas molesetdbus idictum neque puru. </p>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                    </div>
                </div>
            </div>

        </div>
        </div>
        <!-- services -->
    @else
        <!-- services -->
        <div class="service">
            <div class="container">
                <h2>Ministerios</h2>
                <div class="content text-center">
                    <div class="services_overview">
                        <h3>Resumen de Servicios</h3>
                        <div class="col-md-4 service_grid">
                            <div class="view view-tenth">
                                <a href="{{route('index_page', ['language'=>'es'])}}">
                                    <div class="inner_content clearfix">
                                        <div class="product_image">
                                            <img src="{{asset('images/Bautizo.jpg')}}" class="img-responsive" alt="Resumen de Servicio # 1"/>
                                            <div class="mask">
                                                <h4>Resumen de Servicio # 1</h4>
                                                <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin,
                                                    lorem
                                                    quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem
                                                    nibh
                                                    id elit. Proin gravida nibh vel velit auctor aliquet. Aenean
                                                    sollicitudin</p>
                                                <h5>Seguir leyendo...</h5>

                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <h4>On the other hand, we denounce</h4>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint
                                occaecati
                                cupiditate</p>

                        </div>
                        <div class="col-md-4 service_grid">
                            <div class="view view-tenth">
                                <a href="{{route('index_page', ['language'=>'es'])}}">
                                    <div class="inner_content clearfix">
                                        <div class="product_image">
                                            <img src="{{asset('images/Boda.jpg')}}" class="img-responsive" alt="Resumen de Servicio # 2"/>
                                            <div class="mask">
                                                <h4>Resumen de Servicio # 2</h4>
                                                <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin,
                                                    lorem
                                                    quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem
                                                    nibh
                                                    id elit. Proin gravida nibh vel velit auctor aliquet. Aenean
                                                    sollicitudin</p>
                                                <h5>Seguir leyendo...</h5>

                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <h4>On the other hand, we denounce</h4>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint
                                occaecati
                                cupiditate</p>

                        </div>
                        <div class="col-md-4 service_grid span_55">
                            <div class="view view-tenth">
                                <a href="{{route('index_page', ['language'=>'es'])}}">
                                    <div class="inner_content clearfix">
                                        <div class="product_image">
                                            <img src="{{asset('images/ServicioDeAdoracion.jpg')}}" class="img-responsive" alt="Resumen de Servicio # 3"/>
                                            <div class="mask">
                                                <h4>Resumen de Servicio # 3</h4>
                                                <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin,
                                                    lorem
                                                    quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem
                                                    nibh
                                                    id elit. Proin gravida nibh vel velit auctor aliquet. Aenean
                                                    sollicitudin</p>
                                                <h5>Seguir leyendo...</h5>

                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <h4>On the other hand, we denounce</h4>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint
                                occaecati
                                cupiditate</p>

                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="latest-news">
                        <div class="row">
                            <header>
                                <h3>Nuestras últimas noticias</h3>
                            </header>
                        </div>
                        <div class="col-md-4 grid_7">
                            <div class="element">
                                <div class="view view-tenth">
                                    <a href="{{route('index_page', ['language'=>'es'])}}">
                                        <div class="inner_content clearfix">
                                            <div class="product_image">
                                                <img src="{{asset('images/5.jpg')}}" class="img-responsive" alt="Noticia # 1"/>
                                                <div class="mask">
                                                    <h4>Noticia # 1</h4>
                                                    <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin,
                                                        lorem quis bibendum auctor, nisi elit consequat ipsum, nec
                                                        sagittis
                                                        sem nibh id elit. Proin gravida nibh vel velit auctor aliquet.
                                                        Aenean sollicitudin</p>
                                                    <h5>Seguir leyendo...</h5>

                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <h4>Sit amet consectet</h4>
                                <p>Condimentum libero. Nunc hendre rit augue vel tempor posuere Consectur aldipiscing
                                    elit.
                                    Maecenas molesetdbus idictum neque puru. </p>
                            </div>
                        </div>
                        <div class="col-md-4 grid_7">
                            <div class="element">
                                <div class="view view-tenth">
                                    <a href="{{route('index_page', ['language'=>'es'])}}">
                                        <div class="inner_content clearfix">
                                            <div class="product_image">
                                                <img src="{{asset('images/7.jpg')}}" class="img-responsive" alt="Noticia # 2"/>
                                                <div class="mask">
                                                    <h4>Noticia # 2</h4>
                                                    <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin,
                                                        lorem quis bibendum auctor, nisi elit consequat ipsum, nec
                                                        sagittis
                                                        sem nibh id elit. Proin gravida nibh vel velit auctor aliquet.
                                                        Aenean sollicitudin</p>
                                                    <h5>Seguir leyendo...</h5>

                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <h4>Proin dictum eleme</h4>
                                <p>Condimentum libero. Nunc hendre rit augue vel tempor posuere Consectur aldipiscing
                                    elit.
                                    Maecenas molesetdbus idictum neque puru. </p>
                            </div>
                        </div>
                        <div class="col-md-4 grid_7">
                            <div class="element">
                                <div class="view view-tenth">
                                    <a href="{{route('index_page', ['language'=>'es'])}}">
                                        <div class="inner_content clearfix">
                                            <div class="product_image">
                                                <img src="{{asset('images/9.jpg')}}" class="img-responsive" alt="Noticia # 3"/>
                                                <div class="mask">
                                                    <h4>Noticia # 3</h4>
                                                    <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin,
                                                        lorem quis bibendum auctor, nisi elit consequat ipsum, nec
                                                        sagittis
                                                        sem nibh id elit. Proin gravida nibh vel velit auctor aliquet.
                                                        Aenean sollicitudin</p>
                                                    <h5>Seguir leyendo...</h5>

                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <h4>Neque porro quisqu</h4>
                                <p>Condimentum libero. Nunc hendre rit augue vel tempor posuere Consectur aldipiscing
                                    elit.
                                    Maecenas molesetdbus idictum neque puru. </p>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                    </div>
                </div>
            </div>

        </div>
        </div>
        <!-- services -->
    @endif
@endsection
