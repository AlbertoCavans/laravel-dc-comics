@extends('layouts.app')

@section('title', "Details $comic->title")

@section('main-content')
  <section>
    <div class="container py-4">
      <h1>Details of "{{ $comic->title }}"</h1>

      <div class="row">
        <div class="col-4">
            <img src="{{ $comic->cover }}" class="img-fluid" alt="">
        </div>
        <div class="col-8">
            <div class="row">
                <div class="col-6">
                    <h5><strong>Author: </strong>{{ $comic->get_full_name_author() }}</h5>
                </div>

            </div>
            <div class="row my-4">
                <div class="col-6">
                    <h5><strong>Publication date: </strong>{{ $comic->publication_date }}</h5>
                </div>
                <div class="col-6">
                    <h5><strong>Sold Copies: </strong>{{ $comic->sold_copies }}</h5>
                </div>
            </div>
            <div class="row">
            <div class="col-12">
                    <h5><strong>Publication Status: </strong>{{ $comic->publication_status }}</h5>
                </div>
            </div>
            <div class="row my-4">
                <div class="col-12">
                    <h4><strong>Plot:</strong></h4>
                    <p class="h6">{{ $comic->description }}</p>
                </div>
            </div>
            <div class="row">

                <div class="col-3">
                    <a href="{{ route("comics.edit", $comic->id) }}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i> Fix info</a>
                </div>

                <div class="col-3">
                    <a href="{{ route("comics.index") }}" class="btn btn-secondary"><i class="fa-solid fa-rotate-left"></i> Go back to list</a>
                </div>

            </div>
        </div>
      </div>
    </div>
  </section>
@endsection


@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection