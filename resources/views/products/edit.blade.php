@extends('layouts/app')

@section('content')
	<div class="container mt-3">
		<h1>Edit Product: {{ $product->name }}</h1>
		@if ($errors->any())
			<div class="alert alert-danger" role="alert">
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif

        @if ($product->user_id = Auth::user()->id)
		<form method="POST" action="/products/{{ $product->id }}">

			@csrf
            @method('PUT')
			<!-- Title -->
			<div class="form-group">
				<label for="name">Product Name</label>
				<input type="text" name="name" id="name" class="form-control" placeholder="Product Name" required value="{{ old('name') ? old('name') : $product->name }}">
			</div>
			<!-- Category -->
			<div class="form-group">
				<label for="exampleFormControlSelect2">Select a category</label>
				<select class="form-control" id="exampleFormControlSelect2">
				@foreach ($categories as $category)
					<option>{{ $category->name }}</option>
				@endforeach
				</select>
			</div>
			<!-- Description -->
			<div class="form-group">
				<label for="desc">Description</label>
				<textarea type="text" name="desc" id="desc" class="form-control" id="exampleFormControlTextarea1" rows="3" style="min-height: 100px; max-height: 200px;"  maxlength="250" required>{{ old('desc') ? old('desc') : $product->desc }}</textarea>
			</div>
            <!-- Price -->
			<div class="form-group">
				<label for="price">Price per day</label>
				<input type="text" name="price" id="price" class="form-control" placeholder="Price" required value="{{ old('price') ? old('price') : $product->price }}">
			</div>
			<!-- Image -->
			<div class="form-group">
				<label for="src">Image src</label>
				<input type="text" name="src" id="src" class="form-control" placeholder="Ex. https://images.com/001" required value="{{ old('src') ? old('src') : $product->src }}">
			</div>

			<input type="submit" value="Save Changes" class="btn btn-primary">
		</form>
        @else
        <h2>Access denied<h2>
        @endif
		<a href="/products">&laquo; Back to all products</a>
	</div>
@endsection