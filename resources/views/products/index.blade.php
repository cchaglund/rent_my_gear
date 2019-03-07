@extends('layouts/app')

@section('content')
@include('layouts/categorymenu')

  <div class="product-box">
    @foreach ($products as $product)
        <div class="product-item">
            <img src="{{ $product->src }}" alt="{{ $product->name }}" width="100%">
            <div class="product-info">
                <a href="/products/{{ $product->id }}" class="nav-link name">{{ $product->name }}</a>
            </div>
        </div>
    @endforeach
  </div>


  <style>
    .product-box {
        display: flex;
        padding-left: 200px;
        flex-wrap: wrap;
        margin: 15px;
    }

    .product-box .product-item {
        background-color: #fff;
        width: 324px;
        height: 576px;
        position: relative;
        box-shadow: 0 0 4px rgba(0,0,0,.04);
        margin: 15px;
    }

    .product-box .product-item .product-info {
        background-color: #fff;
        display: flex;
        position: absolute;
        top: 0;
        right: 0;
        left: 0;
        text-align: center;
    }

    .product-box .product-item .product-info .name {
        padding: 5px;
        flex: 1;
    }

    .product-box .product-item .product-info .price {
        text-align: right;
        padding: 5px;
    }

  </style>
@endsection