@extends('layout.layout')

@section('content')
    <section id="detail" class="py-5" style="margin:100px">
        <div class="container col-xxl-8 ">
            <div class="div">
                Home / Berita / Pengajian Pesantren Al-rahman
            </div>
            <div class="card border-0">
                <img src="{{asset('asset/image/il-berita-01.png')}}" class="img-fluid mb-3" alt="">
            <div class="konten-berita">
                <p class="py-3 ">9 September 2024</p>
                <h4 class="fw-bold">Kegiatan Ceramah Bulanan Pesantren</h4>
                <p class="text-secondary">Pesantren Al Rahman secara rutin mengadakan kegiatan 
                        Ceramah Bulanan yang bertujuan untuk meningkatkan pemahaman agama dan 
                        membina akhlak santri. Kegiatan ini diadakan setiap bulan, tepatnya pada pekan 
                        ketiga, dengan menghadirkan ulama, ustadz, dan penceramah terkenal dari berbagai daerah. 
                        Ceramah bulanan ini menjadi salah satu agenda penting yang diikuti oleh seluruh santri, ustadz, 
                        serta masyarakat sekitar pesantren.
                    </p>
                    <div class="detail-tujuan">
                        <h5 class="fw-bold">Tujuan dari kegiatan Ceramah bulanan:</h5>
                        <p class="fw-bold">1.Meningkatkan Pemahaman Agama</p>
                        <p class="text-secondary">
                            Dengan menghadirkan penceramah yang berkompeten, diharapkan santri mendapatkan ilmu yang lebih dalam 
                            tentang berbagai aspek agama Islam, termasuk akidah, fiqih, akhlak, dan tasawuf.
                        </p>
                        <p class="fw-bold">2.Menanamkan Nilai-Nilai Keislaman</p>
                        <p class="text-secondary">
                            Ceramah yang disampaikan dalam kegiatan ini selalu menekankan pentingnya 
                            nilai-nilai keislaman yang dapat diterapkan dalam kehidupan sehari-hari, 
                            baik di lingkungan pesantren maupun masyarakat luas.
                        </p>
                        <p class="fw-bold">3.Membangun Kemandirian Spiritual Santri</p>
                        <p class="text-secondary">
                            Melalui ceramah ini, santri diajak untuk lebih 
                            mendekatkan diri kepada Allah SWT, memperbanyak ibadah, 
                            dan memperbaiki akhlak sesuai tuntunan Al-Quran dan Hadits.
                        </p>
                    </div>
                <a href=""  style="text-decoration: none" class="text-danger fw-bold fs-5">Selengkapnya</a>
            </div>
        </div>
        </div>
    </section>
@endsection