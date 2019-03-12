@extends('layouts/app')

@section('content')

	<div class="container">
		<h1>{{ $category->name }}</h1>
		@foreach ($products as $product)
			@include('components.product')
		@endforeach
		<a href="/products">&laquo; Back to all products</a>
	</div>

@endsection
