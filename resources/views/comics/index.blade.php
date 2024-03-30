@extends('layouts.app')

@section('title', 'Comics List')

@section('main-content')
  <section>
    <div class="container py-4">

    <a href="{{ route("comics.create") }}" class="btn btn-success">Upload new comic</a>

      <h1>Comics List</h1>

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
            </tr>

            @empty
            <tr colspan="100%">
                No Result
            </tr>
            @endforelse
        </tbody>
      </table>

      {{$comics->links()}}
    </div>
  </section>
@endsection
