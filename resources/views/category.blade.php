@extends('master.site')
@section('content')

    <h1 class="text-center">Category</h1>
    <div class="container">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cats as $model)
            <tr>
                <td>{{$model->id}}</td>
                <td>{{$model->name}}</td>
                <td>{{$model->status==1 ? 'Hiển thị' : 'Ẩn'}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>

@stop()


    



