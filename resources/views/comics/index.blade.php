@extends('layouts.app')

@section('title', 'Comics List')

@section('main-content')
  <section>
    <div class="container py-4">

      <h1 class="text-white">Comics List</h1>
      <div class="card">
      <div class="card-header">
          <a href="{{ route("comics.create") }}" class="btn btn-success">Upload new comic</a>
      </div>

      <div class="card-body">
      <table class="table">
        <thead>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Cover</th>
            <th>Description</th>
            <th>Origin Country</th>
            <th>Publication Date</th>
            <th>Sold Copies</th>
            <th>Status of publication</th>
            <th>Comic page</th>
            <th>Fix info</th>
            <th>Delete comic</th>
        </thead>

        <tbody>
            @forelse($comics as $comic)
            <tr>
                <td>{{ $comic->id }}</td>
                <td>{{ $comic->title }}</td>
                <td>{{ $comic->get_full_name_author() }}</td>
                <td><img src="{{ $comic->cover }}" alt="" width="100" height="150"></td>
                <td>{{ $comic->description }}</td>
                <td>{{ $comic->origin_country }}</td>
                <td>{{ $comic->publication_date }}</td>
                <td>{{ $comic->sold_copies }}</td>
                <td>{{ $comic->publication_status }}</td>
                <td><a href="{{ route("comics.show", $comic) }}">See details</a></td>
                <td><a href="{{ route("comics.edit", $comic->id) }}"><i class="fa-solid fa-pen-to-square"></i></a></td>
                <td><form action="{{ route("comics.destroy", $comic) }}" method="POST">
                @csrf
                @method('DELETE')
                  <button class="btn btn-warning"> <i class="fa-solid fa-rectangle-xmark text-danger"></i></button>
                </form></td>

            </tr>

            @empty
            <tr colspan="100%">
                No Result
            </tr>
            @endforelse
        </tbody>
      </table>
      </div>
      <div class="card-footer">
      
      {{$comics->links()}}
      </div>
      </div>
    </div>
  </section>
@endsection

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
