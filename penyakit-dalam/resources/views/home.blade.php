@extends('layouts.main')

@section('content')

<div style="height: 100%" class="d-flex flex-column justify-content-center align-items-center">
@if (session()->has("success"))

    <div class="alert alert-success alert-dismissible fade show w-75" role="alert">
    {{ session("success") }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
    <div id="vertical-center" class="w-75 p-4">
            <p class="display-5 text-center mb-4">Selamat Datang di Situs Web Sistem Pakar Penyakit Dalam!</p>
            <p class="custom-color lead text-center mb-4">Di sini Anda dapat berkonsultasi terkait gejala-gejala yang Anda alami untuk menemukan penyakit dan pengobatan yang sesuai.</p>
            <div class="text-center mb-3">
                <a href="/konsultasi"><button class="btn btn-primary"><i class="bi bi-arrow-right-circle"></i> Konsultasi Sekarang!</button></a>
        </div>
    </div>
</div>


@endsection
