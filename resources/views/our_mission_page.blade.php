<?php
    $lang = isset($language) ? $language : 'es';
?>

{{--@extends('layouts.general_layout_' . "{$lang}")--}}
@extends('layouts.general_layout')

@section('page_title', "Nuestra misión")

@section('content')

    <!-- mission -->
    <div class="mission">
        <div class="container">
            <h2>Nuestra Misión</h2>
            <div class="col-md-7 mission-left">
                <h6>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using
                    'Content here, content here', making it look like readable English.</h6>
                <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model
                    text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various
                    versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour
                    and the like</p>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                    alteration in some form, by injected humour, or randomised words which don't look even slightly
                    believable</p>
                <a href="single.html" class="vie">View More</a>
            </div>
            <div class="col-md-5 mission-right">
                <img src="{{asset('images/1.jpg')}}" class="img-responsive" alt=""/>
            </div>
            <div class="clearfix"></div>
            <div class="mission-bottom">
                <h2>mission statements</h2>
                <div class="col-md-6">
                    <div class="sed-left">
                        <div class="sed-con">
                            <i class="star"></i>
                        </div>
                        <div class="sed-data">
                            <h6>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as
                                opposed </h6>
                            <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                                default model text, and a search for 'lorem ipsum' will uncover many web sites still in
                                their infancy</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="sed-left">
                        <div class="sed-con">
                            <i class="clou"></i>
                        </div>
                        <div class="sed-data">
                            <h6>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as
                                opposed </h6>
                            <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                                default model text, and a search for 'lorem ipsum' will uncover many web sites still in
                                their infancy</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="sed-left">
                        <div class="sed-con">
                            <i class="heart"></i>
                        </div>
                        <div class="sed-data">
                            <h6>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as
                                opposed </h6>
                            <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                                default model text, and a search for 'lorem ipsum' will uncover many web sites still in
                                their infancy</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="sed-left">
                        <div class="sed-con">
                            <i class="sett"></i>
                        </div>
                        <div class="sed-data">
                            <h6>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as
                                opposed </h6>
                            <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                                default model text, and a search for 'lorem ipsum' will uncover many web sites still in
                                their infancy</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- mission -->
@endsection
