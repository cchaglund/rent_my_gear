@extends('layouts/app')
@section('content')
	@include('layouts/categorymenu')
	<div class="container">
		<h1 class="marginl">{{ $category->name }}</h1>
		@foreach ($products as $product)
			@include('components.product')
		@endforeach
	</div>
@endsection

