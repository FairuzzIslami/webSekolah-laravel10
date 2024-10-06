@extends('layout.layout')

@section('content')
    <section style="margin: 100px">
        <div class="container col-xxl-8 py-5">
            <h2>Halaman Blog Artikel</h2>

            
            <div class="table-responsive py-5">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>image</th>
                            <th>judul</th>
                            <th>aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($artikels as $artikel)
                            <td>{{$no++}}</td>
                            <td>
                                <img src="{{asset('storage/artikel' . $item->$image)}}" height="100" alt="">
                            </td>
                            <td>
                                {{$artikel->$judul}}
                            </td>
                            <td>
                                <a href="btn btn-warning">Edit</a>
                                <form action="" method="POST" class="d-inline">
                                    @csrf
                                    <button type="submit">Hapus</button>
                                </form>
                            </td>
                        @endforeach
                    </tbody>
                </table>

                <a href="{{route('blog.create')}}" class="btn btn-primary">Buat artikel</a>
            </div>
        </div>
    </section>
@endsection