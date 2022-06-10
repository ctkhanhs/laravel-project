@extends('master.site')
@section('content')
<div class="breadcrumb">
    <div class="container">
        <h2>Order Details</h2>
        <ul>
            <li>Home</li>
            <li>Order</li>
            <li class="active">Order Details</li>
        </ul>
    </div>
</div>
<div class="shop">
    <div class="container">
        <div class="cart">
            <div class="container">
                <div class="cart__table">
                    <div class="cart__table__wrapper">
                        <table>
                            <colgroup>
                                <col style="width: 40%" />
                                <col style="width: 17%" />
                                <col style="width: 17%" />
                                <col style="width: 17%" />
                                <col style="width: 9%" />
                            </colgroup>
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($order_details as $otd)
                                <tr>
                                    <td>
                                        <div class="cart-product">
                                            <div class="cart-product__image"><img src="{{url('public/uploads/'.$otd->pro->image)}}" alt="Product image" />
                                            </div>
                                            <div class="cart-product__content">
                                                <a href="{{ route('home.product',['product'=>$otd->pro->id,'slug'=>Str::slug($otd->pro->name)]) }}">{{$otd->pro->name}}</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{$otd->price}}</td>
                                    <td>{{$otd->quantity}}</td>
                                    <td>{{$otd->quantity*$otd->price}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="cart__total">
                    <div class="col-12 col-md-4">
                        <div class="cart__total__content">
                            <h3>Total</h3>
                        </div>
                    </div>
                </div>
            </div>
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