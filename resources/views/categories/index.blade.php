@extends('layouts/app')

@section('content')
<h1>All Categories</h1>
	<div class="navwidth">
            <div class="accordion" id="accordionExample">
                @foreach($categories as $category)
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#{{ $category->name }}" aria-expanded="true" aria-controls="collapseOne">
                                    {{ $category->name }}
                            </button>
                        </h2>
                    </div>
                    <div id="{{ $category->name }}" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            @foreach($category->products as $product)
                                <a class="nav-link my-1" href="/products/{{ $product->id }}">-{{ $product->name }}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
@endsection
<style>
h1{
    margin-left:10px;
}
.navwidth{
    width:20%;
    margin-left:10px;
}
.card-header{
    padding:0px!important;
}
.card-body{
    padding:0px!important;
}
</style>