@extends('layout.main')

@section('title')
    Posts
@endsection

@section('content')
    @forelse ($posts as $post)
    <div class="card">
  <div class="card-body">
    <h5 class="card-title">{{ $post->title }}</h5>
    <p class="card-text">
        <span class="badge badge-info"> Di Buat</span> = {{  $post->created_at->diffForHumans() }} 
        <span class="badge badge-info">Di Update</span> = {{  $post->updated_at->diffForHumans() }}</p>
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>      
    @empty
        <h4>Tidak Ada Postingan!!</h4>
    @endforelse
@endsection