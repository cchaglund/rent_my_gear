<div class="container productbox">
    <div class="card productpadding paddingt">
        <div class="container-fluid">
            <div class="wrapper row">
                <div class="preview col-md-6">
                    <div class="preview-pic tab-content">
                        <a href="/products/{{$product->id}}">
                            <div class="tab-pane active" id="pic-1"><img src="{{$product->src}}" /></div>
                        </a>
                    </div>
                </div>
                <div class="details col-md-6">
                    <a href="/products/{{$product->id}}">
                        <h3 class="product-title">{{$product->name}}</h3>
                    </a>
                    <hr>
                    <div class="rating">
                        <p class="product-description"><strong>Description: </strong>{{$product->desc}}</p>
                    </div>
                    <hr>
                    <h4 class="price">Price per day: <span>${{$product->price}}</span></h4>
                    <h6><strong>Owner: </strong>{{$product->user->name}}</h6>
                    <h6><strong>City: </strong>{{$product->city}}</h6>
                    <h6><strong>Category: </strong>{{$product->category->name}}</h6>   
                    @include('components.owner_settings')
                        @if ( $user->id != $product->user_id || $user->id == 0)
                            <p>
                                <a class="add-to-cart btn btn-outline-secondary center-text" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    Start Booking
                                </a>
                            </p>
                        @endif
                </div>
            </div>
            @include('components.booking_option')
        </div>
    </div>
</div>

<style>
@media screen and (max-width: 800px){
        .paddingt{
            padding-top:20%;
        }
    }
</style>
