@extends('dashboard.layouts.main')

@section('container')


<article class="mt-5 col-lg-8" style="height: 200px">
    <h2>
        {{ $post["title"] }}
    </h2>

    <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to all my posts</a>
    <a href="/dashboard/posts/{{ $post->id }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
    <form action="/dashboard/posts/{{ $post->id }}" method="post" class="d-inline">

        @method('delete')
        @csrf
        <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span> Delete</button>

    </form>


    <h5 class="mt-3">
        {{ $post["author"] }}
    </h5>
    <p>
        {!! $post["content"] !!}
    </p>
    </article>


@endsection


