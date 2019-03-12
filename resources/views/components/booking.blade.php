
<div class="container productbox">
      <div class="card productpadding">
          <div class="container-fluid">
              <div class="wrapper row">
                  <div class="preview col-md-6">
                      
                      <div class="preview-pic tab-content">
                        <div class="tab-pane active" id="pic-1"><img src="{{$booking->product->src}}" /></div>
                      </div>
                      
                  </div>
                  <div class="details col-md-6">
                      <h3 class="product-title">{{$booking->product->name}}</h3>
                      <hr>
                      <div class="rating">
                          <p class="product-description">{{$booking->product->desc}}</p>
                      </div>
                      <hr>
                      
                      <h4 class="price">Price per day: <span>${{$booking->product->price}}</span></h4>
                      <h4 class="price">Total price: <span>${{$booking->product->price}}</span></h4>
                      <h5 class="sizes">Total days: {{ $booking->totalDays() }}</h5>
                      <h5 class="sizes">Renting starts: {{ $booking->start_date }}</h5>
                      <h5 class="sizes">Renting ends: {{ $booking->end_date }}</h5>
                      <h5 class="sizes">Total price: {{ $booking->totalPrice() }}</h5>

                      <h3 class="sizes">STATUS: {{ $booking->status() }} on {{substr($booking->updated_at, 0, 10)}}</h3>

                     @if ($booking->status() == 'Gear returned' || $booking->status() == 'Declined')
                      	<form method="POST" action="/bookings/{{ $booking->id }}">
                      		{{ csrf_field() }}
									           {{ method_field('DELETE') }}
                     		<button type="submit" class="btn btn-primary">Delete this receipt</button>
                     	</form>                            	
                     @elseif ($booking->owner_id == $user->id && $booking->status() == 'Pending loan approval')
                      	<form method="POST" action="/bookings/{{ $booking->id }}">
                      		{{ csrf_field() }}
									           {{ method_field('PATCH') }}
                     		<button type="submit" class="btn btn-success" name="approve" value="true">Approve loan</button>
                     		<button type="submit" class="btn btn-success" name="decline" value="true">Decline loan</button>
                     	</form>                         	
                     @elseif ($booking->status() == 'Approved!')
                        @if($booking->owner_id == $user->id)
                        	<p>Renter's contact number: {{ $booking->rec_phone}}</p>  
                        @else
                          <p>Owner's contact number: {{ $booking->owner()->phone}}</p> 
                        @endif                  	
                     @endif
                       
                      
                      
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