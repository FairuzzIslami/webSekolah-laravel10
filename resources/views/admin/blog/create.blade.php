@extends('layout.layout')

@section('content')
    <section style="margin: 100px">
        <div class="container col-xxl-8 py-5">
            {{-- navigasi --}}
            <div class="d-flex">
                <a href="{{route('blog')}}">Blog</a>
                <div class="mx-1">.</div>
                <a href="">Buat artikel</a>
            </div>
            <h2>Halaman Create Artikel</h2>

            <form action="{{route('blog.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-grup mb-4">
                    <label for="">Massukan judul kegiatan</label>
                    <input type="text" class="form-control @error('judul')is-invalid @enderror" 
                    name="judul" value="{{old('judul')}}">
                    @error('judul')
                        <div class="invalid-feedback">
                            {{$massage}}
                        </div>
                    @enderror
                </div>

                <div class="form-grup mb-4">
                    <label for="">Massukan photo kegiatan</label>
                    <input type="file" class="form-control @error('image')is-invalid @enderror" 
                    name="image">
                    @error('image')
                        <div class="invalid-feedback">
                            {{$massage}}
                        </div>
                    @enderror
                </div>

                <div class="form-grup mb-4">
                    <label for="">Artikel Berita</label><br>
                    <textarea name="desc" id="summernote">
                        {{old('desc')}}
                    </textarea>
                    @error('desc')
                        <div class="text-danger">
                            {{$massage}}
                        </div>
                    @enderror
                </div>
                <button type="sumbit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </section>
@endsection