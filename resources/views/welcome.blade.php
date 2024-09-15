    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <title>Pesantren Al Rahman Boyolali</title>
            <link rel="icon" type="image/x-icon" href="{{asset('asset/icon/ic-logo.png')}}">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
            <link rel="stylesheet" href="{{asset('asset/css/styles.css')}}">
        </head>
        <body class="antialiased">

            {{-- nav bar --}}
            <nav class="navbar navbar-expand-lg navbar-dark py-3 fixed-top">
                <div class="container">
                    <img src="{{asset('asset/icon/ic-logo.png')}}" width="55px" alt="">
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Prestasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">kontak</a>
                    </li>
                    </ul>
                    <div class="d-flex" role="search">
                        <button class="btn btn-danger" type="submit">Register</button>
                    </div>
                </div>
                </div>
            </nav>
            {{-- nav bar akhir --}}

            <section id="hero" class="px-0">
                <div class="container text-center text-white">
                    <div class="hero-title">
                        <div class="hero-text">
                            <h1>
                                Selamat Datang <br> Di Pesantren Al-rahman
                            </h1>
                            <p>Pondok pesantren modern dengan konsep islam kaffah</p>
                        </div>
                    </div>
                </div>
            </section>

            <section id="card" style="margin-top:-40px">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="bg-white rounded-3 p-3 d-flex justify-content-between align-items-center ">
                                    <h4>Pendidikan berkualitas</h4>
                                    <img src="{{asset('asset/icon/ic-book.png')}}" height="100px" alt="">
                                </div>
                            </div>
                        <div class="col-lg-3">
                            <div class="bg-white rounded-3 p-3 d-flex justify-content-between align-items-center ">
                                <h4>Pendidikan berahlak</h4>
                                <img src="{{asset('asset/icon/ic-globe.png')}}" height="100px" alt="">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="bg-white rounded-3 p-3 d-flex justify-content-between align-items-center ">
                                <h4>Pendidikan muamalah</h4>
                                <img src="{{asset('asset/icon/ic-neraca.png')}}" height="100px" alt="">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="bg-white rounded-3 p-3 d-flex justify-content-between align-items-center ">
                                <h4>Pendidikan Teknologi</h4>
                                <img src="{{asset('asset/icon/ic-komputer.png')}}" height="100px" alt="">
                            </div>
                        </div>
                    </div>
                </div>      
            </section>

            {{-- berita --}}
            <section id="berita">
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

            {{-- Join --}}
            <section id="join" class="py-5">
                <div class="container py-5">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-6">
                                <div class="d-flex align-item-center"> 
                                    <h5 class="fw-bold text-danger">Daftar Santri</h5>
                                </div>
                                <h2 class="fw-bold">Gabung bersama kami,<br>mewujudkan generasi rabbani</h2>
                                <p>Pesantren Al-rahman Merupakan pesantren <br>
                                    terbaik di Boyolali,Jawa tengah dgn meluluskan <br> Santri dan Ustad yg ber ahlak mulia dan <br> Berkualitas
                                </p>
                                <button class="btn btn-outline-danger">Register</button>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex">
                                <img src="{{asset("asset/image/islamic-boarding-school-students-are-reading-koran-courtyard-mosque_368093-3579.jpeg")}}" width="600px" class="rounded" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {{-- Join --}}

            {{-- vidio --}}
            <section id="vidio" class="py-5">
                <div class="container">
                    <div class="text-center">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/hSycHNqJMGk?si=iqX3z4d3DqzVKEhH" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
            </section>

            <section id="vidio_yt py-5">
                <div class="container">
                    <div class="header-berita text-center align-item-center py-5">
                        <h2 class="fw-bold">Vidio kegiatan Pondok pesantren</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <iframe width="100%" height="215" src="https://www.youtube.com/embed/mtHm7qdpqJM?si=XQ46aArAeZ8ipMVQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                        <div class="col-lg-4">
                            <iframe width="100%" height="215" src="https://www.youtube.com/embed/aRI8L0ACq7o?si=TwkXI1YU72cC0CLQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                        <div class="col-lg-4">
                            <iframe width="100%" height="215" src="https://www.youtube.com/embed/2NTgRWAEBFk?si=Ftl8PTWji1Qfrrb4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="footer-berita text-center py-5">
                        <a href="" class=" btn btn-outline-danger">Vidio lainnya</a>
                    </div>
                </div>
            </section>
            {{-- vidio akhir --}}

            {{-- foto --}}
            <section id="foto" class="section-foto paralax">
                <div class="container">
                    <div class="d-flex justify-content-between align-items-center mb-5">
                        <div class="d-flex align-items-center">
                            <div class="stripe-putih me-2"></div>
                            <h5 class="fw-bold text-white">Foto Kegiatan</h5>
                        </div>
                        <div>
                            <a href="" class="btn btn-outline-white">Berita lainnya</a>
                        </div>
                    </div>
                    <div class="row py-5">
                        <div class="col-lg-3 col-md-6 col-6">
                            <img src="{{asset("asset/image/il-photo-01.png")}}" alt="" class="img-fluid">
                        </div>
                        <div class="col-lg-3 col-md-6 col-6">
                            <img src="{{asset("asset/image/il-photo-02.png")}}" alt="" class="img-fluid">
                        </div>
                        <div class="col-lg-3 col-md-6 col-6">
                            <img src="{{asset("asset/image/il-photo-03.png")}}" alt="" class="img-fluid">
                        </div>
                        <div class="col-lg-3 col-md-6 col-6">
                            <img src="{{asset("asset/image/il-photo-04.png")}}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </section> 
            {{-- foto akhir --}}

            {{-- fasilitas --}}
            <section id="fasilitas" class="py-5">
                <div class="container">
                    <div class="text-center">
                        <h2 class="fw-bold">Fasilitas Pesantren</h2>
                    </div>
                    <img src="{{asset('asset/image/Fasilitas.png')}}" class="img-fluid" alt="">
                </div>
                <div class="text-center">
                    <a href="" class="btn btn-outline-danger">Fasilitas lainnya</a>
                </div>
            </section>
            {{-- fasilitas --}}


            {{-- footer --}}
            <section id="footer" class="bg-white">
                <div class="container py-3">
                    <footer>
                        <div class="row">
                            {{-- kolom 1 --}}
                            <div class="col-12 col-md-3 mb-3">
                                <h5 class="fw-bold mb-3">Navigasi</h5>
                                <div class="d-flex mb-3">
                                    <ul class="nav flex-column">
                                        <li class="nav-item mb-2">
                                            <a href="" class="nav-link p-0 text-muted">Kegiatan Sekolah</a>
                                        </li>
                                        <li class="nav-item mb-2">
                                            <a href="" class="nav-link p-0 text-muted">Kegiatan Sekolah</a>
                                        </li>
                                        <li class="nav-item mb-2">
                                            <a href="" class="nav-link p-0 text-muted">Gallery Sekolah</a>
                                        </li>
                                        <li class="nav-item mb-2">
                                            <a href="" class="nav-link p-0 text-muted">Kegiatan Sosial</a>
                                        </li>
                                    </ul>
                                    <ul class="nav flex-column">
                                        <li class="nav-item mb-2">
                                            <a href="" class="nav-link p-0 text-muted">Alumni</a>
                                        </li>
                                        <li class="nav-item mb-2">
                                            <a href="" class="nav-link p-0 text-muted">info PSB</a>
                                        </li>
                                        <li class="nav-item mb-2">
                                            <a href="" class="nav-link p-0 text-muted">Prestasi</a>
                                        </li>
                                        <li class="nav-item mb-2">
                                            <a href="" class="nav-link p-0 text-muted">Vidio Kegiatan</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            {{-- kolom 2 --}}
                            <div class="col-12 col-md-3 mb-3">
                                <h5 class="fw-bold mb-3">Follow Kami</h5>
                                <div class="d-flex mb-3">
                                    <a href="" class="text-decoration-none text-dark">
                                        <img src="{{asset('')}}" alt="" height="30" width="30" class="me-4">
                                    </a>
                                    <a href="" class="text-decoration-none text-dark">
                                        <img src="{{asset('')}}" alt="" height="30" width="30" class="me-4">
                                    </a>
                                    <a href="" class="text-decoration-none text-dark">
                                        <img src="{{asset('')}}" alt="" height="30" width="30" class="me-4">
                                    </a>
                                    <a href="" class="text-decoration-none text-dark">
                                        <img src="{{asset('')}}" alt="" height="30" width="30" class="me-4">
                                    </a>
                                </div>
                            </div>

                            {{-- kolom 3 --}}
                            <div class="col-12 col-md-3 mb-3">
                                <h5 class="fw-bold mb-3">Kontak kami</h5>
                                    <ul class="nav flex-column">
                                        <li class="nav-item mb-2">
                                            <a href="" class="nav-link p-0 text-muted">info@al-rahman.sch.id</a>
                                        </li>
                                        <li class="nav-item mb-2">
                                            <a href="" class="nav-link p-0 text-muted">08923472823</a>
                                        </li>
                                        <li class="nav-item mb-2">
                                            <a href="" class="nav-link p-0 text-muted">al-rahman@gmail.com</a>
                                        </li>
                                        <li class="nav-item mb-2">
                                            <a href="" class="nav-link p-0 text-muted">al-rahman.id</a>
                                        </li>
                                    </ul>
                            </div>

                            {{-- kolom 4 --}}
                            <div class="col-12 col-md-3 mb-3">
                                <h5 class="font-inter fw-bold mb-3">alamat</h5>
                                <p>Jl.ahmad daud,No 190,Boyolali,Jawa tengah </p>
                            </div>
                        </div>
                    </footer>
                </div>  
            </section>

            <section class="bg-light border-top">
                <div class="container py-4">
                    <div class="d-flex justify-content-between">
                        <div>
                            Pesantren Al-rahman
                        </div>
                        <div class="d-flex">
                            <p class="me-4">
                                Syarat dan ketentuan
                            </p>
                            <p>
                                <a href="" class="text-decoration-none text-dark">Kebijakan Privasi</a>
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            {{-- footer akhir --}}
        </body>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script>
            const navbar = document.querySelector(".fixed-top");
            window.onscroll = () =>{
                if (window.scrollY > 100) {
                    navbar.classList.add("scroll-nav-active")
                    navbar.classList.add("text-nav-active")
                    navbar.classList.remove("navbar-dark")
                }else{
                    navbar.classList.remove("navbar-dark")
                    navbar.classList.add("scroll-nav-active")
                }
            }
        </script>
    </html>
