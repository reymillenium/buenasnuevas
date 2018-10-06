<?php
    $lang = isset($language) ? $language : 'es';
?>

{{--@extends('layouts.general_layout_' . "{$lang}")--}}
@extends('layouts.general_layout')

@section('page_title', "Estudio")

@section('content')
<!-- study -->
<div class="study">
    <div class="container">
        <h2>Estudio</h2>
        <div class="study-top">
            <div class="col-md-4 study-left">
                <img src="{{asset('images/2.jpg')}}" class="img-responsive" alt=""/>
            </div>
            <div class="col-md-7 study-right">
                <h3>embarrassing hidden in the middle of text.</h3>
                <h6>Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the
                    first true generator on the Internet.</h6>
                <p>when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                    distribution of letters, as opposed to using 'Content here, content here', making it look like
                    readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                    default model text, and a search </p>
                <p>more-or-less normal distribution of letters, as opposed to using when looking at its layout. The
                    point of using Lorem Ipsum is that it has a 'Content here, content here', making it look like
                    readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                    default model text, and a search </p>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="study-bottom">
            <div class="col-md-7 study-right">
                <h6>Internet tend to repeat predefined chunks as necessary, Ipsum generators on the making this the
                    first true generator on the Internet.</h6>
                <p>when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                    distribution of letters, as opposed to using 'Content here, content here', making it look like
                    readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                    default model text, and a search </p>
                <p>more-or-less normal distribution of letters, as opposed to using when looking at its layout. The
                    point of using Lorem Ipsum is that it has a 'Content here, content here', making it look like
                    readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                    default model text, and a search </p>
                <a href="single.html" class="vie">View more</a>
            </div>
            <div class="col-md-4 study-left">
                <img src="{{asset('images/11.jpg')}}" class="img-responsive" alt=""/>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- study -->
@endsection