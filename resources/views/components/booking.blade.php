    <div class="container productbox">
      <div class="card productpadding paddingt">
        <div class="container-fluid">
          <div class="wrapper row">
            <div class="preview col-md-6">
              
              <div class="preview-pic tab-content">
                <a href="/products/{{$booking->product->id}}">
                  <div class="tab-pane active" id="pic-1"><img src="{{$booking->product->src}}" /></div>
                </a>
              </div>
              
            </div>
            <div class="details col-md-6">
              <a href="/products/{{$booking->product->id}}">
                <h3 class="product-title">{{$booking->product->name}}</h3>
              </a>
              <hr>
              <div class="rating">
                <p class="product-description"><strong>Description: </strong>{{$booking->product->desc}}</p>
              </div>
              <hr>
              
              <h6><strong>Owner: </strong>{{$booking->product->user->name}}</h6>
              <h6><strong>City: </strong>{{$booking->product->city}}</h6>
              <h6><strong>Category: </strong>{{$booking->product->category->name}}</h6>

              <div class="mt-5">
                <h6 class="price">Price per day: <span>${{$booking->product->price}}</span></h6>
                <h6 class="sizes">Renting starts: {{ $booking->start_date }}</h6>
                <h6 class="sizes">Renting ends: {{ $booking->end_date }}</h6>
                <h5 class="sizes">Total days: {{ $booking->totalDays() }}</h5>
                <h5 class="sizes">Total price: ${{ $booking->totalPrice() }}</h5>
              </div>

              <div class="p-2 d-flex justify-content-center">
                <h5>
                  <span class="status-{{ $booking->status()['code'] }}">
                    {{ $booking->status()['message'] }}
                  </span>
                </h5>
                <span class="pl-1 pr-1">on {{substr($booking->updated_at, 0, 10)}}</span>
              </div>

              <div class="d-flex justify-content-center">
                 @if ($booking->status()['code'] == 'returned' || $booking->status()['code'] == 'declined')
                    <form method="POST" action="/bookings/{{ $booking->id }}">
                      {{ csrf_field() }}
                         {{ method_field('DELETE') }}
                    <button type="submit" class="btn btn-primary">Delete</button>
                  </form>                             
                 @elseif ($booking->owner_id == $user->id && $booking->status()['code'] == 'pending')
                    <form method="POST" action="/bookings/{{ $booking->id }}">
                        {{ csrf_field() }}
                         {{ method_field('PATCH') }}
                    <button type="submit" class="btn btn-success" name="approve" value="true">Approve loan</button>
                    <button type="submit" class="btn btn-danger" name="decline" value="true">Decline loan</button>
                  </form>                           
                 @elseif ($booking->status()['code'] == 'approved')
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
    </div>






<style>


    .productimg{
        width:50%!important;
        height:50%!important;
    }
</style>
