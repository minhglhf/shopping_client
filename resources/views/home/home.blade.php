@extends('layouts.master')

@section('title')
    home_page
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('home/home.css')}}">
@endsection

@section('js')
    <link rel="stylesheet" href="{{asset('home/home.js')}}">
@endsection

@section('content')
    <!--slider-->
    @include('home.components.slider')
    <!--/slider-->

    <section>
        <div class="container">
            <div class="row">
{{--                @include('components.sidebar')--}}

                <div class="col-sm-12 padding-right">
                    <!--features_items-->
{{--                    @include('home.components.feature_product')--}}

                    <!--/category-tab-->
                    @include('home.components.category_tab')


                </div>
            </div>
        </div>
    </section>

@endsection
