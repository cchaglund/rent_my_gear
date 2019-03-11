
    
      <div class="container productbox">
            <div class="card productpadding">
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
                                <p class="product-description">{{$product->desc}}</p>
                            </div>
                            <hr>
                            
                            <h4 class="price">current price: <span>${{$product->price}}</span></h4>
                            <h5 class="sizes">Time to rent:
                                <span class="size" data-toggle="tooltip" title="oneweek">1 week</span>
                                <span class="size" data-toggle="tooltip" title="twoweeks">| 2 weeks</span>
                                <span class="size" data-toggle="tooltip" title="threeweeks">| 3 weeks</span>
                                <span class="size" data-toggle="tooltip" title="fourweeks">| 4 weeks</span>
                            </h5>
                            <h5 class="colors">colors:
                            </h5>
                            <div class="action">
                                @if ( $user->id == $product->user_id )
                                    <a href="/products/{{ $product->id }}/edit">
                                        <button class="add-to-cart btn btn-outline-secondary" type="button">Edit</button>
                                    </a>
                                @else
                                    <a href="/products/{{ $product->id }}">
                                        <button class="add-to-cart btn btn-outline-secondary" type="button">Book now</button>
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            
        </div>









{{-- @extends('components.prod_template')

@section('id')
    {{ $booking->product->id }}
@endsection

@section('name')
    {{ $booking->product->name }}
@endsection

@section('src')
    {{ $booking->product->src }}
@endsection

@section('desc')
    {{ $booking->product->desc }}
@endsection

@section('price')
    {{ $booking->product->price }}
@endsection

@section('booking_details')
    BOOKING
@endsection --}}