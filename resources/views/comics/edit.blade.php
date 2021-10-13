@extends('layouts.main')

@section('title', 'Edit Comic')

@section('content')
<section id="create-comic" class="my-5">
    <div class="container"><a class="btn btn-secondary" href="{{ url()->previous() }}">Indietro</a></div>
    <div class="container">
        <h1>Edit your Comic!!</h1>
        <form method="POST" action="{{ route('comics.update', $comic->id) }}">
            @csrf
            @method('PATCH')

            <div class="mb-3">
              <label for="title" class="form-label">Insert comic's title</label>
              <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}">
            </div>
            <div class="mb-3">
                <label for="link_img" class="form-label">Insert the link of image for comic's cover</label>
              <input type="text" class="form-control" id="link_img" name="link_img" value="{{ $comic->link_img }}">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Insert price</label>
              <input type="number" class="form-control" id="price" name="price" step="any" value="{{ $comic->price }}">
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Insert the date sale</label>
              <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{ $comic->sale_date }}">
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Insert type</label>
              <input type="text" class="form-control" id="type" name="type" value="{{ $comic->type }}">
            </div>
            <div class="form-floating">
                <textarea class="form-control" id="description" name="description">{{ $comic->description }}" }}</textarea>
              </div>
            <button type="submit" class="my-3 btn btn-primary">Edit</button>
          </form>
    </div>
</section>


@endsection