<?php
    $lang = isset($language) ? $language : 'es';
?>

@extends('layouts.general_layout')

@if ($lang == 'en')
    @section('page_title', "Pictures - Baptist Church Buenas Nuevas")
@elseif ($lang == 'fr')
    @section('page_title', "Photos - Église Baptiste Buenas Nuevas")
@else
    @section('page_title', "Fotos - Iglesia Bautista Buenas Nuevas")
@endif

@section('content')
    <!-- photos -->
    <div class="photos">
        <div class="container">

            <h2>@if ($lang == 'en') Pictures @elseif ($lang == 'fr') Photos @else Fotos @endif</h2>

            <div class="portfolio">
                <div id="portfoliolist">
                    <div class="portfolio card mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="card" style="display: inline-block; opacity: 1;">
                        <div class="portfolio-wrapper grid_box">
                            <a href="{{asset('images/2.jpg')}}" class="swipebox" title="@if ($lang == 'en') Cathedral @elseif ($lang == 'fr') Cathédrale @else Catedral @endif">
                                <img src="{{asset('images/2.jpg')}}" class="img-responsive" alt=""><span class="zoom-icon"></span>
                            </a>
                        </div>
                    </div>
                    <div class="portfolio app mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="app" style="display: inline-block; opacity: 1;">
                        <div class="portfolio-wrapper grid_box">
                            <a href="{{asset('images/Bautizo.jpg')}}" class="swipebox" title="@if ($lang == 'en') Christening a baby @elseif ($lang == 'fr') Baptiser un bébé @else Bautizo de un bebé @endif">
                                <img src="{{asset('images/Bautizo.jpg')}}" class="img-responsive" alt=""><span class="zoom-icon"></span>
                            </a>
                        </div>
                    </div>
                    <div class="portfolio icon mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="icon" style="display: inline-block; opacity: 1;">
                        <div class="portfolio-wrapper grid_box">
                            <a href="{{asset('images/ServicioDeAdoracion.jpg')}}" class="swipebox" title="@if ($lang == 'en') Mass @elseif ($lang == 'fr') Messe @else Misa @endif">
                                <img src="{{asset('images/ServicioDeAdoracion.jpg')}}" class="img-responsive" alt=""><span class="zoom-icon"></span>
                            </a>
                        </div>
                    </div>
                    <div class="portfolio app mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="app" style="display: inline-block; opacity: 1;">
                        <div class="portfolio-wrapper grid_box">
                            <a href="{{asset('images/5.jpg')}}" class="swipebox" title="@if ($lang == 'en') Praying @elseif ($lang == 'fr') Prier @else Rezando @endif">
                                <img src="{{asset('images/5.jpg')}}" class="img-responsive" alt=""><span class="zoom-icon"></span>
                            </a>
                        </div>
                    </div>
                    <div class="portfolio card mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="card" style="display: inline-block; opacity: 1;">
                        <div class="portfolio-wrapper grid_box">
                            <a href="{{asset('images/6.jpg')}}" class="swipebox" title="@if ($lang == 'en') Church courtyard @elseif ($lang == 'fr') Cour de l'église @else Patio de iglesia @endif">
                                <img src="{{asset('images/6.jpg')}}" class="img-responsive" alt=""><span class="zoom-icon"></span>
                            </a>
                        </div>
                    </div>
                    <div class="portfolio card mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="card" style="display: inline-block; opacity: 1;">
                        <div class="portfolio-wrapper grid_box">
                            <a href="{{asset('images/7.jpg')}}" class="swipebox" title="@if ($lang == 'en') Front of the church @elseif ($lang == 'fr') Devant l'église @else Frente de la iglesia @endif">
                                <img src="{{asset('images/7.jpg')}}" class="img-responsive" alt=""><span class="zoom-icon"></span>
                            </a>
                        </div>
                    </div>
                    <div class="portfolio icon mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="icon" style="display: inline-block; opacity: 1;">
                        <div class="portfolio-wrapper grid_box">
                            <a href="{{asset('images/8.jpg')}}" class="swipebox" title="@if ($lang == 'en') Stained glass @elseif ($lang == 'fr') Vitrail @else Vitrales @endif">
                                <img src="{{asset('images/8.jpg')}}" class="img-responsive" alt=""><span class="zoom-icon"></span>
                            </a>
                        </div>
                    </div>
                    <div class="portfolio logos mix_all wow bounceIn" data-wow-delay="0.4s" data-cat="logos" style="display: inline-block; opacity: 1;">
                        <div class="portfolio-wrapper grid_box">
                            <a href="{{asset('images/9.jpg')}}" class="swipebox" title="@if ($lang == 'en') Congregation @elseif ($lang == 'fr') Congrégation @else Congregación @endif">
                                <img src="{{asset('images/9.jpg')}}" class="img-responsive" alt=""><span class="zoom-icon"></span>
                            </a>
                        </div>
                    </div>
                    <div class="portfolio icon mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="icon" style="display: inline-block; opacity: 1;">
                        <div class="portfolio-wrapper grid_box">
                            <a href="{{asset('images/10.jpg')}}" class="swipebox" title="@if ($lang == 'en') Chorus @elseif ($lang == 'fr') Choeur @else Coro @endif">
                                <img src="{{asset('images/10.jpg')}}" class="img-responsive" alt=""><span class="zoom-icon"></span>
                            </a>
                        </div>
                    </div>
                    <div class="portfolio icon mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="icon" style="display: inline-block; opacity: 1;">
                        <div class="portfolio-wrapper grid_box">
                            <a href="{{asset('images/11.jpg')}}" class="swipebox" title="@if ($lang == 'en') Congregation @elseif ($lang == 'fr') Congrégation @else Congregación @endif">
                                <img src="{{asset('images/11.jpg')}}" class="img-responsive" alt=""><span class="zoom-icon"></span>
                            </a>
                        </div>
                    </div>
                    <div class="portfolio icon mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="icon" style="display: inline-block; opacity: 1;">
                        <div class="portfolio-wrapper grid_box">
                            <a href="{{asset('images/Boda.jpg')}}" class="swipebox" title="@if ($lang == 'en') Wedding in our church @elseif ($lang == 'fr') Mariage dans notre église @else Boda en nuestra iglesia @endif">
                                <img src="{{asset('images/Boda.jpg')}}" class="img-responsive" alt=""><span class="zoom-icon"></span>
                            </a>
                        </div>
                    </div>
                    <div class="portfolio icon mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="icon" style="display: inline-block; opacity: 1;">
                        <div class="portfolio-wrapper grid_box">
                            <a href="{{asset('images/EscuelaDominical.jpg')}}" class="swipebox" title="@if ($lang == 'en') Ancient wardrobe @elseif ($lang == 'fr') Armoire ancienne @else Vestuario antiguo @endif">
                                <img src="{{asset('images/EscuelaDominical.jpg')}}" class="img-responsive" alt=""><span class="zoom-icon"></span>
                            </a>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>

        </div>
    </div>
    <!-- sermons -->
@endsection