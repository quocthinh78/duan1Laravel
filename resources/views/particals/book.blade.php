{{-- <form>
    <input type="text" onkeyup="showUser(this.value)">
</form> --}}
<br>
<section id="service">
    <div class="container">
        <div class="row">

            <div class="col-md-9 col-3">
                <div class="section-title">
                    <h1>Sách chọn lọc</h1>
                    <span class="st-border"></span>
                </div>
            </div>
            <div class="box col-md-3 col-3" >
                <div class="container-1">
                    <span class="icon"><i class="fa fa-search"></i></span>
                    <input type="text" id="search" placeholder="Search..." />
                </div>
              </div>
        </div>
        <div class="row" id="txtHint">
            @foreach ($book as $book)
            <div class="box-product col-md-2 col-sm-3 col-6 position-relative">
                <a href="/cuon-sach/{{$book->name}}" class="streched-link">
                    <div class="product ">
                        <div class="d-flex box-image">
                            <div class="align-self-center">
                                <img class="image" src="/images/{{$book->image}}" alt="">
                            </div>
                        </div>
                        <div class="product-body">
                            <p class="name">{{$book->name}}</p>
                            <div class="d-flex">
                                <span>Giá: </span>
                                <p class="price ml-1">{{number_format($book->price)}}đ</p>
                            </div>
                        </div>
                        <span class="note">{{$book->brand}}</span>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>

</section>