@extends('layouts.main')
@section('container')
<div class="row justify-content-center">
   <div class="col-lg-5">

      <main class="form-registration">
         <h1 class="h3 mb-3 font-weight-normal text-center">Registration Form</h1>
         <form class="form-signin" action="/register" method="POST">

            {{-- csrf memberikan token untuk mencegah req jahat yang bukan berrasal dari web kita  --}}
            @csrf

            <label for="name" class="sr-only">Name</label>
            <input required value="{{ old('name') }}" type="text" id="name" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" placeholder="Name" >
            @error('name')
               <div class="invalid-feedback">
                  {{ $message }}
               </div>
            @enderror
            
            <label for="username" class="sr-only">Username</label>
            <input required value="{{ old('username') }}" type="text" id="username" name="username" class="form-control @error('username') is-invalid @enderror" placeholder="Username" >
            @error('username')
               <div class="invalid-feedback">
                  {{ $message }}
               </div>
            @enderror


            <label for="email" class="sr-only">Email address</label>
            <input required value="{{ old('email') }}" type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email address" >
            @error('email')
               <div class="invalid-feedback">
                  {{ $message }}
               </div>
            @enderror

            <label for="password" class="sr-only">Password</label>
            <input required type="password" id="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" name="password" placeholder="Password" >
            @error('password')
               <div class="invalid-feedback">
                  {{ $message }}
               </div>
            @enderror


            <button class="btn btn-lg btn-primary btn-block mt-3" type="submit">Register</button>
         </form>
         <small class=" mt-3 text-center d-block">
            Already have an account? <a href="/login">Login</a>
         </small>
      </main>
   </div>
</div>
@endsection