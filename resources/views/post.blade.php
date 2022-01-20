@extends('layouts.main')
    @section('container')
            <h1>{{ $post->title }}</h1>

                 <p>By. Frans Sebastian in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>

                {!! $post->body !!}
        <a href="/posts">Back to post</a>
    @endsection