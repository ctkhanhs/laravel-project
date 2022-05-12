@extends('master.site')
@section('bg')
<div id="carouselId" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselId" data-slide-to="0" class="active"></li>
        <li data-target="#carouselId" data-slide-to="1"></li>
        <li data-target="#carouselId" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <img src="public/image/bg1.jpg" alt="First slide" style="max-width: 100%">
            <div class="carousel-caption d-none d-md-block">
                <h3>Title</h3>
                <p>Description</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="public/image/bg1.jpg" alt="Second slide" style="max-width: 100%">
            <div class="carousel-caption d-none d-md-block">
                <h3>Title</h3>
                <p>Description</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="public/image/bg1.jpg" alt="Third slide" style="max-width: 100%">
            <div class="carousel-caption d-none d-md-block">
                <h3>Title</h3>
                <p>Description</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
@stop()
@section('content')
<h2 class="text-center">Product</h2>
<hr>
<div class="row">
    <!-- @foreach ($productSale as $pro)

    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
        <div class="thumbnail">
            <img src="{{url('public/uploads/'.$pro->image)}}" style="width:200px;height:200px">
            <div class="caption">
                <h3>{{$pro->name}}</h3>
                <h4>Giá: {{$pro->price}}</h4>
                <p>
                    <a href="#" class="btn btn-primary">Action</a>
                    <a href="#" class="btn btn-default">Action</a>
                </p>
            </div>
        </div>
    </div>


    @endforeach -->
    <x-product-list :data="$productSale"/>
</div>



@stop()