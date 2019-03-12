@extends('layouts/app')

@section('content')
  @include('templates/warning')
  @include('layouts/categorymenu')
  
  @foreach ($products as $product)
    @include('components.product')  
  @endforeach
  
  
@endsection
