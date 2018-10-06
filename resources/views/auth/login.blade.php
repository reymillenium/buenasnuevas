<?php
// $layoutName = 'general_layout_';
$lang = isset($language) ? $language : 'es';
?>

{{--@extends('layouts.' . "{$layoutName}" . "{$lang}")--}}
@extends('layouts.general_layout')

@section('page_title', "Ingresar")

@section('content')
    <div class="study">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">@if ($lang=='es') Ingresar al sitio web @elseif ($lang=='en') Login in the website @elseif ($lang=='fr') Connectez-vous au site Web @endif</div>

                        <div class="panel-body">
                            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-4 control-label">@if ($lang=='es') Correo electrónico @elseif ($lang=='en') E-Mail @elseif ($lang=='fr') E-Mail @endif</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="col-md-4 control-label">@if ($lang=='es') Contraseña @elseif ($lang=='en') Password @elseif ($lang=='fr') Mot de passe @endif</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                                @if ($lang=='es') Recuérdame @elseif ($lang=='en') Remember Me @elseif ($lang=='fr') Souviens-toi de moi @endif
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-8 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            @if ($lang=='es') Entrar @elseif ($lang=='en') Enter @elseif ($lang=='fr') Entrer @endif
                                        </button>

                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            @if ($lang=='es') ¿Olvidó su contraseña? @elseif ($lang=='en') Forgot your password? @elseif ($lang=='fr') Vous avez oublié votre mot de passe? @endif
                                        </a>
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
