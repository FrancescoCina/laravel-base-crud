@extends('layouts.main')

 @section('title', 'Comics')

@section('content')
    <section id="comics" class="my-5">
        <div class="container mb-5"><a href="{{ route('comics.create') }}" class="btn btn-primary" id="creation-button">Create a new comic</a></div>
        <div class="card-container d-flex justify-content-center">
        

            @foreach ($comics as $comic)     
            <div class="card mx-5" style="width: 18rem;">
                <img src="{{$comic->link_img}}" class="card-img-top" alt="{{$comic->title}}">
                <div class="card-body">
                    <h2 class="card-title">{{$comic->title}}</h2>
                <p class="card-text">{{$comic->description}}</p>
                </div>
                <a class="btn btn-main-color" href="{{route('comics.show', $comic->id)}}">Details</a>
                <a class="btn btn-warning" href="{{ route('comics.edit', $comic->id) }}" >Edit</a>
                <form method="POST" action="{{ route('comics.destroy', $comic->id) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="w-100 btn btn-danger">Delete</button>
                </form>
            
            </div>
            @endforeach
        </div>

      
        


    </section>
@endsection


{{-- {{route('comics.show')}} --}}