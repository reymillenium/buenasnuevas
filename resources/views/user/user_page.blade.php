<?php $layoutName = 'general_layout'; ?>

{{--@extends('layouts.general_layout' . $layoutName)--}}
@extends('layouts.' . $layoutName)

@section('page_title', Auth::user()->first_name . ' Dashboard')

@section('content')
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
@endsection
