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
                
                    
                    </div>
                </div>
                
                
            </section>
        </body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </html>
