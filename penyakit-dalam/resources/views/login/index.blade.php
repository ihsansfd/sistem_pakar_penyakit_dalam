@extends('layouts.main')

@section('content')
<div class="container-fluid mt-3">
<div class="row justify-content-center">
    <div class="col col-12">
        <h1 class="text-center mb-3">Login</h1>
        <p class="text-center mb-3">Masukkan email dan password Anda!</p>
    </div>
    <div class="col col-10 col-md-5 col-lg-4">
        @if (session()->has("error"))
        <div class="alert alert-danger" role="alert">
        {{ session("error") }}
        </div>
        @endif
        @if (session()->has("success"))
        <div class="alert alert-success" role="alert">
        {{ session("success") }}
        </div>
        @endif
        @if (session()->has("redirect-message"))
        <div class="alert alert-warning" role="alert">
        {{ session("redirect-message") }}
        </div>
        @endif
        <form action="/login" method="post">
            @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Alamat email</label>
            <input value="{{ old("email")?? "" }}" name="email" type="email" class="form-control  @error("email") is-invalid @enderror" id="email" required>
            @error("email")
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input name="password" type="password" class="form-control" id="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
    <div class="mb-3 mt-3">
        <small><p class="text-muted">Belum punya akun? <a href="/register">Register</a></p></small>
    </div>

    </div>
</div>
</div>

@endsection
