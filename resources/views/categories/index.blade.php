@extends('layouts/app')

@section('content')
    <div class="container">
        <h1>All Categories</h1>
        <ol>
            @foreach($categories as $category)
                <li><a href="/categories/">{{ $category->name }}</a></li>

                @foreach($products as $product)
                    <a href="/categories/">- {{ $product->name }}</a>
                @endforeach 
            @endforeach
        </ol>
    </div>
@endsection
