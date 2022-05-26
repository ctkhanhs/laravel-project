<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../library/fontawesome/css/all.min.css">
    <style>
        a { color:black;}
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
</head>

<body>

    <div class="container">
        <nav class="navbar navbar-expand-sm navbar-light">
            <img src="{{url('public/image')}}/logo.png">
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('home')}}">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Category</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            @foreach($categories as $cat)
                            <a class="dropdown-item" href="{{route('home.category',['category'=>$cat->id, 'slug'=>Str::slug($cat->name)])}}">{{$cat->name}}</a>
                            @endforeach
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Account</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            @if(auth()->guard('customer')->check())
                            <a class="dropdown-item" href="">{{auth()->guard('customer')->user()->name}}</a>
                            <a class="dropdown-item" href="{{route('home.product_favorite')}}">Favorite</a>
                            <a class="dropdown-item" href="{{route('cart.view')}}">Cart</a>
                            <a class="dropdown-item" href="{{route('home.logout')}}">Logout</a>
                            @else
                            <a class="dropdown-item" href="{{route('cart.view')}}">Cart</a>
                            <a class="dropdown-item" href="{{route('home.login')}}">Login</a>
                            <a class="dropdown-item" href="{{route('home.register')}}">Register</a>
                            @endif
                        </div>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>

    </div>


    @yield('bg')


    <div class="container">
        @yield('content')
    </div>

    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-md-12 p-0">
                <img src="{{url('public/image')}}/bg3.jpg" style="max-width:100%">

            </div>
        </div>
    </div>


    <div class="container mt-4 border-bottom p-3">
        <img src="{{url('public/image')}}/logo.png">
    </div>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-3">
                <p><b>Contact info</b></p>
                <p>Address: 2168 S Archer Ave, Chicago, IL 60616, US</p>
                <p>Phone: +1 321-808-1999</p>
                <p>Email: Beautycosmetics@gmail.com</p>
                <p>Opentime: 8.00am - 11.00.pm</p>
            </div>
            <div class="col-md-3">
                <p class="ml-5"><b>Account</b></p>
                <ul style="list-style: none;">
                    <li><a href="">My account</a></li>
                    <li><a href="">Wishlist</a></li>
                    <li><a href="">Cart</a></li>
                    <li><a href="">Shop</a></li>
                    <li><a href="">Checkout</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <p class="ml-5"><b>Information</b></p>
                <ul style="list-style: none">
                    <li><a href="">About us</a></li>
                    <li><a href="">Careers</a></li>
                    <li><a href="">Delivery Information</a></li>
                    <li><a href="">Privacy Policy</a></li>
                    <li><a href="">Terms & Condition</a></li>
                </ul>
            </div>

            <div class="col-md-3">
                <p class="title"><b>Payment methods</b></p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <div class="row">
                    <div class="col-md-3 col-3">
                        <img src="{{url('public/image')}}/paypal.png">
                    </div>
                    <div class="col-md-3 col-3">
                        <img src="{{url('public/image')}}/visa.png">
                    </div>
                    <div class="col-md-3 col-3">
                        <img src="{{url('public/image')}}/mastercard.png">
                    </div>
                    <div class="col-md-3 col-3">
                        <img src="{{url('public/image')}}/cirrus.png">
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="end mt-2">
        <div class="container">
            <p class="text-secondary size16"><i class="far fa-copyright"></i> Copyright 2020 Beauty</p>

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>