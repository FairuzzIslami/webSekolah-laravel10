@extends('layout.layout')

@section('content')
    {{-- berita --}}
<section id="berita" class="py-5" style="margin: 50px">
    <div class="container py-5 ">
        <div class="header-berita text-center align-item-center">
            <h2 class="fw-bold">Berita kegiatan Pondok pesantren</h2>
        </div>

            <div class="row py-5">
                <div class="col-lg-4">
                        <div class="card border-0">
                            <img src="{{asset('asset/image/il-berita-01.png')}}" class="img-fluid mb-3" alt="">
                        <div class="konten-berita">
                            <p class="py-3 ">9 September 2024</p>
                            <h4 class="fw-bold">Kegiatan Ceramah Bulanan Pesantren</h4>
                            <p class="text-secondary">#beritaPesantren</p>
                            <a href=""  style="text-decoration: none" class="text-danger fw-bold fs-5">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card border-0">
                        <img src="{{asset('asset/image/il-berita-03.png')}}" class="img-fluid mb-3" alt="">
                    <div class="konten-berita">
                        <p class="py-3 ">12 Agustus 2024</p>
                        <h4 class="fw-bold">Saling Menghargai antar Sesama santri Lain</h4>
                        <p class="text-secondary">#beritaPesantren</p>
                        <a href=""  style="text-decoration: none" class="text-danger fw-bold fs-5">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card border-0">
                    <img src="{{asset('asset/image/il-berita-02.png')}}" class="img-fluid mb-3" alt="">
                    <div class="konten-berita">
                        <p class="py-3 ">24 Maret 2024</p>
                        <h4 class="fw-bold">Pembiasaan tadarus Secara Bersama-sama</h4>
                        <p class="text-secondary">#beritaPesantren</p>
                        <a href=""  style="text-decoration: none" class="text-danger fw-bold fs-5">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-berita text-center py-5">
            <a href="" class=" btn btn-outline-danger">Berita lainnya</a>
        </div>
    </div>
</section>
{{-- berita akhir --}}
@endsection