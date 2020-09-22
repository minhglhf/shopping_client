

<div class="category-tab"><!--category-tab-->
    @foreach($categories as $categoriesChild)
        <div class="col-sm-12" >
            <h3>{{ $categoriesChild->name }}</h3>
        </div>

        <div class="col-sm-12">
            <ul class="nav nav-tabs">

                @foreach($categoriesChild->categoryChildren as $indexCategory => $category)
                    <li class="{{ $indexCategory == 0 ? 'active' : '' }}">
                        <a href="#category_tap_{{$category->id}}" data-toggle="tab">
                            {{$category->name}}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>

        <div class="tab-content">

            @foreach($categoriesChild->categoryChildren as $indexCategoryProduct => $categoryProduct)

                <div class="tab-pane fade {{ $indexCategoryProduct == 0 ? 'active in' : '' }} "
                     id="category_tap_{{$categoryProduct->id}}">

                    @foreach($categoryProduct->products as $productItemTab)

                        <div class="col-sm-3">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="{{  config('app.base_url') . $productItemTab->feature_image_path }}"
                                             alt=""/>
                                        <h2>${{$productItemTab->price}}</h2>
                                        <p>{{$productItemTab->name}}</p>
                                        <a href="{{route('product.product_detail',['id' => $productItemTab->id])}}" class="btn btn-default add-to-cart"><i
                                                class="fa fa-shopping-cart"></i>Xem chi tiết</a>
                                    </div>

                                </div>
                            </div>
                        </div>

                    @endforeach

                </div>

            @endforeach
        </div>
    @endforeach
</div>
