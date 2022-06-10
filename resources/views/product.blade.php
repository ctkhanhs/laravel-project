@extends('master.site')
@section('content')
<!-- <div class="row">
    <div class="col-md-5">
        <img src="{{url('public/uploads/'.$product->image)}}" width="100%">
    </div>

    <div class="col-md-7">
        <h2>{{$product->name}}</h2>
        <h4>Giá gốc: {{number_format($product->price)}}đ
            Giá KM: {{number_format($product->sale_price)}}đ
        </h4>
        <h4>Mô tả</h4>
        <p>{{Str::words(strip_tags($product->description),50)}}</p>
    </div>
</div> -->

<div id="content">
    <div class="breadcrumb">
        <div class="container">
            <h2>Shop</h2>
            <ul>
                <li>Home</li>
                <li>Shop</li>
                <li class="active">Product Detail</li>
            </ul>
        </div>
    </div>
    <div class="shop">
        <div class="container">
            <div class="product-detail__wrapper">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="product-detail__slide-two">
                            <div class="product-detail__slide-two__big">
                                <div class="slider__item"><img src="{{url('public/uploads/'.$product->image)}}" alt="Product image" /></div>
                                <div class="slider__item"><img src="assets/images/product/2.png" alt="Product image" /></div>
                                <div class="slider__item"><img src="assets/images/product/3.png" alt="Product image" /></div>
                                <div class="slider__item"><img src="assets/images/product/4.png" alt="Product image" /></div>
                            </div>
                            <div class="product-detail__slide-two__small">
                                <div class="slider__item"><img src="assets/images/product/1.png" alt="Product image" /></div>
                                <div class="slider__item"><img src="assets/images/product/2.png" alt="Product image" /></div>
                                <div class="slider__item"><img src="assets/images/product/3.png" alt="Product image" /></div>
                                <div class="slider__item"><img src="assets/images/product/4.png" alt="Product image" /></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="product-detail__content">
                            <div class="product-detail__content">
                                <div class="product-detail__content__header">
                                    <h5>{{$product->cat->name}}</h5>
                                    <h2>{{$product->name}}</h2>
                                </div>
                                <div class="product-detail__content__header__comment-block">
                                    <div class="rate"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                                    <p>03 review</p><a href="#">Write a reviews</a>
                                </div>
                                <h3>{{$product->price}}</h3>
                                <div class="divider"></div>
                                <div class="product-detail__content__footer">
                                    <div class="product-detail__controller">
                                        <div class="quantity-controller -border -round">
                                            <div class="quantity-controller__btn -descrease">-</div>
                                            <div class="quantity-controller__number">2</div>
                                            <div class="quantity-controller__btn -increase">+</div>
                                        </div>
                                        <div class="add-to-cart -dark"><a class="btn -round -red" href="{{route('cart.add',$product->id)}}"><i class="fas fa-shopping-bag"></i></a>
                                            <h5>Add to cart</h5>
                                        </div>
                                        <div class="product-detail__controler__actions"></div>
                                        @if(auth()->guard('customer')->check())
                                        @if(auth()->guard('customer')->user()->isFavorited($product->id))
                                        <a class="btn -white product__actions__item -round" href="{{route('home.unfavorite',$product->id)}}"><i class="fas fa-heart" style="color:red;"></i></a>
                                        @else
                                        <a class="btn -white product__actions__item -round" href="{{route('home.favorite',$product->id)}}"><i class="fas fa-heart"></i></a>
                                        @endif
                                        @else
                                        <a class="btn -white product__actions__item -round" href="{{route('home.login')}}"><i class="fas fa-heart"></i></a>
                                        @endif
                                    </div>
                                    <div class="divider"></div>
                                    <div class="product-detail__content__tab">
                                        <ul class="tab-content__header">
                                            <li class="tab-switcher" data-tab-index="0" tabindex="0">Description</li>
                                            <li class="tab-switcher" data-tab-index="1" tabindex="0">Shipping & Returns</li>
                                            <li class="tab-switcher" data-tab-index="2" tabindex="0">Reviews ( 03 )</li>
                                        </ul>
                                        <div id="allTabsContainer">
                                            <div class="tab-content__item -description" data-tab-index="0">
                                                <p>{{$product->description}}</p>
                                            </div>
                                            <div class="tab-content__item -ship" data-tab-index="1" style="display:none;">
                                                <h5><span>Ship to</span>New york</h5>
                                                <ul>
                                                    <li>Standard Shipping on order over 0kg - 5kg. <span>+10.00</span></li>
                                                    <li>Heavy Goods Shipping on oder over 5kg-10kg . <span>+20.00</span></li>
                                                </ul>
                                                <h5>Delivery &amp; returns</h5>
                                                <p>We diliver to over 100 countries around the word. For full details of the delivery options we offer, please view our Delivery information.</p>
                                            </div>
                                            <div class="tab-content__item -review" data-tab-index="2" style="display:none;">
                                                <div class="review">
                                                    <div class="review__header">
                                                        <div class="review__header__avatar"><img src="../../../i1.wp.com/metro.co.uk/wp-content/uploads/2020/03/GettyImages-1211127989bb31.jpg?quality=90&amp;strip=all&amp;zoom=1&amp;resize=644%2C416&amp;ssl=1" alt="Reviewer avatar" /></div>
                                                        <div class="review__header__info">
                                                            <h5>Lionel Messi</h5>
                                                            <p>Mar 17, 2020</p>
                                                        </div>
                                                        <div class="review__header__rate">
                                                            <div class="rate"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                                                        </div>
                                                    </div>
                                                    <p class="review__content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p><a class="review__report" href="#">Report as Inappropriate</a>
                                                </div>
                                                <form>
                                                    <h5>Write a review</h5>
                                                    <div class="row">
                                                        <div class="col-12 col-md-6">
                                                            <div class="input-validator">
                                                                <input type="text" name="name" placeholder="Name" />
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <div class="input-validator">
                                                                <input type="text" name="email" placeholder="Email" />
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="input-validator">
                                                                <textarea name="message" placeholder="Message" rows="5"></textarea>
                                                            </div><span class="input-error"></span>
                                                        </div>
                                                        <div class="col-12">
                                                            <button class="btn -dark">Write a review
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
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
    <div class="product-slide">
        <div class="container">
            <div class="section-title -center" style="margin-bottom: 1.875em">
                <h2>Related product</h2>
            </div>
            <div class="product-slider">
                <div class="product-slide__wrapper">
                    <x-product-slide :data="$same_category" />
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