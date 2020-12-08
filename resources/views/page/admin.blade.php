@extends('layouts.masterAdmin'); @section('title', 'Admin') 
{{-- admin --}}
@section('admin') 
@if($table == 'tacgia')
<div class="container">
    <ul class="nav nav-tabs " id="myTab" role="tablist" style="margin-top:100px;">
        <li class="nav-item">
            <a class="nav-link " id="cat-tab"  href="/admin/theloai/showAll" role="tab" aria-controls="cat" aria-selected="true">Thể loại</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " id="book-tab"  href="/admin/cuonsach/showAll" role="tab">Tác phẩm</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" id="author-tab"  href="/admin/tacgia/showAll" role="tab" >Nhà văn</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " id="author-tab"  href="/admin/donhang/showAll" role="tab" >Đơn hàng</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div style="padding-bottom : 30px;" class="tab-pane fade show active" id="author" role="tabpanel" aria-labelledby="author-tab">
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Hình ảnh</th>
                        <th scope="col">Nhà văn</th>
                        <th scope="col">Xoá</th>
                        <th scope="col">Sửa</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($author as $aut)
                    <tr>
                        <th scope="row">{{$aut->id}}</th>
                        <td><img src="/images/{{$aut->image}}" alt=""></td>
                        <td>{{$aut->name}}</td>
                        <td><button class="btn btn-success">Delete</button></td>
                        <td><button class="btn btn-danger">Update</button></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                {!! $author->links() !!}
            </div>
        </div>
    </div>
</div>
@elseif($table=='cuonsach')
<div class="container">
    <ul class="nav nav-tabs " id="myTab" role="tablist" style="margin-top:100px;">
        <li class="nav-item">
            <a class="nav-link " id="cat-tab"  href="/admin/theloai/showAll" role="tab" aria-controls="cat" aria-selected="true">Thể loại</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" id="book-tab"  href="/admin/cuonsach/showAll" role="tab">Tác phẩm</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " id="author-tab"  href="/admin/tacgia/showAll" role="tab" >Nhà văn</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " id="author-tab"  href="/admin/donhang/showAll" role="tab" >Đơn hàng</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div style="padding-bottom : 30px;" class="tab-pane fade show active" id="book" role="tabpanel" aria-labelledby="book-tab">
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Hình ảnh</th>
                        <th scope="col">Tên</th>
                        <th scope="col" style="text-align:center;">Trạng thái</th>
                        <th scope="col">Gía</th>
                        <th scope="col">Sửa</th>
                        <th scope="col">Xoá</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($book as $books)
                    <tr>
                        <th scope="row">{{$books->id}}</th>
                        <td><img src="/images/{{$books->image}}" alt=""></td>
                        <td>{{$books->name}}</td>
                        <td style="text-align:center;"><input type="radio" id="hi" class="mr-2" {{$books->status == 1 ? 'checked' : ''}} ></td>
                        <td>{{$books->price}}</td>
                        <td><a href="/form/cuonsach/{{$books->id}}/edit" class="btn btn-success">Sửa</a></td>
                        <td><a href="/form/cuonsach/{{$books->id}}/delete" class="btn btn-danger">Xóa</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <a style="margin-top:-60px;" class="btn btn-success" href="/form/cuonsach/create">Thêm</a>
            <div class="d-flex justify-content-center">
                {!! $book->links() !!}
            </div>
        </div>
    </div>
</div>
@elseif($table=='theloai')
<div class="container">
    <ul class="nav nav-tabs " id="myTab" role="tablist" style="margin-top:100px;">
        <li class="nav-item">
            <a class="nav-link active" id="cat-tab"  href="/admin/theloai/showAll" role="tab" aria-controls="cat" aria-selected="true">Thể loại</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " id="book-tab"  href="/admin/cuonsach/showAll" role="tab">Tác phẩm</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " id="author-tab"  href="/admin/tacgia/showAll" role="tab" >Nhà văn</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " id="author-tab"  href="/admin/donhang/showAll" role="tab" >Đơn hàng</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div style="padding-bottom : 30px;" class="tab-pane fade show active" role="tabpanel" aria-labelledby="book-tab">
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Tên</th>
                        <th scope="col">Xoá</th>
                        <th scope="col">Sửa</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($category as $cat)
                    <tr>
                        <th scope="row">{{$cat->id}}</th>
                        <td>{{$cat->name}}</td>
                        <td><a href="/form/theloai/{{$cat->id}}/delete" class="btn btn-danger">Xoá</a></td>
                        <td><a href="/form/theloai/{{$cat->id}}/edit" class="btn btn-success">Sửa</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                {!! $category->links() !!}
            </div>
            <a style="margin-top:-60px;" class="btn btn-success" href="/form/theloai/create">Thêm</a>
        </div>
    </div>
