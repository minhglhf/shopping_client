@extends('layouts.master')

@section('title')
    home_page
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('home/home.css')}}">
    <style>
        th {
            text-align: center;
        }
        td {
            height: 150px;
            vertical-align: center;
        }
    </style>
@endsection

@section('js')
    <script>
        function checkLogin(){
            x = '{{Auth::check()}}';

            if(x == '') {
                alert('Bạn phải đăng nhập trước');
                window.location.href = "{{ route('login')}}"
            }
            else  {
                window.location.href = "{{ route('checkout')}}"
            }
        }

        $(function () {
            $(document).on('click','.check_login', checkLogin);
        });
    </script>
    <script src="{{ asset('home/home.js') }}"></script>
@endsection


@section('content')

<div class="cart_wrapper">

@include('product.product_detail.components.cart_component');

</div>



<script src="{{asset('eshopper/js/jquery.js')}}"></script>
<script src="{{asset('eshopper/js/bootstrap.min.js')}}"></script>
<script src="{{asset('eshopper/js/jquery.scrollUp.min.js')}}"></script>
<script src="{{asset('eshopper/js/price-range.js')}}"></script>
<script src="{{asset('eshopper/js/jquery.prettyPhoto.js')}}"></script>
<script src="{{asset('eshopper/js/main.js')}}"></script>
<script>
    function cartUpdate(event){
        event.preventDefault();
        let urlUpdateCart = $('.update_cart_url').data('url');
        let id = $(this).data('id');
        let quantity = $(this).parents('tr').find('input.quantity').val();

        $.ajax({
           type: "GET",
            url: urlUpdateCart,
            data: {id: id, quantity: quantity},
            success: function (data){
                if(data.code === 200){
                    $('.cart_wrapper').html(data.cart_component);
                    alert('cập nhật thành công');
                }

            },
            error: function() {

            }
        });
    }

    function cartDelete(event){
        event.preventDefault();
        let urlDeleteCart = $('.cart').data('url');
        let id = $(this).data('id');

        $.ajax({
            type: "GET",
            url: urlDeleteCart,
            data: {id: id},
            success: function (data){
                if(data.code === 200){
                    $('.cart_wrapper').html(data.cart_component);
                    alert('cập nhật thành công');
                }

            },
            error: function() {

            }
        });
    }

    $(function () {
        $(document).on('click','.cart_update', cartUpdate);
        $(document).on('click','.cart_delete', cartDelete);
    });
</script>

@endsection
@section('js')
    <script src="{{ asset('home/home.js') }}"></script>
@endsection
