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
                        <p>
                            <a class="add-to-cart btn btn-outline-secondary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                Start Booking
                            </a>
                        </p>
                        <div class="collapse" id="collapseExample">
                            <div class="card card-body">
                                <form class="productpadding" method="POST">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Name:</label>
                                        <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="ex: Sten Svensson">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Email address</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Phone:</label>
                                        <input type="phone" class="form-control" id="exampleFormControlInput1" placeholder="Number">
                                    </div>
                                    <div class="flex">
                                        <div class="form-group citybar">
                                            <label for="exampleFormControlInput1">City</label>
                                            <input type="city" class="form-control" id="exampleFormControlInput1" placeholder="ex: Lund">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Address</label>
                                            <input type="address" class="form-control" id="exampleFormControlInput1" placeholder="ex: Stora Gatan 5">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Start Date:</label>
                                        <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="ex: 2019-03-08">
                                    </div>  
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">End Date:</label>
                                        <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="ex: 2019-03-09">
                                    </div>  
                                    <div>
                                        <p class="price">total price: <span>${{ $product->price }}</span></p>
                                    </div>
                                    <div class="action">
                                        <button class="add-to-cart btn btn-outline-secondary" type="button">Rent It Now!</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<style>
    .flex{
        display:inline-flex;
    }
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
  padding: 3em;
  line-height: 1.5em
  }
  .citybar{
      margin-right:30px; /*30px*/
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