{{-- MELAKUKAN EKSTENSI FILE DARI MAIN --}}
@extends('profile.layouts.main')

{{-- ISI CHILD VIEW --}}
@section('container')
    {{-- HERO SECTION --}}
    <section id="hero">
        <div class="container mx-auto px-4 pt-16 pb-10">

            {{-- INISIALISASI GRID HALAMAN 12 KOLOM --}}
            <div class="grid grid-cols-12">

                {{-- PEMBAGIAN GRID 4 KOLOM UNTUK LAYAR BESAR --}}
                <div class="col-span-12 lg:col-span-4 order-2">
                    {{-- JUDUL HERO SECTION --}}
                    <div class="lg:my-10 align center">
                        {{-- LOGO RSU SARI MUTIARA --}}
                        <img class="img-fluid mx-auto d-block mb-3" src="{{ URL::asset('/img/logo/logo-sarmut.png') }}"
                            alt="profile Pic" height="100" width="100">
                        <h3 class="font-bold text-dark leading-tight text-center mb-3">
                            RSU <span class="text-green-600">Sari Mutiara</span> Lubuk Pakam
                        </h3>
                        <h1 class="font-bold text-[38px] lg:text-[40px] text-grey leading-tight text-center mb-5">
                            Dengan <span class="text-green-600">sepenuh hati</span> melayani masyarakat
                        </h1>
                        <p class="text-gray-600 font-bold mb-3 text-center">terhubung <span class="text-green-600">dengan
                                kami</span> di</p>
                        <ul class="flex gap-2 justify-center">
                            <li class="">
                                {{-- FACEBOOK --}}
                                <a href="https://www.facebook.com/profile.php?id=100063789413668" target="_blank"
                                    class="w-9 h-9 mr-3 rounded-full flex justify-center items-center text-slate-300 border border-slate-300 hover:border-green-600 hover:bg-green-600 hover:text-white">
                                    <svg role="img" width=20 class="fill-current" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <title>Instagram</title>
                                        <path
                                            d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
                                    </svg>
                                </a>
                            </li>
                            <li class="">
                                {{-- INSTAGRAM --}}
                                <a href="https://www.instagram.com/rsu.sari_mutiara_lubuk_pakam" target="_blank"
                                    class="w-9 h-9 mr-3 rounded-full flex justify-center items-center text-slate-300 border border-slate-300 hover:border-green-600 hover:bg-green-600 hover:text-white">
                                    <svg role="img" width=20 class="fill-current" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <title>Facebook</title>
                                        <path
                                            d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                {{-- PEMBAGIAN GRID 8 KOLOM UNTUK LAYAR BESAR --}}
                <div class="col-span-12 lg:col-span-8 order-1 mb-5">
                    {{-- GAMBAR HERO SECTION --}}
                    <div>
                        <img src="/img/gambar/sarmut-gambar.png" alt="" class="rounded-lg img-fluid" height="750"
                            width="750">
                    </div>
                </div>

            </div>
        </div>
    </section>
    {{-- AKHIR HERO SECTION --}}

    {{-- ABOUT SECTION --}}
    <section id="about" class="pt-36 pb-32">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full px-4 mb-10 lg:w-1/2">
                    <h4 class="font-bold uppercase text-green-600 text-lg mb-3">Tentang Kami</h4>
                    <h2 class="font-bold text-dark text-3xl mb-3 max-w-md">Deskripsi singkat </br>RSU <span class="text-green-600">Sari Mutiara</span> Lubuk Pakam</h2>
                    <p class="text-base font-medium text-slate-600 max-w-xl lg:text-lg">Rumah Sakit Umum (RSU) <span class="text-green-600 font-bold">Sari Mutiara</span> Lubuk Pakam merupakan sebuah Rumah Sakit tipe C dalam naungan Yayasan <span class="text-green-600 font-bold">Sari Mutiara</span> Medan. Terakreditasi <span class="text-yellow-500 font-bold">PARIPURNA</span> oleh KARS dan merupakan mitra dari BPJS dan beberapa Asuransi Kesehatan lainnya.</p>
                </div>
                <div class="w-full px-4 lg:w-1/2">
                    <h3 class="font-bold text-dark text-2xl mb-4 lg:text-3xl lg:pt-10">Terhubung dengan <span class="text-green-600">kami</span></h3>
                    <p class="text-base font-medium text-slate-600 mb-6 lg:text-lg">Ingin tahu info terbaru dari kami?
                        Lihat dan pantau
                        update terbaru tentang RSU<span class="font-bold text-green-600"> Sari Mutiara </span>Lubuk Pakam
                        melalui media sosial kami yang tertera pada tombol dibawah
                    </p>
                    <div class="flex items-center">
                        {{-- Facebook --}}
                        <a href="https://www.instagram.com/rsu.sari_mutiara_lubuk_pakam" target="_blank"
                            class="w-9 h-9 mr-3 rounded-full flex justify-center items-center text-slate-300 border border-slate-300 hover:border-green-600 hover:bg-green-600 hover:text-white">
                            <svg role="img" width=20 class="fill-current" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <title>Facebook</title>
                                <path
                                    d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                            </svg>
                        </a>
                        {{-- Instagram --}}
                        <a href="https://www.facebook.com/profile.php?id=100063789413668" target="_blank"
                            class="w-9 h-9 mr-3 rounded-full flex justify-center items-center text-slate-300 border border-slate-300 hover:border-green-600 hover:bg-green-600 hover:text-white">
                            <svg role="img" width=20 class="fill-current" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <title>Instagram</title>
                                <path
                                    d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- AKHIR ABOUT SECTION --}}

    {{-- PARTNER SECTION --}}
    <section id="clients" class="pt-16 pb-16 bg-slate-900">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-10">
                    <h4 class="font-semibold text-3xl text-white">Partners Asuransi <span class="text-green-600">dan Korporasi</span></h4>
                </div>
            </div>
            <div class="w-full px-4">
                <div class="flex flex-wrap items-center justify-center">
                    <a href="#"
                        class="max-w-[150px] mx-4 py-4 grayscale opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8">
                        <img src="img/clients/bpjs.svg" alt="BPJS">
                    </a>
                    <a href="#"
                        class="max-w-[150px] mx-4 py-4 grayscale opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8">
                        <img src="img/clients/halodoc.svg" alt="Halodoc">
                    </a>
                    <a href="#"
                        class="max-w-[240px] mx-4 py-4 grayscale opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8">
                        <img src="img/clients/alodokter.svg" alt="Alodokter">
                    </a>
                    <a href="#"
                        class="max-w-[100px] mx-4 py-4 grayscale opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8">
                        <img src="img/clients/lippo.svg" alt="Lippo">
                    </a>
                    <a href="#"
                        class="max-w-[150px] mx-4 py-4 grayscale opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8">
                        <img src="img/clients/adira.svg" alt="Adira">
                    </a>
                    <a href="#"
                        class="max-w-[150px] mx-4 py-4 grayscale opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8">
                        <img src="img/clients/fullerton.svg" alt="fullerton">
                    </a>
                    <a href="#"
                        class="max-w-[150px] mx-4 py-4 grayscale opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8">
                        <img src="img/clients/allianz.svg" alt="Allianz">
                    </a>
                    <a href="#"
                        class="max-w-[100px] mx-4 py-4 grayscale opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8">
                        <img src="img/clients/jiwasraya.svg" alt="Jiwasraya">
                    </a>
                    <a href="#"
                        class="max-w-[100px] mx-4 py-4 grayscale opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8">
                        <img src="img/clients/admedika.svg" alt="admedika">
                    </a>
                    <a href="#"
                        class="max-w-[120px] mx-4 py-4 grayscale opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8">
                        <img src="img/clients/prudential.svg" alt="prudential">
                    </a>
                </div>
            </div>
        </div>
    </section>
    {{-- AKHIR PARTNER SECTION --}}

    {{-- CONTACT SECTION --}}
    <section id="contact" class="pt-36 pb-32">
        <div class="container">
            {{-- JUDUL SECTION --}}
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h2 class="font-bold text-dark text-3xl mb-2 sm:text-xl lg:text-3xl">Hubungi <span class="text-green-600">Kami</span></h2>
                    <p class="font-medium text-md text-secondary md:text-lg">isi form berikut apabila terdapat pertanyaan
                        seputar pelayanan kami</p>
                </div>
            </div>

            {{-- FORM KONTAK --}}
            <form>
                @csrf
                <div class="w-full lg:w-2/3 lg:mx-auto">
                    {{-- ISIAN NAMA --}}
                    <div class="w-full px-4 mb-8">
                        <label for="name" class="text-base text-green-600 font-bold mb-1">Nama</label>
                        <input type="text" id="name"
                            class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-green-600 focus:ring-1 focus:border-green-600">
                    </div>
                    {{-- ISIAN EMAIL --}}
                    <div class="w-full px-4 mb-8">
                        <label for="message" class="text-base text-green-600 font-bold mb-1">Email</label>
                        <input type="text" id="email"
                            class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-green-600 focus:ring-1 focus:border-green-600">
                    </div>
                    {{-- ISIAN PESAN --}}
                    <div class="w-full px-4 mb-8">
                        <label for="message" class="text-base text-green-600 font-bold mb-1">Pesan</label>
                        <textarea type="text" id="email"
                            class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-green-600 focus:ring-1 focus:border-green-600 h-32"></textarea>
                    </div>
                    {{-- BUTTON KIRIM --}}
                    <div class="w-full px-4 mb-8">
                        <button
                            class="text-base font-semibold text-white bg-green-600 py-3 px-8 rounded-full w-full hover:opacity-80 hover:shadow-lg transition duration-500">Kirim</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    {{-- AKHIR CONTACT SECTION --}}

    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        })
    </script>
@endsection
