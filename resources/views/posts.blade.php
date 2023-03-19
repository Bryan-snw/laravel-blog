{{-- @dd($posts); --}}

@extends('layouts.main')

@section('container')
    <h1 class="mb-3 text-center">{{ $title }}</h1>

    <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            <form action="/posts" method="GET">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" value="{{ request('search') }}" placeholder="Search..."
                        name="search">
                    <button class="btn btn-danger" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>

    {{-- Cek apakah ada Post atau tidak --}}
    @if ($posts->count())
        <div class="card mb-3">
            @if ($posts[0]->image)
                <div style="max-height: 400px; overflow:hidden;">
                    <img class="img-fluid" src="{{ asset('storage/' . $posts[0]->image) }}" class="card-img-top"
                        alt={{ $posts[0]->category->name }}>
                </div>
            @else
                <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top"
                    alt={{ $posts[0]->category->name }}>
            @endif

            <div class="card-body text-center">
                <h3 class="card-title"><a class="text-decoration-none text-dark"
                        href="/posts/{{ $posts[0]->slug }}">{{ $posts[0]->title }}</a></h3>
                <p>
                    <small class="text-muted">
                        By <a href="/posts?author={{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a>
                        in <a href='/posts?category={{ $posts[0]->category->slug }}'>{{ $posts[0]->category->name }}</a>
                        {{ $posts[0]->created_at->diffForHumans() }}
                    </small>
                </p>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>

                <a class="text-decoration-none btn btn-primary" href="/posts/{{ $posts[0]->slug }}">
                    Read more
                </a>

            </div>
        </div>

        <div class="container">
            <div class="row">
                @foreach ($posts->skip(1) as $post)
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="position-absolute px-3 py-2" style="background-color: rgba(0,0,0,0.7)">
                                <a class="text-decoration-none text-white"
                                    href="/posts?category={{ $post->category->slug }}">
                                    {{ $post->category->name }}
                                </a>
                            </div>
                            @if ($post->image)
                                <img class="img-fluid" src="{{ asset('storage/' . $post->image) }}" class="card-img-top"
                                    alt={{ $post->category->name }}>
                            @else
                                <img src="https://source.unsplash.com/500x300?{{ $post->category->name }}"
                                    class="card-img-top" alt={{ $post->category->name }}>
                            @endif

                            <div class="card-body">
                                <h5 class="card-title"><a class="text-decoration-none text-dark"
                                        href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h5>
                                <p>
                                    <small class="text-muted">
                                        By <a
                                            href="/posts?author={{ $post->author->username }}">{{ $post->author->name }}</a>
                                        {{ $post->created_at->diffForHumans() }}
                                    </small>
                                </p>
                                <p class="card-text">{{ $post->excerpt }}...</p>
                                <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <p class="text-center fs-4">No Post Found</p>
    @endif
    <div class="d-flex justify-content-center">
        {{ $posts->links() }}
    </div>

@endsection
