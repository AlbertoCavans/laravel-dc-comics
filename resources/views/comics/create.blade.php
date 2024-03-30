@extends('layouts.app')

@section('title', 'Register a New Comic')

@section('main-content')
  <section>
    <div class="container py-4">
      <h1>Register a New Comic</h1>

      <form action="{{ route("comics.store") }}" class="row" method="POST">
        @csrf

        <div class="col-4">
        <label for="title" class="form-label">Title</label>
        <input class="form-control" id="title" type="text" required name="title" max="30">
        </div>

        <div class="col-4">
        <label for="first_name_author" class="form-label">First Name Author</label>
        <input class="form-control" id="first_name_author" required type="text" name="first_name_author">
        </div>

        <div class="col-4">
        <label for="last_name_author" class="form-label">Last Name Author</label>
        <input class="form-control" id="last_name_author" required type="text" name="last_name_author">
        </div>

        
        <div class="col-4">
        <label for="cover" class="form-label">Url Cover</label>
        <input class="form-control" id="cover"required  type="url" name="cover">
        </div>

        <div class="col-8">
        <label for="description" class="form-label">Description/Plot</label>
        <textarea class="form-control" id="description" required type="text" name="description"></textarea>
        </div>
        
        
        <div class="col-4">
        <label for="origin_country" class="form-label">Origin Country</label>
        <input class="form-control" id="origin_country" required type="text" name="origin_country">
        </div>
        
        <div class="col-4">
        <label for="publication_date" class="form-label">Publication Date</label>
        <input class="form-control" id="publication_date" required type="date" name="publication_date">
        </div>
        
        <div class="col-4">
        <label for="sold_copies" class="form-label">Sold Copies</label>
        <input class="form-control" id="sold_copies" required type="number" max="2000000000" name="sold_copies">
        </div>
        
        <div class="col-4">
        <label for="publication_status" class="form-label">Publication Status</label>
        <select name="publication_status" id="publication_status" required class="form-select">
            <option value="ongoing">Ongoing</option>
            <option value="finished">Finished</option>
            <option value="paused">Paused</option>
            <option value="uncompleted">Uncompleted</option>
        </select>
        </div>

        
    
    
        <div class="col-6">
        <button class="btn btn-primary mt-4"><i class="fa-solid fa-upload"></i>  Register Comic</button>
        </div>

        
      </form>
    </div>
  </section>
@endsection

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection