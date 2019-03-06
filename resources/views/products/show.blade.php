@extends('layouts/app')
@section('content')
    @include('layouts/categorymenu')
        <div class="container productbox">
        <div class="card productpadding">
            <div class="container-fliud">
                <div class="wrapper row">
                    <div class="preview col-md-6">
                        
                        <div class="preview-pic tab-content">
                          <div class="tab-pane active" id="pic-1"><img src="{{ $product->src }}" /></div>
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
                        
                        <h4 class="price">Current Price: <span>${{ $product->price }}</span></h4>
                        <form>
                    
                        <h5 class="sizes">Rent Time:
                        <select class="custom-select  col-sm-5 mr-sm-2" id="inlineFormCustomSelect">
                            <option selected>Choose Your Rent Time</option>
                            <option value="1">One Week</option>
                            <option value="2">Two Weeks</option>
                            <option value="3">Three Weeks</option>
                            <option value="4">Four Weeks</option>
                        </select>
                        </h5>
                        </form>
                        <div class="action">
                            <button class="add-to-cart btn btn-outline-secondary" type="submit">Rent It Now!</button>
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
  margin-top: 15px; 
  }

  .preview-thumbnail.nav-tabs li {
    width: 18%;
    margin-right: 2.5%;
    }

    .preview-thumbnail.nav-tabs li img {
      max-width: 100%;
      display: block;
      }

.preview-thumbnail.nav-tabs li a {
padding: 0;
margin: 0;
}

.preview-thumbnail.nav-tabs li:last-of-type {
margin-right: 0;
}

.tab-content {
overflow: hidden;
}

.tab-content img {
width: 100%;
-webkit-animation-name: opacity;
animation-name: opacity;
-webkit-animation-duration: .3s;
animation-duration: .3s; }
</style>