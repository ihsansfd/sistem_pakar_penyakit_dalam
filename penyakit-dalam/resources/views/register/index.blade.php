@extends('layouts.main')

@section('content')
<div class="container-fluid mt-3 mb-3">
<div class="row justify-content-center">
    <div class="col col-12">
        <h1 class="text-center mb-3">Register</h1>
        <p class="text-center mb-3">Masukkan data-data Anda!</p>
    </div>
    <div class="col col-10 col-md-7 col-lg-5">
        <form action="/register" method="post">
            @csrf
        <div class="row">
    <div class="col col-12 col-md-6">
            
            <div class="mb-3">
                <label for="nama_depan" class="form-label">Nama depan</label>
                <input class="form-control @error("nama_depan") is-invalid @enderror" value="{{ old("nama_depan")?? "" }}" name="nama_depan" type="nama_depan" id="nama_depan">
                @error("nama_depan")
                <div class="invalid-feedback">
                {{ $message }}
                </div>
                @enderror
            </div>
        </div>    
        <div class="col col-12 col-md-6">
            <div class="mb-3">
                <label for="nama_belakang" class="form-label">Nama belakang (opsional)</label>
                <input class="form-control @error("nama_belakang") is-invalid @enderror" value="{{ old("nama_belakang")?? "" }}" name="nama_belakang" type="nama_belakang" id="nama_belakang">
                @error("nama_belakang")
                <div class="invalid-feedback">
                {{ $message }}
                </div>
                @enderror
            </div>
        </div>    
        </div>    
        <div class="mb-3">
            <label for="email" class="form-label">Alamat email</label>
            <input class="form-control @error("email") is-invalid @enderror" value="{{ old("email")?? "" }}"name="email" type="email" id="email">
            @error("email")
            <div class="invalid-feedback">
            {{ $message }}
            </div>
            @enderror            
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input class="form-control @error("password") is-invalid @enderror" name="password" type="password" id="password">
            @error("password")
            <div class="invalid-feedback">
            {{ $message }}
            </div>
            @enderror 
        </div>
        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Konfirmasi password</label>
            <input class="form-control @error("password_confirmation") is-invalid @enderror" name="password_confirmation" type="password" id="password_confirmation">
            @error("password_confirmation")
            <div class="invalid-feedback">
            {{ $message }}
            </div>
            @enderror 
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
        <div class="mb-3 mt-3">
            <small><p class="text-muted">Sudah punya akun? <a href="/login">Login</a></p></small>
        </div>
        </form>

    </div>
</div>
</div>
@endsection
