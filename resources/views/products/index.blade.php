@extends('layouts/app')

@section('content')
	<div class="container mt-3">
		<h1>All Products</h1>

		<ol>
		@foreach($products as $product)
			<li><a href="/products/{{ $product->id }}">{{ $product->name }}</a></li>
		@endforeach
		</ol>
	</div>
@endsection