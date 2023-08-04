
@extends('layouts.main')

@section('container')


<article class="mt-5">
<h2>
    {{ $post["title"] }}
</h2>
<h5>
    {{ $post["author"] }}
</h5>
<a href="/blog">
    <button type="button" class="btn btn-dark"><i class="bi bi-arrow-left"></i> Back to Posts</button>
</a>
<p>
    {!! $post["content"] !!}
</p>
</article>

<a href="/blog">Back to Posts</a>

@endsection
