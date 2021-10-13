@extends('layouts.main')

 @section('title', 'Comics')

@section('content')
    <section id="comics" class="my-5">
        <div class="card-container d-flex justify-content-center">
            @foreach ($comics as $comic)     
            <div class="card mx-5" style="width: 18rem;">
                <img src="{{$comic->link_img}}" class="card-img-top" alt="{{$comic->title}}">
                <div class="card-body">
                    <h2 class="card-title">{{$comic->title}}</h2>
                <p class="card-text">{{$comic->description}}</p>
                </div>
                <button class="btn btn-main-color"><a href="{{route('comics.show', $comic->id)}}">Dettagli</a></button>
            </div>
            @endforeach
        </div>

        <a href="{{ route('comics.create') }}" class="btn btn-primary">Create a new comic</a>
        


    </section>
@endsection


{{-- {{route('comics.show')}} --}}