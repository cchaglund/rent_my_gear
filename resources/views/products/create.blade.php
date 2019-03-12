@extends('layouts/app')

@section('content')
	<div class="container widthbox paddingt margin">
		<h1>Rent Out</h1>
		@if ($errors->any())
			<div class="alert alert-danger" role="alert">
				<ul>
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
				<label for="exampleFormControlSelect2">Select a category</label>
				<select name="category" class="form-control" id="exampleFormControlSelect2">
				@foreach ($categories as $category)
					<option value="{{ $category->id}}">{{ $category->name }}</option>
				@endforeach
				</select>
			</div>
			<!-- Description -->
			<div class="form-group">
				<label for="desc">Description</label>
				<textarea type="text" name="desc" id="desc" class="form-control" rows="3" style="min-height: 100px; max-height: 200px;"  maxlength="250">{{ old('desc') }}</textarea>
			</div>
            <!-- Price -->
			<div class="form-group">
				<label for="price">Price per day</label>
				<input type="text" name="price" id="price" class="form-control" placeholder="Price" required value={{ old('price') }}>
			</div>
			<!-- Image -->
			<div class="form-group">
				<label for="src">Image src</label>
				<input type="text" name="src" id="src" class="form-control" placeholder="" required value={{ old('src') }}>
			</div>

			<input type="submit" value="Create New Product" class="btn btn-primary">
		</form>
		<a href="/products">&laquo; Back to all products</a>
	</div>
@endsection

<style>
	.margin{
		margin-left:20%!important;
		margin-bottom:20px;
	}
	.widthbox{
		width:40vw!important;
	}
	@media screen and (max-width: 800px){
		.paddingt{
			padding-top:20%;
		}
		.widthbox{
    		width:100%!important;
		}
		.margin{
			margin-left:0%!important;
		}
	}	
</style>