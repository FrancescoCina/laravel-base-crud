@extends('layouts.main')

@section('title',  $comic->title)

@section('content')
<div class="container"><a class="btn btn-secondary mt-3" href="{{ url()->previous() }}">Indietro</a></div>
<section id="comic" class="my-5 d-flex justify-content-center">
   
    <div class="card-container d-flex justify-content-center">
        <div class="card mx-5" style="width: 18rem;">
            <img src="{{$comic->link_img}}" class="card-img-top" alt="{{$comic->title}}">
            <div class="card-body">
                <h2 class="card-title">{{$comic->title}}</h2>
            <p class="card-text">{{$comic->description}}</p>
            </div>
    <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-warning">Edit</a>

        </di>
    </div>
</section>

@endsection