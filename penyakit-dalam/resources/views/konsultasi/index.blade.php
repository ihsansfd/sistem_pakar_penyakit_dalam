@extends('layouts.main')

@section('content')

@if (isset($gagal) && $gagal == true)
<div style="height: 100%" class="d-flex flex-column justify-content-center align-items-center">
    <div id="vertical-center" class="w-75 p-4">
            <p class="h3 text-center mb-4">Maaf, penyakit Anda tidak ditemukan di database kami.</p>
            <div class="d-flex width-100 justify-content-center">
            <a href="/konsultasi"><button type="submit" class="btn btn-warning"><i class="bi bi-arrow-repeat"></i> Ulangi Tes</button></a>                        
            </div>                    </div>
                </div>

@elseif(isset($sukses))
   <div style="height: 100%" class="d-flex flex-column justify-content-center align-items-center">
    <div id="vertical-center" class="w-75 p-4">
            <p class="h3 text-center mb-4">Anda menderita penyakit {{ $sukses }}.</p>
            <div class="d-flex width-100 justify-content-center">
            <a class="me-3" target="_blank" href="https://www.google.com/search?q=penanganan+{{ strtolower($sukses) }}"><button class="btn btn-info"><i class="bi bi-search"></i> Penanganan</button></a>
            <a href="/konsultasi"><button class="btn btn-warning"><i class="bi bi-arrow-repeat"></i> Ulangi Tes</button></a>
                                    
            </div>
                    </div>
                </div>     
@else
<div style="height: 100%" class="d-flex flex-column justify-content-center align-items-center">
    <div id="vertical-center" class="w-75 p-4">
            <p class="h5 text-center mb-2">Pertanyaan {{ $nomor }}</p>
            <p class="h3 text-center mb-4">Apakah Anda mengalami {{ strtolower($symptom->nama_gejala) }}?</p>
            <div class="d-flex width-100 justify-content-center">
                    <div class="me-3">
                        <form action="/konsultasi" method="post">
                            @csrf
                            <input type="hidden" name="symptom" value="{{ $symptom->id }}">
                            <a href="/konsultasi"><button type="submit" class="btn btn-success"><i class="bi bi-check-circle"></i> Ya</button></a>                        
                        </form>
                    </div>
                    <div>
                    <form action="/konsultasi" method="post">
                        @csrf
                    <input type="hidden" name="not_symptom" value="{{ $symptom->id }}">
                    <a href="/konsultasi"><button type="submit" class="btn btn-danger"><i class="bi bi-x-circle"></i> Tidak</button></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endif
@endsection
