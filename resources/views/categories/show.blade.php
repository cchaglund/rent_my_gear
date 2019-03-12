@extends('layouts/app')

@section('content')
	@include('layouts/categorymenu')
	<div class="container paddingt">
		<h1 class="marginl">{{ $category->name }}</h1>
		@foreach ($products as $product)
			@include('components.product')
		@endforeach
		<a href="/products">&laquo; Back to all products</a>
	</div>

@endsection

<style>
	.marginl{
		margin-left:17%;
	}
	@media screen and (max-width: 888px){
		.paddingt{
			padding-top:20%;
		}
	}
</style>
