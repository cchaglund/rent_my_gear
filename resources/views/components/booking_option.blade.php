@if ( $user == null || $user->id != $product->user_id)

	<div class="collapse" id="collapse-{{ $product->id }}">
		<div class="card-body">
			  <form method="POST" action="/bookings">
				  @csrf
				  <input type="text" hidden name="product_id" value="{{ $product->id }}">
				  <div class="form-group row bookbar">
					  <label for="name" class="col-md-4 col-form-label ">{{ __('Name') }}</label>
					  <div class="col-md-6">
						  <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ isset($user) ? $user->name : ''}}" name="name" value="{{ isset($user) ? $user->name : ''}}" required autofocus>
						  @if ($errors->has('name'))
							  <span class="invalid-feedback" role="alert">
								  <strong>{{ $errors->first('name') }}</strong>
							  </span>
						  @endif
					  </div>
				  </div>
				  <div class="form-group row bookbar">
					  <label for="email" class="col-md-4 col-form-label ">{{ __('E-Mail Address') }}</label>
					  <div class="col-md-6">
						  <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ isset($user) ? $user->email : ''}}" name="email" value="{{ isset($user) ? $user->email : ''}}" required>
						  @if ($errors->has('email'))
							  <span class="invalid-feedback" role="alert">
								  <strong>{{ $errors->first('email') }}</strong>
							  </span>
						  @endif
					  </div>
				  </div>
				  <div class="form-group row bookbar">
					  <label for="phone" class="col-md-4 col-form-label ">{{ __('Phone') }}</label>
					  <div class="col-md-6">
						  <input id="phone" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" placeholder="{{ isset($user) ? $user->phone : ''}}" name="phone" value="{{ isset($user) ? $user->name : ''}}" required>
						  @if ($errors->has('phone'))
							  <span class="invalid-feedback" role="alert">
								  <strong>{{ $errors->first('phone') }}</strong>
							  </span>
						  @endif
					  </div>
				  </div>
				  <div class="form-group row bookbar">
					  <label for="city" class="col-md-4 col-form-label ">{{ __('City') }}</label>
					  <div class="col-md-6">
						  <input id="city" type="text" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" placeholder="{{ isset($user) ? $user->city : ''}}" name="city" value="{{ isset($user) ? $user->city : ''}}" required>
						  @if ($errors->has('city'))
							  <span class="invalid-feedback" role="alert">
								  <strong>{{ $errors->first('city') }}</strong>
							  </span>
						  @endif
					  </div>
				  </div>
				  <div class="form-group row bookbar">
					  <label for="address" class="col-md-4 col-form-label ">{{ __('Address') }}</label>
					  <div class="col-md-6">
						  <input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" placeholder="{{ isset($user) ? $user->address : ''}}" name="address" value="{{ isset($user) ? $user->address : ''}}" required>
						  @if ($errors->has('address'))
							  <span class="invalid-feedback" role="alert">
								  <strong>{{ $errors->first('address') }}</strong>
							  </span>
						  @endif
					  </div>
				  </div>
				  <div class="form-group row bookbar">
					  <label for="startdate" class="col-md-4 col-form-label ">{{ __('Start Date') }}</label>
					  <div class="col-md-6">
						  <input id="startdate" type="date" class="form-control{{ $errors->has('startdate') ? ' is-invalid' : '' }}" name="startdate" value="{{ old('startdate') }}" required>
						  @if ($errors->has('startdate'))
							  <span class="invalid-feedback" role="alert">
								  <strong>{{ $errors->first('startdate') }}</strong>
							  </span>
						  @endif
					  </div>
				  </div>
				  <div class="form-group row bookbar">
					  <label for="enddate" class="col-md-4 col-form-label ">{{ __('End Date') }}</label>
					  <div class="col-md-6">
						  <input id="enddate" type="date" class="form-control{{ $errors->has('enddate') ? ' is-invalid' : '' }}" name="enddate" value="{{ old('enddate') }}" required>
						  @if ($errors->has('enddate'))
							  <span class="invalid-feedback" role="alert">
								  <strong>{{ $errors->first('enddate') }}</strong>
							  </span>
						  @endif
					  </div>
				  </div>
				  <div>
					  <p class="price">total price: <span>${{ $product->price }}</span></p>
				  </div>

				  <div class="form-group row mb-0">
					  <div class="col-md-6">
						  <button type="submit" class="add-to-cart btn btn-outline-secondary">
							  {{ __('Rent It Now!') }}
						  </button>
					  </div>
				  </div>
			  </form>
		 </div>
	</div>
@endif