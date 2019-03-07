@extends('layouts/app')
@section('content')
  @include('templates/status')
  @include('layouts/categorymenu')
    <div class="container productbox">
        <div class="card productpadding">
            <div class="container-fliud">
                <div class="wrapper row">
                    <div class="preview col-md-6">
                        
                        <div class="preview-pic tab-content">
                          <div class="tab-pane active" id="pic-1"><img src="{{ $product->src }}" /></div>
                        </div>
                        
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
@endsection

<style>
img {
    width: 550px;
    height: 400px;
}
.preview {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column; 
}
.productbox{
      display: inline-flex!important;
      width:100%;
      margin-left:14%!important;
  }
  .productpadding{
  background-color: gray;
  padding: 3em;
  line-height: 1.5em
  }
@media screen and (max-width: 996px) {
    .preview {
      margin-bottom: 20px; 
} }
.preview-pic {
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
      -ms-flex-positive: 1;
          flex-grow: 1; }
.preview-thumbnail.nav-tabs {
  border: none;
  margin-top: 15px; }
  .preview-thumbnail.nav-tabs li {
    width: 18%;
    margin-right: 2.5%; }
    .preview-thumbnail.nav-tabs li img {
      max-width: 100%;
      display: block; }
    .preview-thumbnail.nav-tabs li a {
      padding: 0;
      margin: 0; }
    .preview-thumbnail.nav-tabs li:last-of-type {
      margin-right: 0; }
.tab-content {
  overflow: hidden; }
  .tab-content img {
    width: 100%;
    -webkit-animation-name: opacity;
            animation-name: opacity;
    -webkit-animation-duration: .3s;
            animation-duration: .3s; }
/* .card {
  margin-top: 50px;
  background-color: gray;
  /*padding: 3em;
  line-height: 1.5em; } */
</style>