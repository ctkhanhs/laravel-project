@extends('master.site')
@section('content')

<h2 class="text-center">Cart</h2>
<hr>

@if(count($carts))
<table class="table table-hover">
<thead>
    <tr>
        <th>STT</th>
        <th>Ảnh</th>
        <th>Tên sản phẩm</th>
        <th>Giá</th>
        <th>Số lượng</th>
        <th>Thành tiền</th>
    </tr>
</thead>
<tbody>
    <?php $n=1;?>
    @foreach($carts as $item)
    <tr>
        <td>{{$n}}</td>
        <td>
            <img src="{{url('public/uploads/'.$item->image)}}" width="60">
        </td>
        <td>{{$item->name}}</td>
        <td>{{$item->price}}</td>
        <td>
            
            <form action="{{route('cart.update',$item->id)}}" method="GET" class = "form-inline" role="form">
            
                <div class="form-group">
                    <input class="form-control" name="quantity" value="{{$item->quantity}}">
                </div>
            
                
            
                <button type="submit" class="btn btn-success btn-xs">Cập nhập</button>
            </form>
            
        </td>
        <td>{{$item->quantity*$item->price}}</td>
        <td>
            <a href="{{route('cart.delete',$item->id)}}" class="btn btn-danger"><i class="bi bi-trash3-fill"></i></a>
        </td>
    </tr>
    <?php $n++;?>
    @endforeach
</tbody>
</table>
<a href="{{route('cart.clear')}}" class="btn btn-danger">Xóa tất cả</a>
<a href="{{route('cart.checkout')}}" class="btn btn-success">Đặt hàng</a>
<h3 class="float-right">Tổng tiền: {{$total_price}} </h3>

@else

<div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>Giỏ hàng đang trống</strong>
</div>

@endif



@stop()



