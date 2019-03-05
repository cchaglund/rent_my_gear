@extends('layouts/app')

@section('content')
	<div class="container mt-3">
		<h1>All Products</h1>

		<ol>
		@foreach($categories as $category)
			<li><a href="/categories/{{ $category->id }}">{{ $category->name }}</a></li>
			<ul>
			@foreach($category->products as $product)
				<li><a href="/products/{{ $product->id }}">{{ $product->name }}</a></li>
			@endforeach
			</ul>
		@endforeach
		</ol>
	</div>
@endsection