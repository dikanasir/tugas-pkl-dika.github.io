@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create New Post</h1>
  </div>



  <div class="col-lg-8">
      <form method="post" action="/dashboard/posts" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required autofocus value="{{ old('title') }}">
          @error('title')

          <div class="invalid-feedback">
            {{ $message }}
          </div>

          @enderror

  </div>
  <div class="mb-3">
    <label for="image" class="form-label">Post Image</label>
    <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image">
    @error('image')
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
          <input id="content" type="hidden" name="content" value="{{ old('content') }}">
          <trix-editor input="content"></trix-editor>
         </div>
        </div>
        <button type="submit" class="btn btn-primary">Create Post</button>
        </form>





  <script>
    document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault();
    })
  </script>
@endsection
