@extends('master.site')
@section('content')
    <div class="container">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($accounts as $acc)
            <tr>
                <td>{{$acc->id}}</td>
                <td>{{$acc->name}}</td>
                <td>{{$acc->email}}</td>
                <td>{{$acc->phone}}</td>
                <td>{{$acc->address}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
@stop()

    



