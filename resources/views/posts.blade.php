@extends('layouts.main')
@section('container')

@foreach ($posts as $post)
<article class="mb-5 mt-5">
<h2><a href="post/{{ $post["id"] }}" style="text-decoration: none ">{{ $post["title"] }}</a>
</h2>
<h5>By: {{ $post["author"] }}</h5>
<p>{!! $post["content"] !!}</p>
</article>
@endforeach


@endsection


