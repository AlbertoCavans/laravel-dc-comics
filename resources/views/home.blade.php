@extends('layouts.app')


@section('title', 'Pagina iniziale')

@section('main-content')
  <section>
    <div class="container py-4">
      <h1 class="text-white">Laravel DC Comics</h1>
      <div class="jumbo d-flex justify-content-center">
       <img src="https://placehold.co/1800x1200?text=This+is+a+placeholder" class="w-100 mb-3">
       </div>

       <div class="card mb-3 w-75">
       <p class="h5 p-4 ">
       Welcome to our Comics Platform, here you can find information about your favourite comics and
       you can buy them with few clicks.

       Go to our Comics List and choose your next purchase.
       </p>
       <div class="d-flex">
       <a href="{{ route("comics.create") }}" class="btn btn-success m-3 w-25">
       <span class="d-none d-md-inline">Upload new comic</span>
       <span class="d-inline d-md-none"><i class="fa-solid fa-upload"></i></span>
       </a>
       <a href="{{ route("comics.index") }}" class="btn btn-secondary m-3 w-25">
       <span class="d-none d-md-inline">Go to our comics list</span>
       <span class="d-inline d-md-none"><i class="fa-solid fa-table-list"></i></span>
       </a>
       </div>
       </div>

      
    </div>

    
  </section>
@endsection


@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection