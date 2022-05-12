@foreach ($data as $pro)

<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <div class="thumbnail">
        <a href="{{ route('home.product',['product'=>$pro->id,'slug'=>Str::slug($pro->name)]) }}" class="">
            <img src="{{url('public/uploads/'.$pro->image)}}" style="width:200px;height:200px">
            <div class="caption">
                <h3>{{$pro->name}}</h3>
                <h4>Giá: {{$pro->price}}</h4>
                <p>
                    <a href="#" class="btn btn-primary">Action</a>
                    <a href="#" class="btn btn-default">Action</a>
                </p>
            </div>
        </a>
    </div>
</div>


@endforeach