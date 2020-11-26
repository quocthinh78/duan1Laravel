@extends('layouts.masterCart')

@section('cart')       
@if(Session::has('Cart') != null)
<section id="cart_items">
    <div class="container cart row">
        <h3 class=" col-md-9 cart-title ml-0 mb-3">Giỏ hàng</h3>
        <div class="col-md-9">
            <div class="row">
                @foreach(Session::get('Cart')->products as $item)
                <div class="col-md-12 box pr-0">
                    <div class="row">
                        <div class="col-sm-12 shadow-sm group">
                            <h4 class="title mb-3">HiTech Solution</h4>
                            <div class=row>
                                <div class="col-sm-7">
                                    <div class="d-flex product">
                                    <img src="/images/{{$item['productInfo']->image}}" alt="">
                                        <div class="descr ml-4">
                                            <p class="name">{{$item['productInfo']->name}}</p>
                                            <div class="event">
                                            <p class="delete"><a href="/delete-cart/{{$item['productInfo']->id}}">Xoá</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 offset-2">
                                <p class="price">{{number_format($item['productInfo']->price)}}<span>đ</span></p>
                                    <p class="quanty">Số lượng: <span>{{$item['quanty']}}</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="col-md-3  no-gutters totals">
            <div class="row mr-3">
                <div class="col-md-12 box-right">
                    <div class="box-total-yet d-flex justify-content-around">
                        <p class="title-total-yet">Số lượng</p>
                    <p class="quanty">{{Session::get('Cart')->totalQuanty}}</p>
                    </div>
                </div>
                <div class="col-md-12 box-right mt-2">
                    <div class="box-total-yet d-flex justify-content-around">
                        <p class="title-total-yet">Tổng tiền</p>
                    <p class="total-yet">{{number_format(Session::get('Cart')->totalPrice)}}<u>đ</u></p>
                    </div>
                </div>
                <div class="col-md-12 box-rights">
                    <a href="">Đặt hàng</a>
                </div>
            </div>
        </div>
    </div>
</section> <!--/#cart_items-->
@endif
@endsection

<style>
    #cart_items{
        background-color : #f4f4f4;
        padding: 70px 0 200px;
        margin-top:50px;
    }
    #cart_items div.product img {
        width : 120px;
        height : 140px;
    }
    #cart_items div.cart .group {
        background-color : #fff;
        margin-bottom : 18px;
        padding : 17px 22px;
        border-radius: 3px;
    }
    #cart_items h4.title { 
        font-size : 16px;
        font-weight : 600;
    }
    #cart_items h3.cart-title {
        font-size : 20px;
        font-weight : 400;
    }
    #cart_items p.delete {
        font-size : 14px ;
        text-decoration: none !important;
    }
    #cart_items div.box-right {
        margin-left: 35px;
        background: #fff;
        padding : 20px 0px 0;
    }
    #cart_items p.quanty {
        font-size: 14px;
    }
    #cart_items p.total-yet {
        color : red;
    }
    #cart_items p.total-yet  {
        font-size: 23px;
    }
    #cart_items div.box-rights {
        margin-left: 21px;
        margin-top : 27px;
        
    }
    #cart_items div.box-rights  a{
        text-decoration : none !important;
        color : #fff;
        padding : 10px 30px;
        background: rgb(255, 66, 78);
        border-radius : 4px;
    }
    #cart_items p.quanty {
        color :#56669f;
    }
    
</style>