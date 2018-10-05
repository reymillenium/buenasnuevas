<?php
    $lang = isset($language) ? $language : 'es';
?>

@extends('layouts.general_layout_' . "{$lang}")

@section('page_title', "Contacto")

@section('content')
    <!-- contact -->
    <div class="contact">
        <div class="container">

            <!----- contact-grids ----->
            <div class="contact-grids">
                <div class="col-md-5">
                    <h3>@if ($lang == 'es') Dirección @elseif($lang == 'en') Address @elseif($lang == 'fr')
                            Adrese @endif</h3>
                    <div class="address">
                        <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim
                            placerat.</p>
                        <p>1351 NW 32nd Ct,
                            <br>Miami, FL 33125</p>
                        <!--<p>Freephone : +1 800 559 6580</p>-->
                        <p>Teléfono : +1 (786) 635-8058</p>
                        <!--<p>FAX : +1 800 889 9898</p>-->
                        <p>E-mail : <a href="mailto:diegoflor@comcast.net">diegoflor@comcast.net</a></p>
                    </div>
                </div>

                <div class="col-md-7">
                    <div class="contact-map">
                        <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1578265.0941403757!2d-98.9828708842255!3d39.41170802696131!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited+States!5e0!3m2!1sen!2sin!4v1407515822047"> </iframe>-->
                        <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3592.5357459729416!2d-80.25020808555051!3d25.7858937138933!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9b73dc4f73af1%3A0x98b16e86c8b112c4!2sIglesia+Bautists+Buenas+Nuevas!5e0!3m2!1ses!2sus!4v1507517766144" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>-->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3592.5357459729416!2d-80.25020808555051!3d25.7858937138933!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9b73dc4f73af1%3A0x98b16e86c8b112c4!2sIglesia+Bautists+Buenas+Nuevas!5e0!3m2!1ses!2sus!4v1507517766144"></iframe>

                    </div>
                </div>

                <div class="clearfix"></div>

                <!----- contact-form ------>
                <div class="contact-form">
                    <form role="form" class="form-horizontal" method="POST" action="{{ route('create_message_script') }}">
                        {{ csrf_field() }}

                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="language" value="{{ $lang }}">

                        <div class="contact-form-row">
                            <div class="{{ $errors->has('subject') ? ' has-error' : '' }}">
                                <span>@if ($lang == 'es') Asunto @elseif($lang == 'en') Subject @elseif($lang == 'fr')
                                        Sujet @endif :</span>
                                <input id="subject" type="text" class="text" name="subject" value="{{ old('subject') }}" @if(!$errors->any()) autofocus @elseif($errors->any() && $errors->first() == $errors->first('subject')) autofocus style="border-top-color: red; border-right-color: red; border-bottom-color: red; border-left-color: red;" @endif>

                                @if ($errors->has('subject'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('subject') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="clearfix"></div>

                        <div class="contact-form-row2">
                            <div class="{{ $errors->has('body') ? ' has-error' : '' }}">
                            <span>@if ($lang == 'es') Mensaje @elseif($lang == 'en') Message @elseif($lang == 'fr')
                                    Message @endif :</span>
                                <textarea id="body" name="body" @if(!$errors->any()) autofocus @elseif($errors->any() && $errors->first() == $errors->first('body')) autofocus style="border-top-color: red; border-right-color: red; border-bottom-color: red; border-left-color: red;" @endif>{{ old('body') }}</textarea>

                                @if ($errors->has('body'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('body') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="clearfix"></div>
                        <br>

                        {{--<input type="submit" value="Enviar">--}}
                        {{--<input type="reset" value="Limpiar">--}}


                        <button type="submit" id="btn_send" class="btn btn-default btn-success faa-parent animated-hover" name="insert_message">
                            <i class="fa fa-sign-in-alt faa-horizontal fa-fast"></i>
                            @if ($lang == 'es') Enviar @elseif($lang == 'en') Send @elseif($lang == 'fr')
                                Envoyer @endif
                        </button>

                        <button type="reset" id="btn_eraser" class="btn btn-default btn-primary faa-parent animated-hover">
                            <i class="fa fa-eraser faa-ring fa-fast"></i>
                            @if ($lang == 'es') Limpiar @elseif($lang == 'en') Erase @elseif($lang == 'fr')
                                Effacer @endif
                        </button>

                        <a href="{{ route('index_page', ['language' => $lang]) }}" id="a_cancel" class="btn btn-default btn-danger faa-parent animated-hover">
                            <i class="fa fa-times faa-ring fa-fast"></i>
                            @if ($lang == 'es') Cancelar @elseif($lang == 'en') Cancel @elseif($lang == 'fr')
                                Annuler @endif
                        </a>

                    </form>
                </div>
                <!----- contact-form ------>

            </div>
            <!----- contact-grids ----->

        </div>
    </div>
    <!-- contact -->
@endsection