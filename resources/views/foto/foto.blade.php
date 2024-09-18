@extends('layout.layout')

@section('content')
    {{-- foto --}}
<section id="foto" class="section-foto paralax" ">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-5">
            <div class="d-flex align-items-center">
                <div class="stripe-putih me-2"></div>
                <h5 class="fw-bold text-white">Foto Kegiatan</h5>
            </div>
            <div>
                <a href="/foto" class="btn btn-outline-white">Berita lainnya</a>
            </div>
        </div>
        <div class="row py-5">
            <div class="col-lg-3 col-md-6 col-6">
                <a href="{{asset('asset/image/il-photo-01.png')}}" class="image-link">
                    <img src="{{asset("asset/image/il-photo-01.png")}}" alt="" class="img-fluid">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-6">
                <a href="{{asset('asset/image/il-photo-02.png')}}" class="image-link">
                    <img src="{{asset("asset/image/il-photo-02.png")}}" alt="" class="img-fluid">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-6">
                <a href="{{asset('asset/image/il-photo-03.png')}}" class="image-link">
                    <img src="{{asset("asset/image/il-photo-03.png")}}" alt="" class="img-fluid">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-6">
                <a href="{{asset('asset/image/il-photo-03.png')}}" class="image-link">
                    <img src="{{asset("asset/image/il-photo-03.png")}}" alt="" class="img-fluid">
                </a>
            </div>
        </div>
    </div>
</section> 
{{-- foto akhir --}}
@endsection