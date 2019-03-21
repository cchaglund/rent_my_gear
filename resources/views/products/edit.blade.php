@extends('layouts/app')

@section('content')
	<div class="container widthbox paddingt margin">
		<h1>Edit Product: {{ $product->name }}</h1>
		@include('templates/errors')

		<form method="POST" action="/products/{{ $product->id }}">

			@csrf
            @method('PUT')
			<!-- Title -->
			<div class="form-group">
				<label for="name">Product Name</label>
				<input type="text" maxlength="30" name="name" id="name" class="form-control" placeholder="Product Name" required value="{{ old('name') ? old('name') : $product->name }}">
			</div>
			
			<!-- Category -->
				<div class="form-group">
					<label for="exampleFormControlSelect2">Select a category</label>

					<select name="categories" class="form-control" id="categories">
						@foreach ($categories as $category)
							@if($category->subcategories()->exists())
								<optgroup label="{{ $category->name }}">
									@foreach ($category->subcategories as $subcategory)
										<option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
									@endforeach
								</optgroup>
							@else
								<option value="{{ $category->id }}">$category->name</option>
							@endif
						@endforeach
					</select>
				</div>
			<!-- Description -->
			<div class="form-group">
				<label for="desc">Description</label>
				<textarea type="text" name="desc" id="desc" class="form-control" id="exampleFormControlTextarea1" rows="3" style="min-height: 100px; max-height: 200px;"  maxlength="250" required>{{ old('desc') ? old('desc') : $product->desc }}</textarea>
			</div>
			<!-- City -->
			<div class="form-group">
				<label for="city">City</label>
				<input type="text" name="city" id="city" class="form-control" placeholder="City" required value="{{ old('city') ? old('city') : $product->city }}">
			</div>
            <!-- Price -->
			<div class="form-group">
				<label for="price">Price per day</label>
				<input type="number" name="price" id="price" class="form-control" placeholder="Price" required value="{{ old('price') ? old('price') : $product->price }}">
			</div>
			<!-- Image -->
			<div class="form-group">
				<label for="src">Image src</label>
				<input type="text" name="src" id="src" class="form-control" placeholder="Ex. https://images.com/001" required value="{{ old('src') ? old('src') : $product->src }}">
			</div>

			<input type="submit" value="Save Changes" class="btn btn-primary">
		</form>
        
		<a href="/products">&laquo; Back to all products</a>
	</div>
@endsection
