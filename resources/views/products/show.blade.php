@extends('layouts/app')

@section('content')
    <div class="flex">
        @include('layouts/categorymenu')
        @include('templates/warning')
        @include('components.product')  
    </div>
@endsection