</div>
@elseif($table=='donhang')
<div class="container">
    <ul class="nav nav-tabs " id="myTab" role="tablist" style="margin-top:100px;">
        <li class="nav-item">
            <a class="nav-link active" id="cat-tab"  href="/admin/theloai/showAll" role="tab" aria-controls="cat" aria-selected="true">Thể loại</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " id="book-tab"  href="/admin/cuonsach/showAll" role="tab">Tác phẩm</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " id="author-tab"  href="/admin/tacgia/showAll" role="tab" >Nhà văn</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " id="bill-tab"  href="/admin/donhang/showAll" role="tab" >Đơn hàng</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div style="padding-bottom : 30px;" class="tab-pane fade show active" id="book" role="tabpanel" aria-labelledby="book-tab">
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Tên</th>
                        <th scope="col">Email</th>
                        <th scope="col">Số sản phẩm</th>
                        <th scope="col">Tổng sản phẩm</th>
                        <th scope="col">Tổng tiền</th>
                        <th>Trạng thái</th>
                        <th scope="col">Chi tiết đơn hàng</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bill as $bills)
                    <tr>
                        <th scope="row">{{$bills->id}}</th>
                        <td>{{$bills->ten}}</td>
                        <td>{{$bills->email}}</td>
                        <td>{{$bills->tongsoluong}}</td>
                        <td>{{$bills->loai}}</td>
                        <td>{{$bills->tonggia}}</td>
                        <td>{{$bills->status}}</td>
                        <td><a class="btn btn-success" href="/showCarts/{{$bills->id}}">Xem</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                {!! $bill->links() !!}
            </div>
        </div>
    </div>
</div>
@endif

@endsection
<style>
    svg {
        width: 30px;
        height: 30px;
    }
    
    nav.flex>div>a {
        display: none;
    }
    
    nav>div.flex span {
        display: none;
    }
    
    nav>div.hidden {
        margin-top: -50px;
    }
    
    nav span.relative a {
        text-decoration: none;
    }
    
    nav span.relative span {
        margin-right: -3px;
        color: black;
    }
</style>

{{-- add category  --}}
@section('addCat')
<div style="padding : 40px 100px">
<p><a class="btn btn-primary" href="{{ url('/admin/theloai/showAll') }}">Về danh sách</a></p>
<div class="col-xs-4 col-xs-offset-4">
	<h4>Thêm Thể Loại</h4>
	<form action="{{url('/form/theloai/add')}}" method="get">
		<input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}"/>
		<div class="form-group">
			<input type="text" class="form-control" id="tenhocsinh" name="category" placeholder="Thể loại" maxlength="255" required />
		</div>
		<button type="submit" class="btn btn-primary">Thêm</button>
	</form>
</div>
</div
@endsection
@section('updateCat')
<div style="padding : 40px 100px">
<p><a class="btn btn-primary" href="{{ url('/admin/theloai/showAll') }}">Về danh sách</a></p>
<div class="col-xs-4 col-xs-offset-4">
    <h4>Sửa Thể Loại</h4>
    <hr>
	<form action="{{ url('/form/theloai/update') }}" method="get">
		<input type="hidden" id="_token" name="_token" value="{!! csrf_token() !!}" />
    <input type="hidden" id="id" name="id" value="{{$step == 'add' ? "" : $data->id}}" />
		<div class="form-group">
		<label>Tên thể loại</label>
        <input type="text" class="form-control" value="{{$step == 'add' ? "" : $data->name}}" id="name" name="name" placeholder="Tên thể loại" maxlength="255"  required />
		</div>
        <button type="submit" class="btn btn-primary">Lưu lại</button>
	</form>
</div>
</div>
@endsection

{{-- add book --}}
