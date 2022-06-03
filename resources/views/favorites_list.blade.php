@extends('master.site')
@section('content')

<div id="content">
    <div class="breadcrumb">
        <div class="container">
            <h2>Wishlist</h2>
            <ul>
                <li>Home</li>
                <li>Shop</li>
                <li class="active">Wishlist</li>
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
                                <th>Product</th>
                                <th>Unit Price</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $pro)
                            <tr>
                                <td>
                                    <div class="wishlist-product">
                                        <div class="wishlist-product__image"><img src="{{url('public/uploads/'.$pro->image)}}" alt="Velvet Melon High Intensity" /></div>
                                        <div class="wishlist-product__content">
                                            <h5>{{$pro->cat->name}}</h5><a href="{{ route('home.product',['product'=>$pro->id,'slug'=>Str::slug($pro->name)]) }}">{{$pro->name}}</a>
                                        </div>
                                    </div>
                                </td>
                                <td>{{$pro->price}}</td>
                                <td><a class="btn -dark" href="{{route('cart.add',$pro->id)}}">Add to cart</a><a class="remove-btn" href="{{route('home.unfavorite',$pro->id)}}"><i class="fal fa-times"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    @stop()