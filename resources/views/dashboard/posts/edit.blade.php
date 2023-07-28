@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Post</h1>
  </div>



  <div class="col-lg-8">
      <form method="post" action="/dashboard/posts/{{ $post->id }}">
        @method('put')
        @csrf
        <div class="">
            <a href="/dashboard/posts">
            <span data-feather="arrow-left"></span>
            </a>
        </div>
        <br>
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required autofocus value="{{ old('title', $post->title) }}">
          @error('title')

          <div class="invalid-feedback">
            {{ $message }}
          </div>

          @enderror

  </div>
  <div>
      <form method="post" action="/dashboard/posts">
        @csrf

        <div class="mb-3">
          <label for="content" class="form-label">Content</label>
          @error('content')
              <p class="text-danger">
                {{ $message }}
            </p>
          @enderror
          <input id="content" type="hidden" name="content" value="{{ old('content', $post->content) }}">
          <trix-editor input="content"></trix-editor>
         </div>
        </div>
        <button type="submit" class="btn btn-primary">Update Post</button>
        </form>




@endsection
