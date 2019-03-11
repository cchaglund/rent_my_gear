@extends('layouts/app')

@section('content')

  @foreach ($products as $product)
    @include('components.product')  
  @endforeach
  
  
@endsection
