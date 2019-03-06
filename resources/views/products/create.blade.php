@extends('layouts/app')

@section('content')
	<div class="container mt-3">
		<h1>Create a New Project</h1>

		<form method="POST" action="/products">

			@csrf

			<div class="form-group">
				<label for="title">Product Name</label>
				<input type="text" name="name" id="name" class="form-control" placeholder="Name">
			</div>

			<div class="form-group">
				<label for="desc">Product Description</label>
				<input type="text" name="desc" id="desc" class="form-control" placeholder="Description">
			</div>
            
			<div class="form-group">
				<label for="price">Product Price</label>
				<input type="text" name="price" id="price" class="form-control" placeholder="Price">
			</div>
            
			<div class="form-group">
				<label for="desc">Rented_to</label>
				<input type="text" name="rented_to" id="rented_to" class="form-control" placeholder="rented_to">
			</div>

			<input type="submit" value="Create New Product" class="btn btn-primary">
		</form>

		<a href="/products">&laquo; Back to all products</a>
	</div>
@endsection