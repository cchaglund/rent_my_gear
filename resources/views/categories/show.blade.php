@extends('layouts/app')

@section('content')
    @include('layouts/categorymeny')

    <div class="container">
        <h1>{{ $project->title }}</h1>
        <p>{{ $project->description }}</p>
        <a href="/projects">&laquo; Back to all projects</a>
    </div>
@endsection
