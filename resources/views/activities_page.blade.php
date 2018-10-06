<?php
    $lang = isset($language) ? $language : 'es';
?>

@extends('layouts.general_layout')

@if ($lang == 'en')
    @section('page_title', "Activities - Baptist Church Buenas Nuevas")
@elseif ($lang == 'fr')
    @section('page_title', "Activités - Église Baptiste Buenas Nuevas")
@else
    @section('page_title', "Actividades - Iglesia Bautista Buenas Nuevas")
@endif

@section('content')

    <!-- prayer -->
    <div class="prayer">
        <div class="container">

            @if ($lang == 'en')
                <h2>ACTIVITIES</h2>

                <div class="prayer-top">
                    <div class="col-md-4 prayer-left">
                        <img src="{{asset('images/EscuelaDominical.jpg')}}" class="img-responsive" alt=""/>
                    </div>
                    <div class="col-md-8 prayer-right">
                        <h3>SUNDAY SCHOOL</h3>
                        <span>Sunday 9:45 am</span>
                        <h6>always free from repetition, injected humour,</h6>
                        <p>Lorem Ipsum, you need to be sure there isn't Many desktop publishing packages and web page
                            editors now use Lorem Ipsum as their default model text, ando make a type specimen book. It
                            has
                            survived not only five centuries, but also the leap into electronic a search for 'lorem
                            ipsum'
                            will uncover many web sites still in their infancy. Various versions have evolved over the
                            years, anything Lorem Ipsum is not simply random text. It has roots in a piece of classical
                            Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin
                            professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin
                            words,
                            consectetur, from a Lorem Ipsum passage, and going through the cites of the embarrassing
                            hidden
                            in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat
                            predefined</p>
                        <a href="single.html" class="vie">View more</a>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="prayer-top">
                    <div class="col-md-4 prayer-left">
                        <img src="{{asset('images/ServicioDeAdoracion.jpg')}}" class="img-responsive" alt=""/>
                    </div>
                    <div class="col-md-8 prayer-right">
                        <h3>Worship Service</h3>
                        <span>Sunday 11:00 am</span>;
                        <h6>repetition, injected always free from humour,</h6>
                        <p>Lorem Ipsum, you need to be sure there isn't Many desktop publishing packages and web page
                            editors now use Lorem Ipsum as their default model text, ando make a type specimen book. It
                            has
                            survived not only five centuries, but also the leap into electronic a search for 'lorem
                            ipsum'
                            will uncover many web sites still in their infancy. Various versions have evolved over the
                            years, anything Lorem Ipsum is not simply random text. It has roots in a piece of classical
                            Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin
                            professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin
                            words,
                            consectetur, from a Lorem Ipsum passage, and going through the cites of the embarrassing
                            hidden
                            in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat
                            predefined</p>
                        <a href="single.html" class="vie">View more</a>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="prayer-top">
                    <div class="col-md-4 prayer-left">
                        <img src="{{asset('images/CoroOriginal_426X400.jpg')}}" class="img-responsive" alt=""/>
                    </div>
                    <div class="col-md-8 prayer-right">
                        <h3>Chorus Rehearsal</h3>
                        <span>At the end of the Worship Service</span>;
                        <h6>repetition, injected always free from humour,</h6>
                        <p>Lorem Ipsum, you need to be sure there isn't Many desktop publishing packages and web page
                            editors now use Lorem Ipsum as their default model text, ando make a type specimen book. It
                            has
                            survived not only five centuries, but also the leap into electronic a search for 'lorem
                            ipsum'
                            will uncover many web sites still in their infancy. Various versions have evolved over the
                            years, anything Lorem Ipsum is not simply random text. It has roots in a piece of classical
                            Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin
                            professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin
                            words,
                            consectetur, from a Lorem Ipsum passage, and going through the cites of the embarrassing
                            hidden
                            in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat
                            predefined</p>
                        <a href="single.html" class="vie">View more</a>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="prayer-top">
                    <div class="col-md-4 prayer-left">
                        <img src="{{asset('images/9.jpg')}}" class="img-responsive" alt=""/>
                    </div>
                    <div class="col-md-8 prayer-right">
                        <h3>Bible Study and Adoration</h3>
                        <span>Wednesday 7:30 pm</span>;
                        <h6>repetition, injected always free from humour,</h6>
                        <p>Lorem Ipsum, you need to be sure there isn't Many desktop publishing packages and web page
                            editors now use Lorem Ipsum as their default model text, ando make a type specimen book. It
                            has
                            survived not only five centuries, but also the leap into electronic a search for 'lorem
                            ipsum'
                            will uncover many web sites still in their infancy. Various versions have evolved over the
                            years, anything Lorem Ipsum is not simply random text. It has roots in a piece of classical
                            Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin
                            professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin
                            words,
                            consectetur, from a Lorem Ipsum passage, and going through the cites of the embarrassing
                            hidden
                            in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat
                            predefined</p>
                        <a href="single.html" class="vie">View more</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            @elseif ($lang == 'fr')
                <h2>ACTIVITES</h2>

                <div class="prayer-top">
                    <div class="col-md-4 prayer-left">
                        <img src="{{asset('images/EscuelaDominical.jpg')}}" class="img-responsive" alt=""/>
                    </div>
                    <div class="col-md-8 prayer-right">
                        <h3>Ecole du Dimanche</h3>
                        <span>Dimanche 9:45 am</span>
                        <h6>always free from repetition, injected humour,</h6>
                        <p>Lorem Ipsum, you need to be sure there isn't Many desktop publishing packages and web page
                            editors now use Lorem Ipsum as their default model text, ando make a type specimen book. It
                            has
                            survived not only five centuries, but also the leap into electronic a search for 'lorem
                            ipsum'
                            will uncover many web sites still in their infancy. Various versions have evolved over the
                            years, anything Lorem Ipsum is not simply random text. It has roots in a piece of classical
                            Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin
                            professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin
                            words,
                            consectetur, from a Lorem Ipsum passage, and going through the cites of the embarrassing
                            hidden
                            in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat
                            predefined</p>
                        <a href="single.html" class="vie">Voir plus</a>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="prayer-top">
                    <div class="col-md-4 prayer-left">
                        <img src="{{asset('images/ServicioDeAdoracion.jpg')}}" class="img-responsive" alt=""/>
                    </div>
                    <div class="col-md-8 prayer-right">
                        <h3>Service de Culte</h3>
                        <span>Dimanche 11:00 am</span>;
                        <h6>repetition, injected always free from humour,</h6>
                        <p>Lorem Ipsum, you need to be sure there isn't Many desktop publishing packages and web page
                            editors now use Lorem Ipsum as their default model text, ando make a type specimen book. It
                            has
                            survived not only five centuries, but also the leap into electronic a search for 'lorem
                            ipsum'
                            will uncover many web sites still in their infancy. Various versions have evolved over the
                            years, anything Lorem Ipsum is not simply random text. It has roots in a piece of classical
                            Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin
                            professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin
                            words,
                            consectetur, from a Lorem Ipsum passage, and going through the cites of the embarrassing
                            hidden
                            in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat
                            predefined</p>
                        <a href="single.html" class="vie">Voir plus</a>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="prayer-top">
                    <div class="col-md-4 prayer-left">
                        <img src="{{asset('images/CoroOriginal_426X400.jpg')}}" class="img-responsive" alt=""/>
                    </div>
                    <div class="col-md-8 prayer-right">
                        <h3>Répétition de Choeur</h3>
                        <span>À la fin du Service de Culte</span>;
                        <h6>repetition, injected always free from humour,</h6>
                        <p>Lorem Ipsum, you need to be sure there isn't Many desktop publishing packages and web page
                            editors now use Lorem Ipsum as their default model text, ando make a type specimen book. It
                            has
                            survived not only five centuries, but also the leap into electronic a search for 'lorem
                            ipsum'
                            will uncover many web sites still in their infancy. Various versions have evolved over the
                            years, anything Lorem Ipsum is not simply random text. It has roots in a piece of classical
                            Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin
                            professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin
                            words,
                            consectetur, from a Lorem Ipsum passage, and going through the cites of the embarrassing
                            hidden
                            in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat
                            predefined</p>
                        <a href="single.html" class="vie">Voir plus</a>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="prayer-top">
                    <div class="col-md-4 prayer-left">
                        <img src="{{asset('images/9.jpg')}}" class="img-responsive" alt=""/>
                    </div>
                    <div class="col-md-8 prayer-right">
                        <h3>Étude biblique et adoration</h3>
                        <span>Mercredi 7:30 pm</span>;
                        <h6>repetition, injected always free from humour,</h6>
                        <p>Lorem Ipsum, you need to be sure there isn't Many desktop publishing packages and web page
                            editors now use Lorem Ipsum as their default model text, ando make a type specimen book. It
                            has
                            survived not only five centuries, but also the leap into electronic a search for 'lorem
                            ipsum'
                            will uncover many web sites still in their infancy. Various versions have evolved over the
                            years, anything Lorem Ipsum is not simply random text. It has roots in a piece of classical
                            Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin
                            professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin
                            words,
                            consectetur, from a Lorem Ipsum passage, and going through the cites of the embarrassing
                            hidden
                            in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat
                            predefined</p>
                        <a href="single.html" class="vie">Voir plus</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            @else
                <h2>ACTIVIDADES</h2>

                <div class="prayer-top">
                    <div class="col-md-4 prayer-left">
                        <img src="{{asset('images/EscuelaDominical.jpg')}}" class="img-responsive" alt=""/>
                    </div>
                    <div class="col-md-8 prayer-right">
                        <h3>ESCUELA DOMINICAL</h3>
                        <span>Domingo 9:45 am</span>
                        <h6>always free from repetition, injected humour,</h6>
                        <p>Lorem Ipsum, you need to be sure there isn't Many desktop publishing packages and web page
                            editors now use Lorem Ipsum as their default model text, ando make a type specimen book. It
                            has
                            survived not only five centuries, but also the leap into electronic a search for 'lorem
                            ipsum'
                            will uncover many web sites still in their infancy. Various versions have evolved over the
                            years, anything Lorem Ipsum is not simply random text. It has roots in a piece of classical
                            Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin
                            professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin
                            words,
                            consectetur, from a Lorem Ipsum passage, and going through the cites of the embarrassing
                            hidden
                            in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat
                            predefined</p>
                        <a href="single.html" class="vie">Ver más</a>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="prayer-top">
                    <div class="col-md-4 prayer-left">
                        <img src="{{asset('images/ServicioDeAdoracion.jpg')}}" class="img-responsive" alt=""/>
                    </div>
                    <div class="col-md-8 prayer-right">
                        <h3>Servicio de Adoración</h3>
                        <span>Domingos 11:00 am</span>;
                        <h6>repetition, injected always free from humour,</h6>
                        <p>Lorem Ipsum, you need to be sure there isn't Many desktop publishing packages and web page
                            editors now use Lorem Ipsum as their default model text, ando make a type specimen book. It
                            has
                            survived not only five centuries, but also the leap into electronic a search for 'lorem
                            ipsum'
                            will uncover many web sites still in their infancy. Various versions have evolved over the
                            years, anything Lorem Ipsum is not simply random text. It has roots in a piece of classical
                            Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin
                            professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin
                            words,
                            consectetur, from a Lorem Ipsum passage, and going through the cites of the embarrassing
                            hidden
                            in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat
                            predefined</p>
                        <a href="single.html" class="vie">Ver más</a>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="prayer-top">
                    <div class="col-md-4 prayer-left">
                        <img src="{{asset('images/CoroOriginal_426X400.jpg')}}" class="img-responsive" alt=""/>
                    </div>
                    <div class="col-md-8 prayer-right">
                        <h3>Ensayo del Coro</h3>
                        <span>Al terminar el Servicio de Adoración</span>;
                        <h6>repetition, injected always free from humour,</h6>
                        <p>Lorem Ipsum, you need to be sure there isn't Many desktop publishing packages and web page
                            editors now use Lorem Ipsum as their default model text, ando make a type specimen book. It
                            has
                            survived not only five centuries, but also the leap into electronic a search for 'lorem
                            ipsum'
                            will uncover many web sites still in their infancy. Various versions have evolved over the
                            years, anything Lorem Ipsum is not simply random text. It has roots in a piece of classical
                            Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin
                            professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin
                            words,
                            consectetur, from a Lorem Ipsum passage, and going through the cites of the embarrassing
                            hidden
                            in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat
                            predefined</p>
                        <a href="single.html" class="vie">Ver más</a>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="prayer-top">
                    <div class="col-md-4 prayer-left">
                        <img src="{{asset('images/9.jpg')}}" class="img-responsive" alt=""/>
                    </div>
                    <div class="col-md-8 prayer-right">
                        <h3>Estudio Bíblico y Adoración</h3>
                        <span>Miércoles 7:30 pm</span>;
                        <h6>repetition, injected always free from humour,</h6>
                        <p>Lorem Ipsum, you need to be sure there isn't Many desktop publishing packages and web page
                            editors now use Lorem Ipsum as their default model text, ando make a type specimen book. It
                            has
                            survived not only five centuries, but also the leap into electronic a search for 'lorem
                            ipsum'
                            will uncover many web sites still in their infancy. Various versions have evolved over the
                            years, anything Lorem Ipsum is not simply random text. It has roots in a piece of classical
                            Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin
                            professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin
                            words,
                            consectetur, from a Lorem Ipsum passage, and going through the cites of the embarrassing
                            hidden
                            in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat
                            predefined</p>
                        <a href="single.html" class="vie">Ver más</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            @endif


        </div>
    </div>
    <!-- prayer -->
@endsection