@extends('layouts.main')

@section('container')

    <h1 class="mb-5 text-center">{{ $title }}</h1>

    <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            <form action="/posts">
                @if(request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if(request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search blog..." name="search" value="{{ request('search') }}">
                    <button class="btn btn-outline-primary" type="submit" id="button-addon2">Search</button>
                  </div>
            </form>
        </div>
    </div>

    @if ($posts->count())
        {{-- Card Hero --}}
        <div class="card mb-3">
            <div class="position-absolute px-3 py-1.5" style="background-color: rgba(255, 69, 69, 0.705)"><a href="/posts?category={{ $posts[0]->category->slug }}" class="text-white text-decoration-none">New {{ $posts[0]->category->name }} Post</a></div>
            <img src="https://source.unsplash.com/950x450?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
            <div class="card-body text-center">
            <h3 class="card-title">{{ $posts[0]->title }}</h3>
                <p>
                    <small class="text-muted">
                        By. <a href="/posts?author={{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> Topic <a href="/posts?category={{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a>
                        <br>
                        {{ $posts[0]->created_at->diffForHumans() }}
                    </small>

                </p>

            <p class="card-text">{{ $posts[0]->excerpt }}</p>

            <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn-sm btn-primary">Read more</a>
        </div>
    </div>
  

    
    <div class="container kartu">
        @foreach ($posts->skip(1) as $post)
        <div class="row justify-content-center">
            <div class="col-md-10 mb-3">
                <div class="card">
                    <div class="position-absolute px-3 py-1.5" style="background-color: rgba(0, 0, 0, 0.8)"><a href="/posts?category={{ $post->category->slug }}" class="text-white text-decoration-none">{{ $post->category->name }}</a></div>
                    <img src="https://source.unsplash.com/800x300?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                    <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p>
                        <small class="text-muted">
                            By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> 
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

    @else
    <p class="text-center fs-4">No Post Found</p>
    @endif

    <div class="d-flex justify-content-end">
        {{ $posts->links() }}
    </div>

@endsection