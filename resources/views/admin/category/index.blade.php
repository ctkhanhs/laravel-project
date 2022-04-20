@extends('master.admin')
@section('title','Danh mục')
@section('main')

<form action="" method="GET" class="form-inline" role="form">

    <div class="form-group">
        <label class="sr-only" for="">label</label>
        <input type="text" class="form-control" name="key" placeholder="Input field">
    </div>



    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
    <a href="{{route('category.create')}}" class="btn btn-success"><i class="fa fa-plus"></i> Thêm mới</a>
</form>


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
            <td>

                <form action="{{ route('category.delete',$cat->id) }}" method="POST">
                    @csrf @method('DELETE')
                    <a href="" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Bạn có muốn xóa không ?')"><i class="fa fa-trash"></i></button>


                </form>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</hr>
{{$cats->appends(request()->all())->links()}}


@stop()