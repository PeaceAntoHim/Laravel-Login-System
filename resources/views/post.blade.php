@extends('layouts.main')
    @section('container')
            <h1>{{ $post->title }}</h1>
                {!! $post->body !!}
        <a href="/posts">Back to post</a>
    @endsection