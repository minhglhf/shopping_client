<div class="col-sm-3">
    <div class="left-sidebar">
        <h2>Danh Mục Sản Phẩm</h2>
        <div class="panel-group category-products" id="accordian"><!--category-productsr-->

            @foreach($categories as $category)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordian" href="#{{$category->id}}">
                                <span class="badge pull-right">
                                    @if($category->categoryChildren->count())
                                        <i class="fa fa-plus"></i>
                                    @endif
                                </span>
                                {{$category->name}}
                            </a>
                        </h4>
                    </div>


                    <div id="{{$category->id}}" class="panel-collapse collapse">
                        <div class="panel-group category-products" id="accordian2">
                            <div class="panel-body">
                                <ul>

                                    @foreach($category->categoryChildren as $categoryChild)
                                        <div class="panel-heading">
{{--                                            <h4 class="panel-title">--}}
                                                <a data-toggle="collapse" data-parent="#accordian2"
                                                   href="#{{$categoryChild->id}}">
                                                <span class="badge pull-right">
                                                    @if($categoryChild->categoryChildren->count())
                                                        <i class="fa fa-plus"></i>
                                                    @endif
                                                </span>
                                                    {{$categoryChild->name}}
                                                </a>
{{--                                            </h4>--}}
                                        </div>

                                        <div id="{{$categoryChild->id}}" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <ul>

                                                    @foreach($categoryChild->categoryChildren as $categoryChildChild)
                                                        <li>
                                                            <a href="#{{$categoryChildChild->id}}">{{$categoryChildChild->name}} </a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>


                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>


                </div>
            @endforeach
        </div><!--/category-products-->

    </div>
</div>
