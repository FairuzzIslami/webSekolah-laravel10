@extends('layout.layout')

@section('content')
    <section style="margin: 100px">
        <div class="container col-xxl-8 py-5">
            <h2>Page Dashboard Admin</h2>
            <p>Selamat datang di halaman admin</p>

            <div class="row">
                <div class="col-lg-4 py-3">
                    <div class="card shadow-sm rounded-3 border-0">
                        <img src="{{asset('asset/image/office-1081807_1920.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Blog artikel</h5>
                            <p class="card-text">Atur dan kelola artikel kegiatan pesantren</p>
                            <a href="#" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 py-3">
                    <div class="card shadow-sm rounded-3 border-0">
                        <img src="{{asset('asset/image/Perpustakaan.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Photo kegiatan</h5>
                            <p class="card-text">Atur dan kelola photo kegiatan pesantren</p>
                            <a href="#" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection