@extends('layouts/app')

@section('content')
@include('layouts/categorymeny')
@foreach($products as $product)
	<div class="container productbox">
        <div class="card productpadding">
            <div class="container-fliud">
                <div class="wrapper row">
                    <div class="preview col-md-6">
                        
                        <div class="preview-pic tab-content">
                          <div class="tab-pane active" id="pic-1"><img src="https://sqeeqee.com/static/uploads/photos/2015/11/01/10/56/fa1cbe34ecea6c3df0352059010e64a5.gif" /></div>
                          <div class="tab-pane" id="pic-2"><img src="http://placekitten.com/400/252" /></div>
                          <div class="tab-pane" id="pic-3"><img src="http://placekitten.com/400/252" /></div>
                          <div class="tab-pane" id="pic-4"><img src="http://placekitten.com/400/252" /></div>
                          <div class="tab-pane" id="pic-5"><img src="http://placekitten.com/400/252" /></div>
                        </div>
                        {{--  <ul class="preview-thumbnail nav nav-tabs">
                          <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
                          <li><a data-target="#pic-2" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
                          <li><a data-target="#pic-3" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
                          <li><a data-target="#pic-4" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
                          <li><a data-target="#pic-5" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
                        </ul>  --}}
                        
                    </div>
                    <div class="details col-md-6">
                        <h3 class="product-title">{{ $product->name }}</h3>
                        <hr>
                        <div class="rating">
                            <p class="product-description">{{ $product->desc }}</p>
                        </div>
                        <hr>
                        
                        <h4 class="price">current price: <span>${{ $product->price }}</span></h4>
                        <h5 class="sizes">Time to rent:
                            <span class="size" data-toggle="tooltip" title="oneweek">1 week</span>
                            <span class="size" data-toggle="tooltip" title="twoweeks">| 2 weeks</span>
                            <span class="size" data-toggle="tooltip" title="threeweeks">| 3 weeks</span>
                            <span class="size" data-toggle="tooltip" title="fourweeks">| 4 weeks</span>
                        </h5>
                        <h5 class="colors">colors:
                        </h5>
                        <div class="action">
                            <button class="add-to-cart btn btn-outline-secondary" type="button">Rent It Now!</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
@endsection
<style>
    img {
    width: 100%;
    height: 400px;
}
.productbox{
      display: inline-flex!important;
      flex-direction: column;
      margin-left:14%!important;
      margin-bottom:10px;
  }
   .productpadding{
  background-color: gray;
  padding: 3em;
  line-height: 1.5em
  }
</style>