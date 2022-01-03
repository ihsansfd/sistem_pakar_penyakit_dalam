@extends('layouts.main')

@section('content')

@if (isset($gagal) && $gagal == true)
<div style="height: 100%" class="d-flex flex-column justify-content-center align-items-center">
    <div id="vertical-center" class="w-75 p-4">
            <p class="h3 text-center mb-4">Maaf, penyakit Anda tidak ditemukan di database kami.</p>
                    </div>
                </div>

@elseif(isset($sukses))
   <div style="height: 100%" class="d-flex flex-column justify-content-center align-items-center">
    <div id="vertical-center" class="w-75 p-4">
            <p class="h3 text-center mb-4">Anda menderita penyakit {{ $sukses }}.</p>
                    </div>
                </div>     
@else
<div style="height: 100%" class="d-flex flex-column justify-content-center align-items-center">
    <div id="vertical-center" class="w-75 p-4">
            <p class="h5 text-center mb-2">Pertanyaan {{ $nomor }}</p>
            <p class="h3 text-center mb-4">Apakah Anda mengalami {{ strtolower($symptom->nama_gejala) }}?</p>
            <div class="row mb-3">
                <div class="col col-6">
                    <div class="width-100 d-flex justify-content-end">
                        <form action="/konsultasi" method="post">
                            @csrf
                            <input type="hidden" name="symptom" value="{{ $symptom->id }}">
                            <a href="/konsultasi"><button type="submit" class="btn btn-success"><i class="bi bi-check-circle"></i> Ya</button></a>                        
                        </form>
                    </div>
                </div>
                <div class="col col-6">
                    <form action="/konsultasi" method="post">
                        @csrf
                    <input type="hidden" name="not_symptom" value="{{ $symptom->id }}">
                    <a href="/konsultasi"><button type="submit" class="btn btn-danger"><i class="bi bi-x-circle"></i> Tidak</button></a>
                    </form>
                </div>
        </div>
    </div>
</div>

@endif
@endsection
