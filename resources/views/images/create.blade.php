@extends('layout')


@section('content')

<h1>Selling your home</h1>
<div class="row">
    <form action="{{route('banners.store')}}" method="POST" class="col-md-6">
           @include('images.form')
    </form>
</div>   

 @if(count($errors) > 0)
    <ul>
        <div class="aler alert-danger" >
        @foreach($errors->all() as $error)
        
        <li>{{$error}}</li>
        @endforeach
        
        </div>
    </ul>
    
    
    @endif
   
    
    
    
<!--@include('partials.partials')-->


@stop 