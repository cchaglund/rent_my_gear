@extends('layouts/app')

@section('content')
<div class="flex">
  @include('layouts/categorymenu')

  @include('templates/warning')
  
  @include('components.product')  

</div>
@endsection


<style>


    .directionbox{
        flex-direction: column!important;
    }
    .bookbar{
        width:80%;
    }
    .productimg{
        width:50%!important;
    }
    .productpadding{
        margin-left:20%!important;
    }

    @media screen and (max-width: 800px){
		.paddingt{
			padding-top:20%;
        }
        .productpadding{
            margin-left:0%!important;
        }
    }
</style>