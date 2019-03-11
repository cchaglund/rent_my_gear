@extends('layouts/app')
@section('content')
  @include('templates/status')
  <div class="product-box">
      <img src="{{ $product->src }}" alt="{{ $product->name }}" width="100%">
      <div class="product-info">
          <h2>{{ $product->name }}</h2>
          <hr>
          <p>{{ $product->desc }}</p>
          <hr>
          <h4 class="price">Price per day: <span>${{ $product->price }}</span></h4>
          <form>
            <select class="custom-select  col-sm-5 mr-sm-2" id="inlineFormCustomSelect">
                <option value="1">1 Day</option>
                <option value="2">2 Days</option>
                <option value="3">3 Days</option>
                <option value="4">4 Days</option>
                <option value="5">5 Days</option>
            </select>
            </form>
            <div class="action mt-1">
                <button class="add-to-cart btn btn-outline-secondary" type="submit">Rent It Now!</button>
            </div>
            <hr>
          <a href="/products">&laquo; Back to all products</a>
      </div>
  </div>

  <style>
    .product-box {
        display: flex;
        flex-direction: row;
        background-color: #fff;
        padding: 15px;
        max-width: 1000px;
        margin: 15px auto;
        box-shadow: 0 0 4px rgba(0,0,0,.04);
    }

    .product-box img {
      width: 324px;
      height: 576px;
    }

    .product-box .product-info {
      flex: 1;
      margin-left: 15px;
    }

    .product-box .product-info h2{
      text-align: center;
    }

    @media only screen and (max-width: 700px) {
      .product-box {
        flex-direction: column;
        max-width: 500px;
      }
      .product-box img {
        margin: 15px auto;
      }
    }

  </style>
@endsection