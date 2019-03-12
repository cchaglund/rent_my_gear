@extends('layouts/app')

@section('content')
<div class="flex">
    @include('layouts/categorymenu')

  @include('templates/warning')
  
  @foreach ($products as $product)
    @include('components.product')  
  @endforeach
</div>
@endsection

<style>
  @media screen and (max-width: 800px){
		.paddingt{
			padding-top:20%;
    }
  }
</style>