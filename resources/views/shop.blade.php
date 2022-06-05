@extends('master.site')
@section('content')
<div id="content">
  <div class="breadcrumb">
    <div class="container">
      <h2>Shop</h2>
      <ul>
        <li>Home</li>
        <li class="active">Shop</li>
      </ul>
    </div>
  </div>

  <x-product-list :data="$products" />
</div>
@stop()