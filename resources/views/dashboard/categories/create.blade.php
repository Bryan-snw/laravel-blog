@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create New Post Categories</h1>
    </div>

    <div class="col-lg-8">

        <form action="/dashboard/categories" method="POST" class="mb-5">
            @csrf
            <div class="form-group">
                <label for="name">name</label>
                <input value="{{ old('name') }}" required autofocus type="text"
                    class="form-control @error('name') is-invalid @enderror" id="name" name="name">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="slug">Slug</label>
                <input value="{{ old('slug') }}" required type="text"
                    class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug">
                @error('slug')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Create Post</button>
        </form>
    </div>

    <script>
        const name = document.querySelector('#name');
        const slug = document.querySelector('#slug');

        name.addEventListener('change', function() {
            // sluggable cek di routes/web dan juga di masing" model dan controller
            fetch(`/dashboard/categories/checkSlug?name=${name.value}`)
                .then(response => response.json())
                .then(data => slug.value = data.slug);
        });
    </script>
@endsection
