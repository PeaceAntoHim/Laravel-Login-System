@extends('layouts.main')
    @section('container')
        <article>
            <h2>{{ $post["title"] }}</h2>
            <h4>{{ $post["author"] }}</h4>
            <p>L{{ $post["body"] }}</p>
        </article>
        <a href="/posts">Back to post</a>
    @endsection