@extends('master.admin')
@section('title','Danh sách khách hàng')
@section('main')

<form action="" method="GET" class="form-inline" role="form">

    <div class="form-group">
        <label class="sr-only" for="">label</label>
        <input type="text" class="form-control" name="key" placeholder="Input field">
    </div>



    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
</form>


<table class="table table-hover">
    <thead>
        <tr>
            <th>Id</th>
            <th>Họ và Tên</th>
            <th>Email</th>
            <th>Sđt</th>
            <th>Địa chỉ</th>
        </tr>
    </thead>
    <tbody>
        @foreach($customer as $cus)
        <tr>
            <td>{{$cus->id}}</td>
            <td>{{$cus->name}}</td>
            <td>{{$cus->email}}</td>
            <td>{{$cus->phone}}</td>
            <td>{{$cus->address}}</td>
            <td>

                <a href="{{route('order_id',$cus->id)}}" class="btn btn-primary btn-sm">Đơn hàng</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</hr>
{{$customer->appends(request()->all())->links()}}


@stop()