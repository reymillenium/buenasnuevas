<?php
    $layout_language = isset($language) ? $language : 'es';
?>

@extends('layouts.general_layout_' . "{$layout_language}")

@section('page_title', "Fotos")

@section('content')
    <!-- photos -->
    <div class="photos">
        <div class="container">
            <h2>Fotos</h2>
            <div class="portfolio">
                <div id="portfoliolist">
                    <div class="portfolio card mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="card" style="display: inline-block; opacity: 1;">
                        <div class="portfolio-wrapper grid_box">
                            <a href="{{asset('images/2.jpg')}}" class="swipebox" title="Catedral">
                                <img src="{{asset('images/2.jpg')}}" class="img-responsive" alt=""><span class="zoom-icon"></span>
                            </a>
                        </div>
                    </div>
                    <div class="portfolio app mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="app" style="display: inline-block; opacity: 1;">
                        <div class="portfolio-wrapper grid_box">
                            <a href="{{asset('images/Bautizo.jpg')}}" class="swipebox" title="Bautizo de un bebé">
                                <img src="{{asset('images/Bautizo.jpg')}}" class="img-responsive" alt=""><span class="zoom-icon"></span>
                            </a>
                        </div>
                    </div>
                    <div class="portfolio icon mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="icon" style="display: inline-block; opacity: 1;">
                        <div class="portfolio-wrapper grid_box">
                            <a href="{{asset('images/ServicioDeAdoracion.jpg')}}" class="swipebox" title="Misa">
                                <img src="{{asset('images/ServicioDeAdoracion.jpg')}}" class="img-responsive" alt=""><span class="zoom-icon"></span>
                            </a>
                        </div>
                    </div>
                    <div class="portfolio app mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="app" style="display: inline-block; opacity: 1;">
                        <div class="portfolio-wrapper grid_box">
                            <a href="{{asset('images/5.jpg')}}" class="swipebox" title="Rezando">
                                <img src="{{asset('images/5.jpg')}}" class="img-responsive" alt=""><span class="zoom-icon"></span>
                            </a>
                        </div>
                    </div>
                    <div class="portfolio card mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="card" style="display: inline-block; opacity: 1;">
                        <div class="portfolio-wrapper grid_box">
                            <a href="{{asset('images/6.jpg')}}" class="swipebox" title="Patio de iglesia">
                                <img src="{{asset('images/6.jpg')}}" class="img-responsive" alt=""><span class="zoom-icon"></span>
                            </a>
                        </div>
                    </div>
                    <div class="portfolio card mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="card" style="display: inline-block; opacity: 1;">
                        <div class="portfolio-wrapper grid_box">
                            <a href="{{asset('images/7.jpg')}}" class="swipebox" title="Frente de la iglesia">
                                <img src="{{asset('images/7.jpg')}}" class="img-responsive" alt=""><span class="zoom-icon"></span>
                            </a>
                        </div>
                    </div>
                    <div class="portfolio icon mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="icon" style="display: inline-block; opacity: 1;">
                        <div class="portfolio-wrapper grid_box">
                            <a href="{{asset('images/8.jpg')}}" class="swipebox" title="Vitrales">
                                <img src="{{asset('images/8.jpg')}}" class="img-responsive" alt=""><span class="zoom-icon"></span>
                            </a>
                        </div>
                    </div>
                    <div class="portfolio logos mix_all wow bounceIn" data-wow-delay="0.4s" data-cat="logos" style="display: inline-block; opacity: 1;">
                        <div class="portfolio-wrapper grid_box">
                            <a href="{{asset('images/9.jpg')}}" class="swipebox" title="Congregación">
                                <img src="{{asset('images/9.jpg')}}" class="img-responsive" alt=""><span class="zoom-icon"></span>
                            </a>
                        </div>
                    </div>
                    <div class="portfolio icon mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="icon" style="display: inline-block; opacity: 1;">
                        <div class="portfolio-wrapper grid_box">
                            <a href="{{asset('images/10.jpg')}}" class="swipebox" title="Coro">
                                <img src="{{asset('images/10.jpg')}}" class="img-responsive" alt=""><span class="zoom-icon"></span>
                            </a>
                        </div>
                    </div>
                    <div class="portfolio icon mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="icon" style="display: inline-block; opacity: 1;">
                        <div class="portfolio-wrapper grid_box">
                            <a href="{{asset('images/11.jpg')}}" class="swipebox" title="congregación">
                                <img src="{{asset('images/11.jpg')}}" class="img-responsive" alt=""><span class="zoom-icon"></span>
                            </a>
                        </div>
                    </div>
                    <div class="portfolio icon mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="icon" style="display: inline-block; opacity: 1;">
                        <div class="portfolio-wrapper grid_box">
                            <a href="{{asset('images/Boda.jpg')}}" class="swipebox" title="boda">
                                <img src="{{asset('images/Boda.jpg')}}" class="img-responsive" alt=""><span class="zoom-icon"></span>
                            </a>
                        </div>
                    </div>
                    <div class="portfolio icon mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="icon" style="display: inline-block; opacity: 1;">
                        <div class="portfolio-wrapper grid_box">
                            <a href="{{asset('images/EscuelaDominical.jpg')}}" class="swipebox" title="Vestuario antiguo">
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