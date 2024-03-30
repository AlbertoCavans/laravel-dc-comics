@extends('layouts.app')

@section('title', 'Pagina iniziale')

@section('main-content')
  <section>
    <div class="container py-4">
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
            <th></th>
        </thead>

        <tbody>
            @forelse($comics as $comic)
            <tr>
                <td>{{ $comic->id }}</td>
                <td>{{ $comic->title }}</td>
                <td>{{ $comic->author }}</td>
                <td>{{ $comic->cover }}</td>
                <td>{{ $comic->description }}</td>
                <td>{{ $comic->origin_country }}</td>
                <td>{{ $comic->publication_date }}</td>
                <td>{{ $comic->sold_copies }}</td>
                <td>{{ $comic->publication_status }}</td>
                <td></td>
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
