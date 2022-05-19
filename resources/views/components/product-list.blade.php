@foreach ($data as $pro)

<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 mb-5">
    <div class="card text-center">
        <a href="{{ route('home.product',['product'=>$pro->id,'slug'=>Str::slug($pro->name)]) }}" class="">
            <img class="card-img-top" src="{{url('public/uploads/'.$pro->image)}}" alt="" style="width:100%">
            <div class="card-body">
                <h3 class="card-title">{{$pro->name}}</h3>
                <p class="card-text mb-2">Giá: {{$pro->price}}</p>
                <a href="{{route('cart.add',$pro->id)}}" class="btn btn-dark"><i class="bi bi-cart-fill"></i></a>
                @if(auth()->guard('customer')->check())
                 @if(auth()->guard('customer')->user()->isFavorited($pro->id))
                 <a href="{{route('home.unfavorite',$pro->id)}}" class="btn btn-dark"><i class="bi bi-heart-fill" style="color:red;"></i></a>
                 @else
                 <a href="{{route('home.favorite',$pro->id)}}" class="btn btn-dark"><i class="bi bi-heart-fill"></i></a>
                 @endif
                @else
                <a href="{{route('home.login')}}" class="btn btn-dark"><i class="bi bi-heart-fill"></i></a>
                @endif


            </div>
        </a>
    </div>
</div>


@endforeach