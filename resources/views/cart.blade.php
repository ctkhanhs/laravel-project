@extends('master.site')
@section('content')



<div class="breadcrumb">
    <div class="container">
        <h2>Cart</h2>
        <ul>
            <li>Home</li>
            <li>Shop</li>
            <li class="active">Cart</li>
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
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($cart->items as $item)
                                <tr>
                                    <td>
                                        <div class="cart-product">
                                            <div class="cart-product__image"><img src="{{url('public/uploads/'.$item->image)}}" alt="Product image" />
                                            </div>
                                            <div class="cart-product__content">
                                                <a href="{{ route('home.product',['product'=>$item->id,'slug'=>Str::slug($item->name)]) }}">{{$item->name}}</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{$item->price}}</td>
                                    <td>
                                        <form action="{{route('cart.update',$item->id)}}" method="GET" class="form-inline" role="form">

                                            <div class="form-group">
                                                <input class="form-control" name="quantity" value="{{$item->quantity}}">
                                            </div>



                                            <button type="submit" class="btn btn-success btn-xs">Cập nhập</button>
                                        </form>
                                    </td>
                                    <td>{{$item->quantity*$item->price}}</td>
                                    <td><a href="{{route('cart.delete',$item->id)}}"><i class="fal fa-times"></i></a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="cart__table__footer"><a href="{{route('home')}}"><i class="fal fa-long-arrow-left"></i>Continue Shopping</a><a href="{{route('cart.clear')}}"><i class="fal fa-trash"></i>Clear Shopping Cart</a></div>
                </div>
                <div class="cart__total">
                    <div class="row">
                        <div class="col-12 col-md-8">
                            <div class="cart__total__discount">
                                <p>Enter coupon code. It will be applied at checkout.</p>
                                <div class="input-validator">
                                    <form action="#">
                                        <input type="text" name="discountCode" placeholder="Your code here" />
                                        <button class="btn -dark">Apply
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="cart__total__content">
                                <h3>Cart</h3>
                                <table>
                                    <tbody>
                                        <tr>
                                            <th>Total</th>
                                            <td class="final-price">{{$cart->totalAmount}}</td>
                                        </tr>
                                    </tbody>
                                </table><a class="btn -dark" href="{{route('cart.checkout')}}">Proceed to checkout</a>
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