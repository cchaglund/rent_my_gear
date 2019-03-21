@extends('layouts.app')

@section('content')
    <div class="container widthbox paddingt margin">
        @include('templates/status')
        @if (isset($message))
            {{ $message }}    
        @endif
        <div>
            <h2>Renting out</h2>
            @if ($rented_out_gear->isEmpty())
                <h6 class="message">Nothing's out at the moment!</h6>
            @endif
            @foreach ($rented_out_gear as $booking)
                @if ($booking->owner_id == $user->id || $user->id == 0)
                    @include('components.booking')
                @endif
            @endforeach
        
            <h2>Your loans</h2>
            @if ($bookings->isEmpty())
                <h6 class="message">You don't have any loans</h6>
            @endif
            @foreach ($bookings as $booking)
                @include('components.booking')
            @endforeach

            <h2>All Gear</h2>
            @if ($products->isEmpty())
                <h6 class="message">Why don't you <a href="/products/create">add some products?</a></h6>
            @endif
            @foreach ($products as $product)
                @include('components.product')
            @endforeach
        </div>
    </div>
@endsection
