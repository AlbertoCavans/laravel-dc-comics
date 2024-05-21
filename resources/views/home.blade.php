@extends('layouts.app')


@section('title', 'Pagina iniziale')

@section('main-content')
  <section class="bg-primary h-100">
    <div class="container py-4">
      <h1 class="text-white">Laravel DC Comics</h1>

       <div class="card mb-3 w-75">
       <p class="h5 p-4 ">
       Welcome to our Comics Platform, here you can find information about your favourite comics and
       you can buy them with few clicks.

       Go to our Comics List and choose your next purchase.
       </p>
       <div class="d-flex">
       <a href="{{ route("comics.create") }}" class="btn btn-success m-3 w-25">Upload new comic</a>
       <a href="{{ route("comics.index") }}" class="btn btn-secondary m-3 w-25">Go to our comics list</a>
       </div>
       </div>

      
    </div>

    
  </section>
@endsection
