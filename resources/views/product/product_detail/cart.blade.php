<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('eshopper/css/bootstrap.min.css')}}" rel="stylesheet">

    <title>Show Cart</title>
    <style>
        th {
            text-align: center;
        }
        td {
            height: 150px;
            vertical-align: center;
        }
    </style>
</head>
<body>

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



</body>
</html>
