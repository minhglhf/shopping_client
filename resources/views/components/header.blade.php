
    <header id="header"><!--header-->
{{--        <div class="header_top"><!--header_top-->--}}
{{--            --}}
{{--        </div><!--/header_top-->--}}

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

