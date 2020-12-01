@extends('layouts.masterBook'); @section('title', 'Admin') 
@section('addBook')
<div style="padding : 40px 100px">
    <p><a class="btn btn-primary" href="{{ url('/admin/cuonsach/showAll') }}">Về danh sách</a></p>
    <div class="col-xs-4 col-xs-offset-4">
        <form action="{{url('/form/cuonsach/add')}}" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
            <div class="form-group">
                <label for="">Tên sách</label>
                <input type="text" class="mb-3 form-control"  name="cuonsach" placeholder="Tên sách" maxlength="255" required />
                <label  for="">Giá sách</label>
                <input type="text" class=" mb-3 form-control"  name="price" placeholder="Giá" maxlength="255" required />
                <label style="display : block" for="">Trạng thái</label>
                <input type="radio" id="hi" class="mr-2" name="status" value="1" >Hiện
                <input type="radio" id="an" class="mr-2" name="status" value="0" >Ẩn
            </div>
            <div class="form-group">
                <label  for="">Thể loại</label>
                <select  name="cat" size="1" value="9">
                @foreach($category as $cat)
                <option value="{{$cat->id}}">{{$cat->name}}</option>
                @endForeach
                  </select>
            </div>
            <div class="form-group">
                <label  for="">Tác giả</label>
                <select  name="auth">
                    @foreach($authors as $auth)
                <option value="{{$auth->id}}">{{$auth->name}}</option>
                @endForeach
                  </select>
            </div>
           
            <div class="form-group">
                <label for="">Ảnh</label>
                <input type="file" name="hinh" required="true">
            </div>
            
            <button type="submit" class="btn btn-primary">Thêm</button>
        </form>
    </div>
</div>
@endsection
@section('updateBook')
<div style="padding : 40px 100px">
    <p><a class="btn btn-primary" href="{{ url('/admin/cuonsach/showAll') }}">Về danh sách</a></p>
    <div class="col-xs-4 col-xs-offset-4">
        <form action="{{url('/form/cuonsach/update')}}" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
            <input type="hidden" id="id" name="id" value="{{$datas->id}}" />
            <div class="form-group">
                <label for="">Tên sách</label>
                <input type="text" class="mb-3 form-control" value={{$datas->review}}  name="cuonsach">
                <label  for="">Giá sách</label>
                <?php var_dump($datas); ?>
                <input type="text" class=" mb-3 form-control" value={{$datas->price}}   name="price" placeholder="Giá" maxlength="255" required />
                <label style="display : block" for="">Trạng thái</label>
                <input type="radio" id="hi" class="mr-2" name="status" value="1" {{$datas->status == 1 ? 'checked' : ''}}>Hiện
                <input type="radio" id="an" class="mr-2" name="status" value="0" {{$datas->status == 0 ? 'checked' : ''}}>Ẩn
            </div>
            <div class="form-group">
                <label  for="">Thể loại</label>
            <select  name="cat" size="1"  >
                @foreach($category as $cat)
                <option value="{{$cat->id}}" {{$cat->id ==$datas->cat_id ? 'selected' : ''}}>{{$cat->name}}</option>
                @endForeach
                  </select>
            </div>
            <div class="form-group">
                <label  for="">Tác giả</label>
                <select  name="auth" size="1" value=2>
                    @foreach($authors as $auth)
                    <option value="{{$auth->id}}" {{$auth->id ==$datas->author_id ? 'selected' : ''}}>{{$auth->name}}</option>
                    @endForeach
                  </select>
            </div>
           <div class="form-group">
            <label for="">Ảnh</label>
            <input type="file" name="hinh">
           <input type="hidden" name="imagess" value="{{$datas->image}}">
           </div>
            
            <button type="submit" class="btn btn-primary">Thêm</button>
        </form>
    </div>
</div>
@endsection