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


    <section>
        <div class="container">
            <div class="row">
{{--                @include('components.sidebar')--}}

                <div class="col-sm-12 ">
                    <div class="features_items"><!--features_items-->
                        <h2 class="title text-center">Danh Sách Sản Phẩm</h2>

                        @foreach($products as $product)

                        <div class="col-sm-3">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center" style="height: 400px">
                                        <img src="{{  config('app.base_url') . $product->feature_image_path }}" alt="" />
                                        <h2>{{$product->price}}</h2>
                                        <p>{{$product->name}}</p>
                                        <a href="{{route('product.product_detail',['id' => $product->id])}}" class="btn btn-default add-to-cart"><i class="fa "></i>Xem chi tiết</a>
                                    </div>
{{--                                    <div class="product-overlay">--}}
{{--                                        <div class="overlay-content">--}}
{{--                                            <h2>{{$product->price}}</h2>--}}
{{--                                            <p>{{$product->name}}</p>--}}
{{--                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                </div>
{{--                                <div class="choose">--}}
{{--                                    <ul class="nav nav-pills nav-justified">--}}
{{--                                        <li><a href=""><i class="fa fa-plus-square"></i>Add to wishlist</a></li>--}}
{{--                                        <li><a href=""><i class="fa fa-plus-square"></i>Add to compare</a></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
                            </div>
                        </div>

                        @endforeach

                        {{ $products->links() }}
                    </div><!--features_items-->
                </div>
            </div>
        </div>
    </section>
@endsection







