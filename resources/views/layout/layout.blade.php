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

            {{-- nav --}}
            @include('layout.nav')

            {{-- content --}}
            @yield('content')

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
            window.onscroll = () => { 
                if (window.scrollY > 100) {
                    navbar.classList.add("scroll-nav-active")
                    navbar.classList.add("text-nav-active")
                }else{
                    navbar.classList.remove("scroll-nav-active")
                }
            }
            AOS.init();
        </script>
    </html>