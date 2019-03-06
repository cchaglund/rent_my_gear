@extends('layouts/app')

@section('content')
    @include('layouts/categorymenu')
    <div class="container productbox">
        <div class="card productpadding">
            <div class="container-fliud">
                <div class="wrapper row">
                    <h1>Gör din bokning!</h1>
                    
                </div>
            </div>
        </div>
    </div>
@endsection
<style>
    .productbox{
        display: inline-flex!important;
        flex-direction: column;
        margin-left:14%!important;
        margin-bottom:10px;
    }
    .productpadding{
        background-color: gray;
        padding: 3em;
        line-height: 1.5em
    }
</style>