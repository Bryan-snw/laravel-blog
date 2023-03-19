@extends('layouts.main')
@section('container')
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h2 class="mb-3">{{ $post->title }}</h2>

                <p>
                    By <a href="/posts?author={{ $post->author->username }}">{{ $post->author->name }}</a>
                    in <a href='/posts?category={{ $post->category->slug }}'>{{ $post->category->name }}</a>
                </p>

                @if ($post->image)
                    <div style="max-height: 400px; overflow:hidden;">
                        <img class="img-fluid" src="{{ asset('storage/' . $post->image) }}" class="card-img-top"
                            alt={{ $post->category->name }}>
                    </div>
                @else
                    <img class="img-fluid" src="https://source.unsplash.com/1200x400?{{ $post->category->name }}"
                        class="card-img-top" alt={{ $post->category->name }}>
                @endif

                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>



                <a class="d-block mb-5 mt-3 text-decoration-none"href="/posts">Back to Posts</a>

            </div>
        </div>
    </div>
@endsection
