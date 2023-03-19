@extends('layouts.main')
@section('container')
<div class="row justify-content-center">
   <div class="col-lg-6">

      @if(session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
         {{ session('success') }}
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
         </button>
      </div>
      @endif

      @if(session()->has('loginError'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
         {{ session('loginError') }}
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
         </button>
      </div>
      @endif

      <main class="form-singin">
         <h1 class="h3 mb-3 font-weight-normal text-center">Please Login</h1>
         <form class="form-signin" action="/login" method="POST">
            {{-- csrf memberikan token untuk mencegah req jahat yang bukan berrasal dari web kita  --}}
            @csrf
            
            <label for="email" class="sr-only">Email address</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" placeholder="Email address" required autofocus>
            @error('email')
            <div class="invalid-feedback">
               {{ $message }}
            </div>
            @enderror

            <label for="password" class="sr-only">Password</label>
            <input type="password" id="password" name="password" class="form-control @error('email') is-invalid @enderror"" placeholder="Password" required>

            <button class="btn btn-lg btn-primary btn-block mt-3" type="submit">Login</button>
         </form>
         <small class=" mt-3 text-center d-block">
            Don't have an account? <a href="/register">Register Now</a>
         </small>
      </main>
   </div>
</div>
@endsection