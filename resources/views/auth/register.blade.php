{{-- MELAKUKAN EKSTENSI FILE DARI MAIN --}}
@extends('profile.layouts.main')

{{-- ISI CHILD VIEW --}}
@section('container')

{{-- CLASS REGISTER --}}
<div class="row justify-content-center">
    <div class="col-lg-5">
        
        {{-- FORM REGISTER --}}
        <main class="form-registration w-100 m-auto">
            <form action="/register" method="post">
                @csrf
                {{-- LOGO RSU SARI MUTIARA --}}
                <img class="img-fluid mx-auto d-block mb-3 my-3" src="{{URL::asset('/img/logo/logo-sarmut.png')}}" alt="profile Pic" height="100" width="100">

                {{-- TEKS SILAHKAN LOGIN --}}
                <h1 class="h3 mb-3 fw-normal text-center">Form Registrasi</h1>

                {{-- ISIAN NAMA --}}
                <div class="form-floating">
                    <input type="text" name='name' class="form-control rounded-top @error('name')is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
                    <label for="name">Nama</label>

                    {{-- ALERT APABILA ISIAN NAMA TIDAK SESUAI ATURAN --}}
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                {{-- ISIAN USERNAME --}}
                <div class="form-floating">
                    <input type="text" name='username' class="form-control @error('username')is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('username') }}">
                    <label for="username">Username</label>

                    {{-- ALERT APABILA ISIAN USERNAME TIDAK SESUAI ATURAN --}}
                    @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                {{-- ISIAN EMAIL --}}
                <div class="form-floating">
                    <input type="email" name='email' class="form-control @error('email')is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email')}}">
                    <label for="email">Email address</label>

                    {{-- ALERT APABILA ISIAN EMAIL TIDAK SESUAI ATURAN --}}
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                {{-- ISIAN PASSWORD --}}
                <div class="form-floating">
                    <input type="password" name='password' class="form-control rounded-bottom @error('password')is-invalid @enderror" id="password" placeholder="Password" required>
                    <label for="password">Password</label>

                    {{-- ALERT APABILA ISIAN PASSWORD TIDAK SESUAI ATURAN --}}
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                {{-- BUTTON SIGN IN --}}
                <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Register</button>
            </form>

            {{-- LINK UNTUK KEMBALI KE HALAMAN FORM SIGN IN --}}
            <small class="d-block text-center mt-3">Sudah Mempunyai Akun? <a href="/login">Sign In Sekarang!</a></small>
        </main>
    </div>
</div>



@endsection