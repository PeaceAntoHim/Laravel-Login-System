@extends('layouts.main')

@section('container')

    <h1 class="mb-5">{{ $title }}</h1>

    @if ($posts->count())
        {{-- Card Hero --}}
        <div class="card mb-3">
            <img src="https://source.unsplash.com/950x450?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
            <div class="card-body text-center">
            <h3 class="card-title">{{ $posts[0]->title }}</h3>
                <p>
                    <small class="text-muted">
                        By. <a href="/authors/{{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> Topic <a href="/categories/{{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a>
                        <br>
                        {{ $posts[0]->created_at->diffForHumans() }}
                    </small>

                </p>

            <p class="card-text">{{ $posts[0]->excerpt }}</p>

            <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn-sm btn-primary">Read more</a>
        </div>
    </div>
    @else
    <p class="text-center fs-4">No Post Found</p>
    @endif

    
    <div class="container kartu">
        @foreach ($posts->skip(1) as $post)
        <div class="row justify-content-center">
            <div class="col-md-10 mb-3">
                <div class="card">
                    <div class="position-absolute px-3 py-1.5" style="background-color: rgba(0, 0, 0, 0.8)"><a href="/categories/{{ $post->category->slug }}" class="text-white text-decoration-none">{{ $post->category->name }}</a></div>
                    <img src="https://source.unsplash.com/800x300?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                    <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p>
                        <small class="text-muted">
                            By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> 
                            <br>
                            {{ $posts[0]->created_at->diffForHumans() }}
                        </small>
                    </p>
                    <p class="card-text">{{ $post->excerpt }}</p>
                    <a href="/posts/{{ $post->slug }}" class="text-decoration-none btn-sm btn-primary">Read more</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

@endsection