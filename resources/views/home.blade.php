@extends('layouts.app')

@section('title', 'Pagina iniziale')

@section('main-content')
  <section>
    <div class="container py-4">
      <h1>Laravel DC Comics</h1>

      <a href="{{ route("comics.create") }}" class="btn btn-success">Upload new comic</a>
    </div>
  </section>
@endsection
