<?php
use BuenasNuevas\Country;

$lang = isset($language) ? $language : 'es';

// Obtengo todas los países en la BD
$countries = Country::all();

?>

@extends('layouts.general_layout_' . "{$lang}")

@section('page_title', "Registro")

@section('content')
    <div class="study">
        <div class="container">
            <div class="row">

                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">@if ($lang == 'es') Teclee sus datos
                            personales @elseif($lang == 'en') Type your personal information @elseif($lang == 'fr')
                                Tapez vos informations personnelles @endif</div>

                        <div class="panel-body">
                            <form role="form" class="form-horizontal" method="POST" action="{{ route('register') }}">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                                    <label for="first_name" class="col-md-4 control-label">@if ($lang == 'es')
                                            Nombre @elseif($lang == 'en') First name @elseif($lang == 'fr')
                                            Prénom @endif</label>


                                    <div class="col-md-6">
                                        <input id="first_name" type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" @if(!$errors->any()) autofocus @elseif($errors->any() && $errors->first() == $errors->first('first_name')) autofocus style="border-top-color: red; border-right-color: red; border-bottom-color: red;" @endif>

                                        @if ($errors->has('first_name'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('second_name') ? ' has-error' : '' }}">
                                    <label for="second_name" class="col-md-4 control-label">@if ($lang == 'es') Segundo
                                        nombre @elseif($lang == 'en') Second name @elseif($lang == 'fr') Nom de
                                        famille @endif</label>

                                    <div class="col-md-6">
                                        <input id="second_name" type="text" class="form-control" name="second_name" value="{{ old('second_name') }}" @if($errors->any() && $errors->first() == $errors->first('second_name')) autofocus style="border-top-color: red; border-right-color: red; border-bottom-color: red;" @endif>

                                        @if ($errors->has('second_name'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('second_name') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                                    <label for="last_name" class="col-md-4 control-label">@if ($lang == 'es')
                                            Apellidos @elseif($lang == 'en') Last name @elseif($lang == 'fr') Nom de
                                            famille @endif</label>

                                    <div class="col-md-6">
                                        <input id="last_name" type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" @if($errors->any() && $errors->first() == $errors->first('last_name')) autofocus style="border-top-color: red; border-right-color: red; border-bottom-color: red;" @endif>

                                        @if ($errors->has('last_name'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>


                                <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                    <label for="phone" class="col-md-4 control-label">@if ($lang == 'es')
                                            Teléfono @elseif($lang == 'en') Phone @elseif($lang == 'fr')
                                            Téléphone @endif</label>

                                    <div class="col-md-6">
                                        <input id="phone" type="text" class="form-control" name="phone" minlength="6" maxlength="21" value="{{ old('phone') }}" @if($errors->any() && $errors->first() == $errors->first('phone')) autofocus style="border-top-color: red; border-right-color: red; border-bottom-color: red;" @endif>

                                        @if ($errors->has('phone'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                                    <label for="gender" class="col-md-4 control-label">@if ($lang == 'es')
                                            Sexo @elseif($lang == 'en') Gender @elseif($lang == 'fr')
                                            Genre @endif</label>

                                    <div class="col-md-6">
                                        {{--<input id="gender" type="text" class="form-control" name="gender" value="{{ old('gender') }}" required autofocus>--}}

                                        <select id="slct_user_gender" class="form-control col-md-9" name="gender" title="Escoja el sexo..." @if($errors->any() && $errors->first() == $errors->first('gender')) autofocus style="border-color: red;" @endif>>

                                            <option value="" selected disabled hidden><?php echo($lang == 'es' ? 'Escoja el sexo' : ($lang == 'en' ? 'Choose the gender' : ($lang == 'fr' ? 'Choisissez le genre' : 'Escoja el sexo'))); ?></option>

                                            <option value="male" @if(old('gender') == 'male') selected @endif>&male;
                                                @if ($lang == 'es') Masculino @elseif($lang == 'en')
                                                    Male @elseif($lang == 'fr') Mâle @endif
                                            </option>

                                            <option value="female" @if(old('gender') == 'female') selected @endif>
                                                &female; @if ($lang == 'es') Femenino @elseif($lang == 'en')
                                                    Female @elseif($lang == 'fr') Femme @endif
                                            </option>

                                        </select>

                                        @if ($errors->has('gender'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('country_id') ? ' has-error' : '' }}">
                                    <label for="country_id" class="col-md-4 control-label">@if ($lang == 'es')
                                            País @elseif($lang == 'en') Country @elseif($lang == 'fr')
                                            Pays @endif</label>

                                    <div class="col-md-6">

                                        <select id="slct_country_id" class="form-control col-md-9 selectpicker" name="country_id" title="Escoja su país..." @if($errors->any() && $errors->first() == $errors->first('country_id')) autofocus style="border-color: red;" @endif>>

                                            {{--<option value="" selected disabled hidden>--}}
                                            {{--Escoja su país--}}
                                            {{--</option>--}}

                                            @foreach( $countries as $country)
                                                <option value="{{$country->id}}" data-image="{{asset('images/country-flags-master/flags/' . $country->code . '.png')}}"
                                                        @if(old('country_id') == $country->id) selected @endif>
                                                    {{$country->name}}
                                                </option>
                                            @endforeach

                                        </select>

                                        @if ($errors->has('country_id'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('country_id') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>


                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-4 control-label">@if ($lang == 'es') Correo
                                        electrónico @elseif($lang == 'en') E-Mail @elseif($lang == 'fr')
                                            E-Mail @endif</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" @if($errors->any() && $errors->first() == $errors->first('email')) autofocus style="border-top-color: red; border-right-color: red; border-bottom-color: red;" @endif>

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="col-md-4 control-label">@if ($lang == 'es')
                                            Contraseña @elseif($lang == 'en') Password @elseif($lang == 'fr') Mot de
                                            passe @endif</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control" name="password" value="{{ old('password')}}" @if($errors->any() && $errors->first() == $errors->first('password')) autofocus style="border-top-color: red; border-right-color: red; border-bottom-color: red;" @endif>

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                    <label for="password_confirmation" class="col-md-4 control-label">@if ($lang == 'es')
                                            Confirmar contraseña @elseif($lang == 'en') Confirm
                                            password @elseif($lang == 'fr') Confirmez le mot de passe @endif</label>

                                    <div class="col-md-6">
                                        <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" value="{{old('password_confirmation')}}" <?php  echo($errors->any() && $errors->first() == $errors->first('password_confirmation') ? 'autofocus  style="border-top-color: red; border-right-color: red; border-bottom-color: red;"' : '');  ?>>

                                        @if ($errors->has('password_confirmation'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            @if ($lang == 'es') Registrarse @elseif($lang == 'en')
                                                Register @elseif($lang == 'fr') S'inscrire @endif
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
