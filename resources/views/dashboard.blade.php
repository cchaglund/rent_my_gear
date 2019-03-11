@extends('layouts.app')

@section('content')
    @if (isset($message))
        {{ $message }}    
    @endif
    
    <h3 class="marginl">Renting out</h3>
    @foreach ($rented_out_gear as $booking)
    
        @if ($booking->owner_id == $user->id)
            @include('components.booking')
        @endif
    @endforeach
    
    <h3 class="marginl">Your loans</h3>
        @foreach ($bookings as $booking)
            @include('components.booking')
        @endforeach

    <h3 class="marginl">All Gear</h3>
    @foreach ($products as $product)
        @include('components.product')
    @endforeach


@endsection

    {{-- <div class="d-flex justify-content-center">
        <Dashboard
            :bookings_string="{{$bookings}}"
            :products_string="{{$products}}"></Dashboard>
    </div> --}}



    {{-- 
    <div class="d-flex">
        <div>
            @include('components.product')
        </div>
        <div>
            @include('components.product')
        </div>
    </div> --}}

<style>
	.marginl{
        margin-left:15px;
    }
</style>
