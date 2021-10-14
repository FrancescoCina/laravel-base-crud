@extends('layouts.main')

@section('title', 'Trash Bin')

@section('content')
    <section id="trashed-comics" class="my-5">
       
        
       {{--  <div class="container my-3">
            @if(session('delete'))
            <div class="alert alert-success" role="alert">
                Il fumetto: {{ session('delete') }} è stato correttamente eliminato!
            </div>
            @endif
        </div> --}}
        
        <div class="card-container container d-flex justify-content-center">
           
{{-- 
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
            @endforeach --}}









            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Link Image</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($comics as $comic)
                    <tr>
                        <td>{{ $comic->title }}</td>
                        <td>{{ $comic->description }}</td>
                        <td>{{ $comic->link_img }}</td>
                        <td>
                            <form method="POST" action="{{ route('comics.restore', $comic->id) }}">
                                @csrf
                                @method('PATCH')
                                <button class="btn btn-secondary" type="submit">Restore</button>
                            </form>


                        </td>


                      </tr>

                    @endforeach
                </tbody>
            </table>

























        </div>  
    </section>
@endsection
