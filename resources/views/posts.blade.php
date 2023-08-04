@extends('layouts.main')
@section('container')

@foreach ($posts as $post)
<article class="mb-5 mt-5">
<div class="border border-dark rounded bg-transparent border-3" style="align-content: center">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom border-dark">
        <h2><a href="post/{{ $post["id"] }}" style="text-decoration: none "> {{ $post["title"] }}</a>
        </h2>
      </div>
<h5> By: {{ $post["author"] }}</h5>
<p>{!! $post["content"] !!}</p>

  </div>
</article>
@endforeach


@endsection


