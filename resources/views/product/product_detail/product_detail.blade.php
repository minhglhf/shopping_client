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

                <!--product-details-->
                <div class="col-sm-12 padding-right">
                    <div class="product-details">
                        <div class="col-sm-5">
                            <div class="view-product">
                                <img src="{{  config('app.base_url') . $productItem->feature_image_path }}" alt=""/>
                                <h3>ZOOM</h3>
                            </div>
                            <div id="similar-product" class="carousel slide" data-ride="carousel">

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">

                                    @foreach($productImages as $key => $productImage)
                                        <div class="item {{ $key==0 ? 'active' : '' }}">
                                            <a href=""><img
                                                    src="{{  config('app.base_url') . $productImage->image_path }}"
                                                    alt=""></a>
                                        </div>
                                    @endforeach

                                </div>

                                <!-- Controls -->
                                <a class="left item-control" href="#similar-product" data-slide="prev">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                                <a class="right item-control" href="#similar-product" data-slide="next">
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>

                        </div>

                        <div class="col-sm-7">
                            <div class="product-information"><!--/product-information-->
                                <img src="{{asset('Eshopper/images/product-details/new.jpg')}}" class="newarrival"
                                     alt=""/>
                                <h2>{{ $productItem->name }}</h2>
                                <p>Product_id: {{$productItem->id}}</p>
                                <img src="{{asset('Eshopper/images/product-details/rating.png')}}" alt=""/>
                                <br>
                                <span>
									<span>{{ $productItem->price }}</span>
                                    <br>
									<label>Quantity:</label>
									<input type="text" value="3"/>
                                    <br>
                                    <br>
                                    <br>
									<button type="button" class="btn btn-fefault cart">
										<i class="fa fa-shopping-cart"></i>
										Add to cart
									</button>
								</span>
                            </div><!--/product-information-->
                        </div>

                        <div class="col-sm-5">
                            <div class="category-tab shop-details-tab">
                                <div class="tab-content">
                                    <div class="tab-pane fade active in" id="details">
                                        <div >
                                            <div class="product-image-wrapper">
                                                <div class="single-products">
                                                    <div class="productinfo text-center">
                                                        {!! $productItem->content !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>


@endsection


