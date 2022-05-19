@extends('master.site')
@section('content')

<h2 class="text-center">Favorite</h2>
<hr>
<div class="row">
<x-product-list :data="$products"/>
</div>


@stop()


    



