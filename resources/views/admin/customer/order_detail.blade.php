@extends('master.admin')
@section('title','Danh sách sản phẩm')
@section('main')

<form action="" method="GET" class="form-inline" role="form">

    <div class="form-group">
        <label class="sr-only" for="">label</label>
        <input type="text" class="form-control" name="key" placeholder="Input field">
    </div>



    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
    <a href="{{route('product.create')}}" class="btn btn-success"><i class="fa fa-plus"></i> Thêm mới</a>
</form>


<table class="table table-hover">
    <thead>
        <tr>
            <th>Id</th>
            <th>Ảnh</th>
            <th>Tên sản phẩm</th>
            <th>Giá/Giá KM</th>
            <th>Số lượng</th>
            <th>Tổng tiền</th>
        </tr>
    </thead>
    <tbody>
        <?php $n=1;?>
        @foreach($order_details as $otd)
        <tr>
            <td>{{$n}}</td>
            <td>
            <img src="{{url('public/uploads/'.$otd->pro->image)}}" width="60">
            </td>
            <td>{{$otd->pro->name}}</td>
            <td>{{$otd->pro->price}}/{{$otd->pro->sale_price}}</td>
            <td>{{$otd->quantity}}</td>
            <td>{{$otd->price}}</td>
        </tr>
        <?php $n++;?>
        @endforeach
    </tbody>
</table>
</hr>
{{$order_details->appends(request()->all())->links()}}

@stop()