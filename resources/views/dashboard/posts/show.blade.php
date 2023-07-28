@extends('dashboard.layouts.main')

@section('container')
<br>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h2>
        {{ $post["title"] }}
    </h2>
  </div>

<h5>
    Author : {{ $post["author"] }}
</h5>
<a href="/dashboard/posts">
    <button type="button" class="btn btn-success btn-sm"><span data-feather="arrow-left"></span> Back to Posts</button>
</a>
<a href="/dashboard/posts/{{ $post->id }}/edit">
    <button type="button" class="btn btn-warning btn-sm"><span data-feather="edit"></span> Edit Post</button>
</a>
<form action="/dashboard/posts/{{ $post->id }}" method="post" class="d-inline">

    @method('delete')
    @csrf
    <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span> Delete Post</button>

</form>


<p>
    {!! $post->content !!}
</p>


@endsection


