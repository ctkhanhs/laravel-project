@extends('master.site')
@section('content')

<div id="content">
    <div class="breadcrumb">
        <div class="container">
            <h2>Order History</h2>
            <ul>
                <li>Home</li>
                <li>Shop</li>
                <li class="active">Order History</li>
            </ul>
        </div>
    </div>
    <div class="wishlist">
        <div class="container">
            <div class="wishlist__table">
                <div class="wishlist__table__wrapper">
                    <table>
                        <colgroup>
                            <col style="width: 40%" />
                            <col style="width: 20%" />
                            <col style="width: 20%" />
                            <col style="width: 20%" />
                        </colgroup>
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Order Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orders as $od)

                            <tr>
                                <td>{{$od->name}}</td>
                                <td>{{$od->email}}</td>
                                <td>{{$od->phone}}</td>
                                <td>{{$od->address}}</td>
                                <td>{{$od->created_at}}</td>
                                <td><a class="btn -dark" href="{{route('home.order_details',$od->id)}}">Detail</a></td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="instagram-two">
        <div class="instagram-two-slider">
            <a class="slider-item" href="https://www.instagram.com/"><img src="{{url('public/images')}}/1.png" alt="Instagram image" /></a>
            <a class="slider-item" href="https://www.instagram.com/"><img src="{{url('public/images')}}/2.png" alt="Instagram image" /></a>
            <a class="slider-item" href="https://www.instagram.com/"><img src="{{url('public/images')}}/3.png" alt="Instagram image" /></a>
            <a class="slider-item" href="https://www.instagram.com/"><img src="{{url('public/images')}}/4.png" alt="Instagram image" /></a>
            <a class="slider-item" href="https://www.instagram.com/"><img src="{{url('public/images')}}/5.png" alt="Instagram image" /></a>
            <a class="slider-item" href="https://www.instagram.com/"><img src="{{url('public/images')}}/6.png" alt="Instagram image" /></a>
        </div>
    </div>


    @stop()