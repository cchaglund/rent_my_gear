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