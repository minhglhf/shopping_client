
    <header id="header"><!--header-->
        <div class="header_top"><!--header_top-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li><a href="#"><i class="fa fa-phone"></i>{{getConfigValueFromSetting('phone_contact')}}</a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i>{{getConfigValueFromSetting('email_contact')}}</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="{{getConfigValueFromSetting('facebook_link')}}"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="{{getConfigValueFromSetting('twitter_link')}}"><i class="fa fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header_top-->

        <div class="header-middle"><!--header-middle-->
            <div class="container">
                <div class="row" style="background-color: #ce0707;">
                    <div class="col-sm-4">
                        <div class="logo pull-left" >
                            <a href="{{route('home')}}"><img src="{{asset('/eshopper/images/home/anphatpc.png')}}" alt=""/></a>
                        </div>

                    </div>
                    <div class="col-sm-8" >
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav" >
                                <li><a href="#" style="background-color: #ce0707; color: yellow;"><i class="fa fa-user " ></i> Account</a></li>
                                <li><a href="#" style="background-color: #ce0707; color: yellow;"><i class="fa fa-star"></i> Wishlist</a></li>
                                <li><a href="#" style="background-color: #ce0707; color: yellow;"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                                <li><a href="#" style="background-color: #ce0707; color: yellow;"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                                <li><a href="#" style="background-color: #ce0707; color: yellow;"><i class="fa fa-lock"></i> Login</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-middle-->

        <div class="header-bottom"><!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                    data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        @include('home.components.main_menu')


                    </div>
                    {{--                <div class="col-sm-3">--}}
                    {{--                    <div class="search_box pull-right">--}}
                    {{--                        <input type="text" placeholder="Search"/>--}}
                    {{--                    </div>--}}
                    {{--                </div>--}}
                </div>
            </div>
        </div><!--/header-bottom-->
    </header><!--/header-->

