{{-- HEADER --}}
<div class="flex items-center justify-between">
    {{-- LOGO INSTANSI ||  HEADER --}}
    <a href="/"><img src="{{ URL::asset('/img/logo/logoUtama.png') }}" alt="profile Pic" height="150" width="150"></a>

    {{-- HAMBURGER MENU || HEADER --}}
    <button @click="navOpen =! navOpen"><ion-icon name="menu"
            class="text-green-500 h-10 w-10 lg:hidden"></ion-icon></button>

    {{-- LIST MENU APABILA MASUK KE TAMPILAN LEBIH BESAR || HEADER --}}
    <div class='hidden lg:block'>
        <ul class="flex justify-evenly gap-8">

            {{-- MENU HOME --}}
            <li class="text-gray-500 hover:text-black font-normal hover:font-bold text-sm font-inter mx-2"><a href="/">Home</a></li>
            {{-- AKHIR MENU HOME --}}

            {{-- MENU TENTANG --}}
            <li class="text-gray-500 font-normal text-sm font-inter">
                <div x-data="{ open: false }" @mouseleave="open = false" class="relative inline-block" :class="{ 'text-gray-900': open 'text-gray-600': !open }">
                    <!-- TRIGGER MENU DROPDOWN -->
                    <button @mouseover="open = true" class="flex items-center rounded-md">
                        <span class="hover:text-black hover:font-bold">Tentang </span>
                        <span :class="open = !open ? '' : '-rotate-180'"
                            class="transition-transform duration-500 transform">
                            <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                            </svg>
                        </span>
                    </button>
                    <!-- AKHIR TRIGGER MENU DROPDOWN -->
                    <!-- LIST MENU DROPDOWN -->
                    <div x-show="open" x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 transform scale-90"
                        x-transition:enter-end="opacity-100 transform scale-100"
                        x-transition:leave="transition ease-in duration-300"
                        x-transition:leave-start="opacity-100 transform scale-100"
                        x-transition:leave-end="opacity-0 transform scale-90"
                        class="absolute right-0 py-4 text-gray-500 bg-white rounded-lg shadow-xl min-w-max">
                        <a href="#" class="block px-4 py-3 border-b-2 hover:text-black hover:font-bold hover:bg-gray-100">Visi dan Misi</a>
                        <a href="#" class="block px-4 py-3 border-b-2  hover:text-black hover:font-bold hover:bg-gray-100">Sejarah</a>
                        <a href="#" class="block px-4 py-3 border-b-2  hover:text-black hover:font-bold hover:bg-gray-100">Akreditasi</a>
                        <a href="#" class="block px-4 py-3 border-b-2  hover:text-black hover:font-bold hover:bg-gray-100">Struktur Organisasi</a>
                    </div>
                    {{-- END LIST MENU DROPDOWN --}}
            </li>
            {{-- AKHIR MENU TENTANG --}}

            {{-- MENU LAYANAN --}}
            <li class="text-gray-500 font-normal text-sm font-inter">
                <div x-data="{ open: false }" @mouseleave="open = false" class="relative inline-block" :class="{ 'text-gray-900': open 'text-gray-600': !open }">
                    <!-- TRIGGER MENU DROPDOWN -->
                    <button @mouseover="open = true" class="flex items-center rounded-md">
                        <span class="hover:text-black hover:font-bold">Layanan </span>
                        <span :class="open = !open ? '' : '-rotate-180'"
                            class="transition-transform duration-500 transform">
                            <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                            </svg>
                        </span>
                    </button>
                    <!-- AKHIR TRIGGER MENU DROPDOWN -->
                    <!-- LIST MENU DROPDOWN -->
                    <div x-show="open" x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 transform scale-90"
                        x-transition:enter-end="opacity-100 transform scale-100"
                        x-transition:leave="transition ease-in duration-300"
                        x-transition:leave-start="opacity-100 transform scale-100"
                        x-transition:leave-end="opacity-0 transform scale-90"
                        class="absolute right-0 py-4 text-gray-500 bg-white rounded-lg shadow-xl min-w-max">
                        <a href="#" class="block px-4 py-3 border-b-2 hover:text-black hover:font-bold hover:bg-gray-100">Rawat Jalan</a>
                        <a href="#" class="block px-4 py-3 border-b-2  hover:text-black hover:font-bold hover:bg-gray-100">Rawat Inap</a>
                        <a href="#" class="block px-4 py-3 border-b-2  hover:text-black hover:font-bold hover:bg-gray-100">General Check Up</a>
                        <a href="#" class="block px-4 py-3 border-b-2  hover:text-black hover:font-bold hover:bg-gray-100">Pelayanan Rujukan</a>
                    </div>
                    {{-- END LIST MENU DROPDOWN --}}
            </li>
            {{-- AKHIR MENU LAYANAN --}}

            {{-- MENU FASILITAS --}}
            <li class="text-gray-500 font-normal text-sm font-inter">
                <div x-data="{ open: false }" @mouseleave="open = false" class="relative inline-block" :class="{ 'text-gray-900': open 'text-gray-600': !open }">
                    <!-- TRIGGER MENU DROPDOWN -->
                    <button @mouseover="open = true" class="flex items-center rounded-md">
                        <span class="hover:text-black hover:font-bold">Fasilitas </span>
                        <span :class="open = !open ? '' : '-rotate-180'"
                            class="transition-transform duration-500 transform">
                            <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                            </svg>
                        </span>
                    </button>
                    <!-- AKHIR TRIGGER MENU DROPDOWN -->
                    <!-- LIST MENU DROPDOWN -->
                    <div x-show="open" x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 transform scale-90"
                        x-transition:enter-end="opacity-100 transform scale-100"
                        x-transition:leave="transition ease-in duration-300"
                        x-transition:leave-start="opacity-100 transform scale-100"
                        x-transition:leave-end="opacity-0 transform scale-90"
                        class="absolute right-0 py-4 text-gray-500 bg-white rounded-lg shadow-xl min-w-max">
                        <a href="#" class="block px-4 py-3 border-b-2 hover:text-black hover:font-bold hover:bg-gray-100">Instalasi Gawat Darurat (IGD)</a>
                        <a href="#" class="block px-4 py-3 border-b-2  hover:text-black hover:font-bold hover:bg-gray-100">Instalasi Pelayanan Intensif (IPI)</a>
                        <a href="#" class="block px-4 py-3 border-b-2  hover:text-black hover:font-bold hover:bg-gray-100">Kamar Operasi</a>
                        <a href="#" class="block px-4 py-3 border-b-2  hover:text-black hover:font-bold hover:bg-gray-100">Rehabilitasi Medik</a>
                        <a href="#" class="block px-4 py-3 border-b-2  hover:text-black hover:font-bold hover:bg-gray-100">Laboratorium</a>
                        <a href="#" class="block px-4 py-3 border-b-2  hover:text-black hover:font-bold hover:bg-gray-100">Radiologi</a>
                        <a href="#" class="block px-4 py-3 border-b-2  hover:text-black hover:font-bold hover:bg-gray-100">Instalasi Gizi</a>
                        <a href="#" class="block px-4 py-3 border-b-2  hover:text-black hover:font-bold hover:bg-gray-100">Farmasi</a>
                    </div>
                    {{-- END LIST MENU DROPDOWN --}}
            </li>
            {{-- AKHIR MENU FASILITAS --}}

            {{-- MENU LAINNYA --}}
            <li class="text-gray-500 font-normal text-sm font-inter">
                <div x-data="{ open: false }" @mouseleave="open = false" class="relative inline-block" :class="{ 'text-gray-900': open 'text-gray-600': !open }">
                    <!-- TRIGGER MENU DROPDOWN -->
                    <button @mouseover="open = true" class="flex items-center rounded-md">
                        <span class="hover:text-black hover:font-bold">Lainnya </span>
                        <span :class="open = !open ? '' : '-rotate-180'"
                            class="transition-transform duration-500 transform">
                            <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                            </svg>
                        </span>
                    </button>
                    <!-- AKHIR TRIGGER MENU DROPDOWN -->
                    <!-- LIST MENU DROPDOWN -->
                    <div x-show="open" x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 transform scale-90"
                        x-transition:enter-end="opacity-100 transform scale-100"
                        x-transition:leave="transition ease-in duration-300"
                        x-transition:leave-start="opacity-100 transform scale-100"
                        x-transition:leave-end="opacity-0 transform scale-90"
                        class="absolute right-0 py-4 text-gray-500 bg-white rounded-lg shadow-xl min-w-max">
                        <a href="#" class="block px-4 py-3 border-b-2 hover:text-black hover:font-bold hover:bg-gray-100">Informasi Jadwal Praktik Dokter</a>
                        <a href="#" class="block px-4 py-3 border-b-2 hover:text-black hover:font-bold hover:bg-gray-100">Informasi Antrian</a>
                        <a href="#" class="block px-4 py-3 border-b-2  hover:text-black hover:font-bold hover:bg-gray-100">Informasi Pendaftaran Rawat Jalan</a>
                        <a href="#" class="block px-4 py-3 border-b-2  hover:text-black hover:font-bold hover:bg-gray-100">Informasi Pendaftaran Rawat Inap</a>
                        <a href="#" class="block px-4 py-3 border-b-2  hover:text-black hover:font-bold hover:bg-gray-100">Artikel Kesehatan</a>
                        <a href="#" class="block px-4 py-3 border-b-2  hover:text-black hover:font-bold hover:bg-gray-100">Artikel Event Rumah Sakit</a>
                    </div>
                    {{-- END LIST MENU DROPDOWN --}}
            </li>
            {{-- AKHIR MENU LAINNYA --}}

        </ul>

    </div>
</div>
