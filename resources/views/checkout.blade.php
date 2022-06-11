@extends('master.site')
@section('content')
<div id="content">
    <div class="breadcrumb">
        <div class="container">
            <h2>Checkout</h2>
            <ul>
                <li>Home</li>
                <li>Shop</li>
                <li class="active">Checkout</li>
            </ul>
        </div>
    </div>
    <div class="shop">
        <div class="container">
            <div class="checkout">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-7">
                            <form action="" method="POST" role="form">
                                @csrf
                                <div class="checkout__form">
                                    <div class="checkout__form__contact">
                                        <div class="checkout__form__contact__title">
                                            <h5 class="checkout-title">Contact information</h5>
                                            <p> Already have an account?<a href="#">Login</a></p>
                                        </div>
                                    </div>
                                    <div class="checkout__form__shipping">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="input-validator">
                                                    <label for="">Email</label>
                                                    <input type="text" name="email" />
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="input-validator">
                                                    <label>Họ và tên<span>*</span>
                                                        <input type="text" name="name" />
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="input-validator">
                                                    <label>Số điện thoại<span>*</span>
                                                        <input type="text" name="phone">
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="input-validator">
                                                    <label>Địa chỉ <span>*</span>
                                                        <input type="text" name="address" placeholder="Steet address" />
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn -red">Đặt hàng
                                </button>
                            </form>
                        </div>
                        <div class="col-12 col-lg-5">
                            <div class="row">
                                <div class="col-12 col-md-6 col-lg-12 ml-auto">
                                    <div class="checkout__total">
                                        <h5 class="checkout-title">Your order</h5>
                                        <div class="checkout__total__price">
                                            <h5>Product</h5>
                                            <table>
                                                <colgroup>
                                                    <col style="width: 70%" />
                                                    <col style="width: 30%" />
                                                </colgroup>
                                                <tbody>
                                                    @foreach($cart->items as $item)
                                                    <tr>
                                                        <td><span>{{$item->quantity}} x </span>{{$item->name}}
                                                        </td>
                                                        <td>{{$item->price}}</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            <div class="checkout__total__price__total-count">
                                                <table>
                                                    <tbody>
                                                        <tr>
                                                            <td>Total</td>
                                                            <td>{{$cart->totalAmount}}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @stop()