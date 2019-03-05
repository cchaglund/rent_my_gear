@extends('layouts/app')

@section('content')
    <div class="container">
        <h1>All Categories</h1>
        <ol>
            @foreach($products as $product)
                <li><a href="/categories/">{{ $product->name }}</a></li>
            @endforeach

        </ol>
    </div>
@endsection
