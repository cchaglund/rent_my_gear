@extends('layouts/app')

@section('content')
    <div class="container">
        <h1>{{ $project->name }}</h1>
        <p>{{ $project->description }}</p>
        <a href="/projects">&laquo; Back to all projects</a>
    </div>
@endsection
