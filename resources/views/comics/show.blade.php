@extends('layouts.main')

@section('title',  $comic->title)

@section('content')
<section id="comic" class="my-5">
    <div class="card-container d-flex justify-content-center">
        <div class="card mx-5" style="width: 18rem;">
            <img src="{{$comic->link_img}}" class="card-img-top" alt="{{$comic->title}}">
            <div class="card-body">
                <h2 class="card-title">{{$comic->title}}</h2>
            <p class="card-text">{{$comic->description}}</p>
            </div>
        </div>
    </div>
</section>

@endsection