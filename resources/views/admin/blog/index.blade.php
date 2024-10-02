@extends('layout.layout')

@section('content')
    <section style="margin: 100px">
        <div class="container col-xxl-8 py-5">
            <h2>Page Managemet artikel</h2>
            <p>Selamat datang Mangemnt artikel</p>

            <div class="d-flex">
                <a href="{{route('dashboard')}}">Home</a>
                <div class="mx-1">/</div>
                <a href="{{route('dashboard')}}">Blog artikel</a>
            </div>
        </div>
    </section>
@endsection