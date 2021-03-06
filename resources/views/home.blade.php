<?php
    $lang = isset($language) ? $language : 'es';
?>

{{--@extends('layouts.general_layout_' . "{$lang}")--}}
@extends('layouts.general_layout')

@section('page_title', "Inicio")

@section('content')
    <div class="study">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">Dashboard de Inicio</div>

                        <div class="panel-body">
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif

                            You are logged in!
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
