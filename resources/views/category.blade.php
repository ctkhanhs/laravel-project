@extends('master.site')
@section('content')

<h2 class="text-center">Product</h2>
<hr>
<div class="row">
<x-product-list :data="$products"/>
</div>

{{$products->links()}}

@stop()


    



