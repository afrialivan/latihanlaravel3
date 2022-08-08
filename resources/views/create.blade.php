@extends('layouts.main')

@section('container')
<form action="/create" method="POST">
  @csrf
  <div class="mb-3">
    <label for="title" class="form-label">Judul</label>
    <input type="text" name="title" class="form-control" id="title" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="slug" class="form-label">Slug</label>
    <input type="text" name="slug" class="form-control" id="slug" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="body" class="form-label">Body</label>
    <input type="text" name="body" class="form-control" id="body" aria-describedby="emailHelp">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection