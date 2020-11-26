@extends('layouts.masterCategory')

@section('title', 'Category')
{{-- heroMenu --}}
@section('book')
<section id="service" style="margin-top:70px !important;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                <h1>{{$cat_title->name}}</h1>
                    <span class="st-border"></span>
                </div>
            </div>
            @foreach ($book as $book)
            <div class="box-product col-md-2 col-sm-3 col-6 position-relative">
                <a href="/cuon-sach/{{$book->name}}" >
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
                                <p class="price ml-1">{{$book->price}}đ</p>
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
@endsection