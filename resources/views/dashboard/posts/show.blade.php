@extends('dashboard.layouts.main')
@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h2 class="mb-3">{{ $post->title }}</h2>

                <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to all my
                    posts</a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span>
                    Edit</a>

                <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="text-white btn btn-danger" onclick="return confirm('Are you sure?');"><span
                            data-feather="x-circle"></span> Delete</button>
                </form>

                @if ($post->image)
                    <div style="max-height: 400px; overflow:hidden;">
                        <img class="img-fluid mt-3" src="{{ asset('storage/' . $post->image) }}" class="card-img-top"
                            alt={{ $post->category->name }}>
                    </div>
                @else
                    <img class="img-fluid mt-3" src="https://source.unsplash.com/1200x400?{{ $post->category->name }}"
                        class="card-img-top" alt={{ $post->category->name }}>
                @endif


                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>


            </div>
        </div>
    </div>
@endsection
