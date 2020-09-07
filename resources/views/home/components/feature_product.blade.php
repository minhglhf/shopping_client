<div class="features_items"><!--features_items-->
    <h2 class="title text-center" style="color: #ce0707">Sản Phẩm nổi bật</h2>

    @foreach($products as $product)
        <div class="tab-content">
            <div class="tab-pane fade active in">
                <div class="col-sm-3">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center" style="height: 350px">

                                <img src="{{  config('app.base_url') . $product->feature_image_path }}" alt=""/>
                                <h2>{{$product->price}} VND</h2>
                                <p>{{ $product->name }}</p>

                            </div>
                            <a style="margin-left: 25%;" href="{{route('product.product_detail',['id' => $product->id])}}" class=" text-center btn btn-default add-to-cart"><i
                                    class="fa "></i>Xem chi tiết</a>
                            {{--                    <div class="product-overlay" >--}}
                            {{--                        <div class="overlay-content">--}}
                            {{--                            <h2>{{$product->price}} VND</h2>--}}
                            {{--                            <p>{{ $product->name }}</p>--}}
                            {{--                            <a href="#" class="btn btn-default add-to-cart"><i--}}
                            {{--                                    class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                            {{--                        </div>--}}
                            {{--                    </div>--}}
                        </div>
                        {{--                <div class="choose">--}}
                        {{--                    <ul class="nav nav-pills nav-justified">--}}
                        {{--                        <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>--}}
                        {{--                        <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>--}}
                        {{--                    </ul>--}}
                        {{--                </div>--}}
                    </div>
                </div>
            </div>

        </div>


    @endforeach

</div>
