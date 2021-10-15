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
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Link Image</th>
                    <th scope="col">Delete Date</th>

                  </tr>
                </thead>
                <tbody>
                    @foreach ($comics as $comic)
                    <tr>
                        <td>{{ $comic->title }}</td>
                        <td>{{ $comic->description }}</td>
                        <td>{{ $comic->link_img }}</td>
                        <td>{{ $comic->getDeletedAt() }}</td>

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
