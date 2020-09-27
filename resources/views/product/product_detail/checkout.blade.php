@extends('layouts.master')

@section('title')
    home_page
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('home/home.css')}}">
@endsection

@section('content')
    <section id="cart_items">
        <div class="container">


            <div class="shopper-informations">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="shopper-info">
                            <p>Thông tin khách hàng</p>
                            <form>
                                <input type="text" placeholder="Họ tên">
                                <input type="text" placeholder="email">
                                <input type="text" placeholder="số điện thoại">
                                <select style="margin-bottom: 20px ">
                                    <option>-- Thành phố --</option>
                                    <option>Hà Nội</option>
                                    <option>Hồ Chí Minh</option>
                                    <option>Đà Nẵng</option>
                                    <option>Hải Phòng</option>
                                    <option>Đà Lạt</option>
                                    <option>Nha Trang</option>
                                </select>
                                <textarea name="message" placeholder="Địa chỉ chi tiết" rows="5"
                                          style="margin-bottom: 20px "></textarea>


                                <textarea name="message" placeholder="Thêm ghi chú" rows="8"></textarea>

                                <h3 style="color: red;">Hình thức thanh toán</h3>
                                <br>
                                <br>
                                <div class="payment-options">

                                    <input type="radio" name="payment">COD
                                    <br>
                                    <input type="radio" name="payment">Thanh toán bằng thẻ visa và master
                                    <br>
                                    <input type="radio" name="payment">Chuyển khoản
                                </div>

                                <a class="" href="{{ route('home') }}">
                                    <button class="send_checkout"
                                        style="align-items: center; background-color: red; border: 1px solid black; color: white; font-size: 30px">
                                        Gửi đơn hàng
                                    </button>
                                </a>
                            </form>

                        </div>
                    </div>


                </div>
            </div>

        </div>
    </section> <!--/#cart_items-->

    <script>
        function checkout(){
            alert('gửi thành công');
        }

        $(function () {
            $(document).on('click','.send_checkout', checkout);

        });
    </script>
@endsection

@section('js')
    <script src="{{ asset('home/home.js') }}"></script>
@endsection
