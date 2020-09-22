@extends('layouts.master')

@section('title')
    home_page
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('home/home.css')}}">
@endsection




@section('content')
    <script>
        function imageZoom(imgID, resultID) {
            var img, lens, result, cx, cy;
            img = document.getElementById(imgID);
            result = document.getElementById(resultID);
            /*create lens:*/
            lens = document.createElement("DIV");
            lens.setAttribute("class", "img-zoom-lens");
            /*insert lens:*/
            img.parentElement.insertBefore(lens, img);
            /*calculate the ratio between result DIV and lens:*/
            cx = result.offsetWidth / lens.offsetWidth;
            cy = result.offsetHeight / lens.offsetHeight;
            /*set background properties for the result DIV:*/
            result.style.backgroundImage = "url('" + img.src + "')";
            result.style.backgroundSize = (img.width * cx) + "px " + (img.height * cy) + "px";
            /*execute a function when someone moves the cursor over the image, or the lens:*/
            lens.addEventListener("mousemove", moveLens);
            img.addEventListener("mousemove", moveLens);
            /*and also for touch screens:*/
            lens.addEventListener("touchmove", moveLens);
            img.addEventListener("touchmove", moveLens);
            function moveLens(e) {
                var pos, x, y;
                /*prevent any other actions that may occur when moving over the image:*/
                e.preventDefault();
                /*get the cursor's x and y positions:*/
                pos = getCursorPos(e);
                /*calculate the position of the lens:*/
                x = pos.x - (lens.offsetWidth / 2);
                y = pos.y - (lens.offsetHeight / 2);
                /*prevent the lens from being positioned outside the image:*/
                if (x > img.width - lens.offsetWidth) {x = img.width - lens.offsetWidth;}
                if (x < 0) {x = 0;}
                if (y > img.height - lens.offsetHeight) {y = img.height - lens.offsetHeight;}
                if (y < 0) {y = 0;}
                /*set the position of the lens:*/
                lens.style.left = x + "px";
                lens.style.top = y + "px";
                /*display what the lens "sees":*/
                result.style.backgroundPosition = "-" + (x * cx) + "px -" + (y * cy) + "px";
            }
            function getCursorPos(e) {
                var a, x = 0, y = 0;
                e = e || window.event;
                /*get the x and y positions of the image:*/
                a = img.getBoundingClientRect();
                /*calculate the cursor's x and y coordinates, relative to the image:*/
                x = e.pageX - a.left;
                y = e.pageY - a.top;
                /*consider any page scrolling:*/
                x = x - window.pageXOffset;
                y = y - window.pageYOffset;
                return {x : x, y : y};
            }
        }
    </script>

    <section>
        <div class="container">
            <div class="row">

                <!--product-details-->
                <div class="col-sm-12 padding-right">
                    <div class="product-details">
                        <div class="col-sm-5">
                            <div class="view-product">
                                <div class="img-zoom-container">
                                    <img id="myimage"
                                         src="{{  config('app.base_url') . $productItem->feature_image_path }}"
                                         width="300" height="240">
                                    <div id="myresult" class="img-zoom-result"></div>
                                </div>
                                {{--                                <img src="{{  config('app.base_url') . $productItem->feature_image_path }}" alt=""/>--}}
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
                                        <div>
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

    <script>
        // Initiate zoom effect:
        imageZoom("myimage", "myresult");
    </script>
@endsection





