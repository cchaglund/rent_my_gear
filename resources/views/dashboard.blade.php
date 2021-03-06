@extends('layouts.app')

@section('content')
    <div class="container widthbox paddingt margin">
        @include('templates/status')
        @if (isset($message))
            {{ $message }}    
        @endif
        <div class="paddingt">
            <h2 class="marginl">Renting out</h2>
            @if ($rented_out_gear->isEmpty())
                <h6 class="message">Nothing's out at the moment!</h6>
            @endif
            @foreach ($rented_out_gear as $booking)
                @if ($booking->owner_id == $user->id || $user->id == 0)
                    @include('components.booking')
                @endif
            @endforeach
        
            <h2 class="marginl">Your loans</h2>
            @if ($bookings->isEmpty())
                <h6 class="message">You don't have any loans</h6>
            @endif
            @foreach ($bookings as $booking)
                @include('components.booking')
            @endforeach

            <h2 class="marginl">All Gear</h2>
            @if ($products->isEmpty())
                <h6 class="message">Why don't you <a href="/products/create">add some products?</a></h6>
            @endif
            @foreach ($products as $product)
                @include('components.product')
            @endforeach
        </div>
    </div>
@endsection

<style>
    .message {
        padding: 1rem;
    }
    .margin{
        margin-bottom:20px;
    }
    .productpadding{
        margin-left:0!important;
    }
    @media screen and (max-width: 800px){
        .paddingt{
            padding-top:20%;
        }
        .widthbox{
            width:100%!important;
        }
        .margin{
            margin-left:0%!important;
        }
    }   
</style>
