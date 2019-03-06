@extends('layouts/app')

@section('content')
    @include('layouts/categorymenu')

    <div class="container">
        <h1>{{ $category->name }}</h1>
        
        <a href="/projects">&laquo; Back to all projects</a>
    </div>
@endsection
