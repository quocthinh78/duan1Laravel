@extends('layouts.masterDetail')

@section('title', 'Detail')
{{-- heroMenu --}}
@section('detail')
<section id="works">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="works-title">
                    <h1>Chi tiết sản phẩm</h1>
                    <span class="st-border"></span>
                </div>
            </div>
            <div class="col-md-4 offset-md-1">
                <img class="image-detail" src="/images/{{$book->image}}" alt="">
            </div>
            <div class="col-md-6 offset-md-1">
            <h3 class="mb-4">{{$book->name}}</h3>
            <h3 style="color:red; font-size:20px;">{{number_format($book->price)}}<span>đ</span></h3>
            <p class="author"><span>Tác giả: </span>{{$authorOne->name}}</p>
            <p class="smallDes">{{$book->smallDes}}</p>
            <p class="intro">{{$book->intro}}</p>
            <p class="review">{{$book->review}}</p>
            <a class="add-cart" href="/add-cart/{{$book->id}}">Chọn mua </a>
            </div>
        </div>
    </div>
</section>
@endsection

