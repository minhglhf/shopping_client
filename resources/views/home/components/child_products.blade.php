<?php
use Illuminate\Support\Facades\Session;

?>
<?php $number = 1 ?>
@foreach($category->products as $productItemTab)
    <?php $session = Session::get('counter'); ?>
    @if(\Illuminate\Support\Facades\Session::get('counter') <= 6)
        {{\Illuminate\Support\Facades\Session::put('counter', 1+$session)}}
        <div class="col-sm-2">
            <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center" style="height: 350px">
                        <img
                            src="{{  config('app.base_url') . $productItemTab->feature_image_path }}"
                            alt=""/>
                        <h2>${{$productItemTab->price}}</h2>
                        <p>{{$productItemTab->name}}</p>

                    </div>
                    <a style="margin-left: 25%;" href="{{route('product.product_detail',['id' => $productItemTab->id])}}" class=" text-center btn btn-default add-to-cart"><i
                            class="fa "></i>xem chi tiêt</a>
                </div>
            </div>
        </div>

    @endif
@endforeach



