@extends('layouts/app')

@section('content')
  @include('templates/warning')
  
  @foreach ($products as $product)
    @include('components.product')  
  @endforeach
  
  
@endsection
