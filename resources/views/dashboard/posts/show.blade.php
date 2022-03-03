@extends('dashboard.layouts.main')

    @section('container')

    <div class="container">
        <div class="row justify-content-center my-3">
            <div class="col-lg-10">
                <h1 class="mb-3">{{ $post->title }}</h1>
                    <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to all my posts</a>
                    <a href="" class="btn btn-warning"><span data-feather="edit"></span> Edit this posts</a>
                    <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger" onclick="return confirm('Are you sure to delete this post?')"><span data-feather="x-circle"> </span> Delete this post</button>
                    </form>
                <img src="https://source.unsplash.com/950x500?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>

        <a href="/posts" class="d-block mt-3">Back to post</a>
            </div>
        </div>
    </div>

    @endsection