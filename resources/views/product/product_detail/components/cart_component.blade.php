<div class="" data-url="{{ route('deleteCart') }}">
    <div class="container">
        <div class="row">
            <table class="table update_cart_url" data-url="{{ route('updateCart') }}">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Hình ảnh</th>
                    <th scope="col">Tên sản phẩm</th>
                    <th scope="col">Giá tiền</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">sub total</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>

                @php
                    $total = 0;
                @endphp

                @if(is_array($carts) || $carts instanceof Traversable)
                    @foreach($carts as $id => $cart)
                        @php
                            $total +=  $cart['quantity'] * $cart['price'];
                        @endphp

                        <tr>
                            <th scope="row">{{ $id }}</th>
                            <td><img src="{{  config('app.base_url') . $cart['feature_image_path']}}" alt=""
                                     style="width: 150px; height: 150px"/></td>
                            <td>{{ $cart['name'] }}</td>
                            <td>{{ number_format($cart['price']) }} VND</td>
                            <td><input class="quantity" type="number" value="{{ $cart['quantity'] }}" min="1"></td>
                            <td>{{ number_format($cart['quantity'] * $cart['price']) }} VND</td>
                            <td><a href="" data-id="{{ $id }}" class="btn  cart_update">update</a></td>
                            <td><a href="" data-id="{{ $id }}" class="btn  cart_delete">delete</a></td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>

        </div>

        <div class="row" style="float: right; background-color: gainsboro">
            <div class="col-md-12">
                <h2>Total= {{ number_format($total) }} VND</h2>
            </div>

            <div class="col-md-6">
                <h3><a href="{{ route('home') }}">Continue Shopping...</a></h3>
            </div>

            <div class="col-md-6">
                <h2><a href="{{ route('checkout') }}" class="btn btn-danger check_out">Thanh toán</a></h2>
            </div>
        </div>


    </div>
</div>
