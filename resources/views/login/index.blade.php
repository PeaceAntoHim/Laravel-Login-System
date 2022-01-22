@extends('layouts.main')

    @section('container')
    <div class="row  justify-content-center">
        <div class="col-lg-5 login">
          {{-- Ketika user berhasil di tambahkan --}}
          @if(session()->has('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif

          {{-- Ketikan di session ada login error --}}
          @if(session()->has('loginError'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif

            <main class="form-signin">
                <h1 class="h3 mb-3 fw-normal text-center">Please sign in</h1>
                <form action="/login" method="post">
                  @csrf
                  <div class="form-floating">
                    <input type="email" name="email" class="form-control rounded @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                    <label for="email">Email address</label>
                    @error('email')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                  <div class="form-floating">
                    <input type="password" name="password" class="form-control rounded" id="password" placeholder="Password" required>
                    <label for="password">Password</label>
                  </div>
                  <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
                </form>
                <small class="d-block text-center mt-3">
                    Not registered? <a href="/register">Register Now!</a>
                </small>
              </main>
        </div>
    </div>

   
    @endsection