
    
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
                            <h6><strong>City: </strong>{{$product->user->city}}</h6>
                            <h6><strong>Categories: </strong>{{$product->category->name}}</h6>
                            <h6><strong>Address: </strong>{{$product->user->address}}</h6>
                            
                            <div class="action">
                                @if ( isset($user) && $user->id == $product->user_id)
                                    <a href="/products/{{ $product->id }}/edit" class="btn btn-warning">
                                        <button class="add-to-cart btn btn-outline-secondary" type="button">Edit</button>
                                    </a>
                                    <form method="POST" action="/products/{{ $product->id }}">
                                        {{ csrf_field() }}
                                        {{ method_field('PATCH') }}
                                        <button type="submit" name="toggle_hide" class="add-to-cart btn btn-dark" type="button">{{ $product->hidden ? 'Unhide' : 'Hide' }}</button>
                                    </form>
                                    <form method="POST" action="/products/{{ $product->id }}">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button type="submit" name="delete" class="add-to-cart btn btn-dark" type="button">Delete</button>
                                    </form>
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

<style>
@media screen and (max-width: 800px){
		.paddingt{
			padding-top:20%;
    }
  }
</style>
