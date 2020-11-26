<div class="container cart row">
    <h3 class=" col-md-9 cart-title ml-0 mb-3">Giỏ hàng</h3>
    <div class="col-md-9">
        <div class="row">
            @foreach($newCart->products as $item)
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
                <p class="quanty">{{$newCart->totalQuanty}}</p>
                </div>
            </div>
            <div class="col-md-12 box-right mt-2">
                <div class="box-total-yet d-flex justify-content-around">
                    <p class="title-total-yet">Tổng tiền</p>
                <p class="total-yet">{{number_format($newCart->totalPrice)}}<u>đ</u></p>
                </div>
            </div>
            <div class="col-md-12 box-rights">
                <a href="">Đặt hàng</a>
            </div>
        </div>
    </div>
</div>