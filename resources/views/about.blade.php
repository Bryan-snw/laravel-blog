@extends('layouts.main')
@section('container')
    <div class="col-lg-6">

        <h1>Halaman About</h1>
        <img src="img/{{ $img }}" class="rounded d-block" width="200" alt="{{ $name }}">
        <h1>Nice to meet you</h1>
        <p>
            i&apos;m Judith Bryan Leonard Sie, a fresh graduate in computer
            science. i have interest in software development especially at web
            development. I&apos;m looking forward to work in technology
            industry. Check out my other work in <a href="https://bryan-sie.vercel.app/" target="_blank">here</a>
        </p>
    </div>
@endsection
