@extends('layouts.main')

@section('container')
    
  <h1>Home</h1>

  
  <div class="row">
    @foreach ($posts as $post)
    <div class="col-lg-3">
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">{{ $post->title }}</h5>
          <p class="card-text">{{ $post->body }}</p>
          <a href="/show/{{ $post->slug }}" class="btn btn-primary">Go somewhere</a>
          <a href="/edit/{{ $post->slug }}" class="btn btn-primary">Edit</a>
          <a href="/hapus/{{ $post->slug }}" class="btn btn-primary">Hapus</a>
        </div>
      </div>
    </div>
    @endforeach     
  </div>

@endsection