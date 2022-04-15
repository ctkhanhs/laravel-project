

@extends('master.site')
@section('content')
<div class="container">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pros as $pro)
                <tr>
                    <td>{{$pro->id}}</td>
                    <td>{{$pro->name}}</td>
                    <td>{{$pro->price}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop()

    




