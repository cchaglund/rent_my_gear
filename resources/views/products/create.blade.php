@extends('layouts/app')

@section('content')
{{-- @dump($categories)
@dd($sub_categories) --}}
	<div class="container widthbox paddingt margin">
		<div class="paddingt">
			<h1>Rent Out</h1>
			@include('templates/errors')
			<form method="POST" action="/products">

				@csrf
				<!-- Title -->
				<div class="form-group">
					<label for="title">Product Name</label>
					<input type="text" name="name" id="name" class="form-control" placeholder="Name" required value="{{ old('name') }}">
				</div>

				<!-- Category -->
				<div class="form-group">
					<label for="categories">Select a category</label>

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
					<textarea type="text" name="desc" id="desc" class="form-control" rows="3" style="min-height: 100px; max-height: 200px;"  maxlength="250">{{ old('desc') }}</textarea>
				</div>
				
				<!-- City -->
				<div class="form-group">
					<label for="city">City</label>
					<input type="text" name="city" id="city" class="form-control" placeholder="City" required value="{{ old('city') }}">
				</div>
	            <!-- Price -->
				<div class="form-group">
					<label for="price">Price per day</label>
					<input type="text" name="price" id="price" class="form-control" placeholder="Price" required value="{{ old('price') }}">
				</div>
				<!-- Image -->
				<div class="form-group">
					<label for="src">Image src</label>
					<input type="text" name="src" id="src" class="form-control" placeholder="" required value="{{ old('src') }}">
				</div>

				<input type="submit" value="Create New Product" class="btn btn-primary">
			</form>
		</div>

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