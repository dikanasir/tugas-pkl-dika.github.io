@extends('dashboard.layouts.main')

@section('container')

<form method="POST" action="{{ route('posts.store') }}">
    @csrf

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create new Post</h1>
      </div>
    <div class="col-lg-8">
        <div class="">
            <a href="/dashboard/posts">
            <span data-feather="arrow-left"></span>
            </a>
        </div>
        <br>
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title">
      </div>
      <br>
      <div class="col-lg-8">
          @trix(\App\Post::class, 'content')
      </div>
      <br>
      <button class="btn btn-primary" type="submit">Post Content</button>
</form>

@endsection
