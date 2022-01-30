@extends('layout.main')

@section('title')
    Create Post
@endsection

@section('content')
    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        {{-- Title --}}
        <div class="form-group">
            <label for="title">Title</label>
            <input class="form-control" type="text" name="title">
        </div>
        {{-- Thumbnail --}}
        <div class="form-group">
            <label for="thumbnail">Thumbnail</label>
            <input class="form-control" type="file" name="thumbnail">
        </div>
        {{-- Content --}}
        <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control" name="content" cols="30" rows="4"></textarea>
        </div>
        <div class="from-group">
            <input class="btn btn-primary" type="submit" value="Create">
        </div>
    </form>
@endsection