@extends('master.admin')
@section('title','Danh mục')
@section('main')


<table class="table table-hover">
    <thead>
        <tr>
            <th>Id</th>
            <th>Tên danh mục</th>
            <th>Trạng thái</th>
        </tr>
    </thead>
    <tbody>
        @foreach($cats as $cat)
        <tr>
            <td>{{$cat->id}}</td>
            <td>{{$cat->name}}</td>
            <td>{{$cat->status==1 ? 'Hiển thị':'Ẩn'}}</td>
        </tr>
        @endforeach
    </tbody>
</table>


@stop()
