@extends('master.admin')
@section('title','Sửa danh mục')
@section('main')

<form action="{{route('product.update',$product->id)}}" method="POST" enctype="multipart/form-data">
    @csrf @method('PUT')
    <div class="form-group">
        <label for="">Danh mục sản phẩm</label>
        <select name="category_id" class="form-control">
            <option value="">Chọn danh mục</option>
            @foreach($cats as $cat)
            <option value="{{$cat->id}}">{{$cat->name}}</option>
            @endforeach
            

        </select>

    </div>

    <div class="form-group">
        <label for="">Tên sản phẩm</label>
        <input type="text" class="form-control" name="name" value="{{$product->name}}">
        @error('name')
        <small class="help-block">{{$message}}</small>
        @enderror
    </div>
    <div class="form-group">
        <label for="">Giá sản phẩm</label>
        <input type="text" class="form-control" name="price" value="{{$product->price}}">
    </div>
    <div class="form-group">
        <label for="">Giá KM</label>
        <input type="text" class="form-control" name="sale_price" value="{{$product->sale_price}}">
    </div>
    <div class="form-group">
        <label for="">Ảnh</label>
        <input type="file" class="form-control" name="upload" value="../public/uploads/{{$product->image}}">
        @error('upload')
        <small class="help-block">{{$message}}</small>
        @enderror
    </div>



    <button type="submit" class="btn btn-primary">Thêm mới</button>
</form>


@stop()