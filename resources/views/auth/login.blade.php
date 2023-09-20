{{-- MELAKUKAN EKSTENSI FILE DARI MAIN --}}
@extends('profile.layouts.main')

{{-- ISI CHILD VIEW --}}
@section('container')

{{-- FORM SIGN IN --}}
<div class="row justify-content-center">
    <div class="col-md-4">

        {{-- POP-UP APABILA REGISTER SUKSES --}}
        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        {{-- POP-UP APABILA LOGIN GAGAL --}}
        @if(session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        {{-- FORM LOGIN --}}
        <main class="form-signin w-100 m-auto">
            <form action="/login" method="post">
                @csrf
                {{-- LOGO RSU SARI MUTIARA --}}
                <img class="img-fluid mx-auto d-block mb-3 my-3" src="{{URL::asset('/img/logo/logo-sarmut.png')}}" alt="profile Pic" height="100" width="100">

                {{-- TEKS SILAHKAN LOGIN --}}
                <h1 class="h3 mb-3 fw-normal text-center">Silahkan Sign In</h1>

                {{-- ISIAN USERNAME --}}
                <div class="form-floating">
                    <input type="username" name="username" class="form-control @error('username')is-invalid @enderror" id="floatingInput" placeholder="Username" autofocus required value="{{ old('username') }}">
                    <label for="floatingInput">Username</label>

                    @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                {{-- ISIAN PASSWORD --}}
                <div class="form-floating">
                    <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                    <label for="floatingPassword">Password</label>
                </div>

                {{-- BUTTON SIGN IN --}}
                <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
            </form>

            {{-- LINK KE FORM REGISTRASI --}}
            <small class="d-block text-center mt-3">Belum Mempunyai Akun? <a href="/register">Daftar Sekarang!</a></small>
        </main>
    </div>
</div>



@endsection