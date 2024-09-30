@extends('layout.layout');

@section('content')
    <section style="margin-top: 100px">
        <div class="container col-xxl-6">
            <h2 class="fw-bold mb-3 text-center">
                Page Login Admind Pesantren
            </h2>

            <form action="/login" method="POST">
                @csrf
                <div class="form-grup mb-3">
                    <label for="email">Massukan Email</label>
                    <input type="text" name="email" class="form-control">
                </div>

                <div class="form-grup mb-3">
                    <label for="pw">Password</label>
                    <input type="password" name="pw" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">
                    Submit
                </button>
            </form>
        </div>
    </section>
@endsection