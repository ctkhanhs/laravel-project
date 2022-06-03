@extends('master.site')
@section('content')

<h2 class="text-center">Checkout</h2>
<hr>


<div class="row">
    <div class="col-md-4">

        <form action="" method="POST" role="form">
            @csrf
            <div class="form-group">
                <label for="">Họ và Tên</label>
                <input type="text" class="form-control" name="name" placeholder="Input field">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" name="email" placeholder="Input field">
            </div>
            <div class="form-group">
                <label for="">Số điện thoại</label>
                <input type="text" class="form-control" name="phone" placeholder="Input field">
            </div>
            <div class="form-group">
                <label for="">Địa chỉ</label>
                <input type="text" class="form-control" name="address" placeholder="Input field">
            </div>




            <button type="submit" class="btn btn-primary">Submit</button>
        </form>


    </div>
    <div class="col-md-8">
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
                <?php $n = 1;
                $tt=0; ?>
                @foreach($carts as $item)
                <tr>
                    <td>{{$n}}</td>
                    <td>
                        <img src="{{url('public/uploads/'.$item->image)}}" width="60">
                    </td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->price}}</td>
                    <td>{{$item->quantity}}</td>
                    <td>{{$item->quantity*$item->price}}</td>
                </tr>
                <?php $n++;
                $tt += $item->quantity * $item->price;
                ?>
                @endforeach
            </tbody>
        </table>
        <h3 class="float-right">Tổng tiền: {{$total_price}} </h3>
    </div>
</div>

@stop()