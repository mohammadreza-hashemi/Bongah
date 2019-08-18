@extends('layout')


@section('content')
<div class="row">
    <div class="col-md-6">
        <h1>خیابان:{{ $banner->strite }}</h1>
        <h3>{{ $banner->price }}</h3>
        <div class="description">{{ $banner->description }}</div>
    </div>
    <!--if karbar logined == check              کامنت نمیزاره دیو اجرا شه-->
    <!--@if(auth()->check())-->
        <div class="col-md-6">
            @foreach($banner->photos as $photo)
            
            <!-- add link to delete photo-->
            <form method="POST" action="photo/{{ $phpptp->id}}">
                {{ csrf_field }}
                {{ method_field("DELETE") }}
                <button class="close" >&times;</button>
                
            </form>
            
            
            
            
            <img src="{{ $photo->path }}" alt="image">

            @endforeach
        </div>
    <!--@endif-->
</div>
<form action="{{ $banner->strite }}/photos" method="POST" id="addPhotoForm"  class="dropzone">
    {{ csrf_field() }}
    
    
</form>
<hr>




<h3>add your photos</h3>
<script>
Dropzone.options.addPhotoForm = {
    paramName: "photo",
    maxFilesize: 2, // MB
    acceptedFiles: ' .jpj, .jpeg, .png, .gif',
}



</script>
@stop