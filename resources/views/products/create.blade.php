@extends('layouts/app')

@section('content')
	<div class="container mt-3">
		<h1>Rent Out</h1>
		@if ($errors->any())
			<div class="alert alert-danger mx-0" role="alert">
				<ul class="mb-0">
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif
		<form method="POST" action="/products">

			@csrf
			<!-- Title -->
			<div class="form-group">
				<label for="title">Product Name</label>
				<input type="text" name="name" id="name" class="form-control" placeholder="Name" required value={{ old('name') }}>
			</div>
			<!-- Category -->
			<div class="form-group">
				<label for="categories">Select a category</label>
				<select class="form-control" id="category">
				@foreach ($categories as $category)
					<option>{{ $category->name }}</option>
				@endforeach
				</select>
			</div>
			<!-- Description -->
			<div class="form-group">
				<label for="desc">Description</label>
				<textarea type="text" name="desc" id="desc" class="form-control" placeholder="Description" rows="3" style="min-height: 100px; max-height: 200px;"  maxlength="250" required>{{ old('desc') }}</textarea>
			</div>
            <!-- Price -->
			<div class="form-group">
				<label for="price">Price per day</label>
				<input type="text" name="price" id="price" class="form-control" placeholder="Price" required value={{ old('price') }}>
			</div>
			<!-- Image -->
			<div class="form-group">
				<label for="src">Image src (1080 x 1920 recommended)</label>
				<input type="text" name="src" id="src" class="form-control" placeholder="Ex. https://images.com/001" required value={{ old('src') }}>
			</div>

			<input type="submit" value="Create New Product" class="btn btn-primary">
		</form>
		<a href="/products">&laquo; Back to all products</a>
	</div>
@endsection