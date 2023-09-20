{{-- RESPONSIVE BOTTOM NAVBAR --}}
<div 
class="z-50 fixed bottom-0 right-0 left-0 bg-white p-3 text-gray-500 opacity-100 border rounded-xl lg:hidden"
x-show="navOpen" 
x-data="{open : false}" 
x-show="open"
x-transition:enter="transition ease-out duration-300"
x-transition:enter-start="opacity-0 scale-90"
x-transition:enter-end="opacity-100 scale-100"
x-transition:leave="transition ease-in duration-300"
x-transition:leave-start="opacity-100 scale-100"
x-transition:leave-end="opacity-0 scale-90">

    {{-- LIST MENU || BOTTOM BAR --}}
    <ul class="flex justify-evenly gap-4">

        {{-- MENU HOME --}}
        <li>
            <a href="/" class="flex justify-center flex-col items-center gap-1 hover:text-green-600">
                <ion-icon name="home-outline" class="text-2xl"></ion-icon>
                <span class="text-sm font-inter">Home</span>
            </a>
        </li>
        {{-- AKHIR MENU HOME --}}

        {{-- MENU TENTANG --}}
        <li x-data="{open: false}"">
            <button @click="open = !open" class="flex justify-center flex-col items-center gap-1 hover:text-green-600 @if($active=='about') text-green-600 @endif">
                <ion-icon name="business-outline" class="text-2xl"></ion-icon>
                <span class="text-sm font-inter">Tentang</span>
            </button>
            
            {{-- SUBMENU TENTANG --}}
            <div x-show="open" 
            {{-- class="absolute bottom-28 left-1/2 -translate-x-1/2 flex gap-4 w-3/4" --}}
            class="w-5/6 md:w-3/6 py-3 absolute bottom-28 left-1/2 -translate-x-1/2 gap-4 bg-white shadow-xl rounded-lg text-center"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-90"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-90"
            @click.outside="open = !open">
                <ul class="w-full rounded-lg text-gray-500 font-inter font-bold space-y-5">
                    <li><a href="" class="hover:underline underline-offset-2">Visi Misi</a></li>
                    <li><a href="" class="hover:underline underline-offset-2">Sejarah</a></li>
                    <li><a href="" class="hover:underline underline-offset-2">Struktur Organisasi</a></li>
                    <li><a href="" class="hover:underline underline-offset-2">Akreditasi</a></li>
                </ul>
            </div>
            {{-- AKHIR SUBMENU TENTANG --}}
        </li>
        {{-- AKHIR MENU TENTANG --}}

        {{-- MENU LAYANAN --}}
        <li x-data="{open: false}">
            <button @click="open = !open" class="flex justify-center flex-col items-center gap-1 hover:text-green-600 @if($active=='about') text-green-600 @endif">
                <ion-icon name="briefcase-outline" class="text-2xl"></ion-icon>
                <span class="text-sm font-inter">Layanan</span>
            </button>
            
            {{-- SUBMENU LAYANAN --}}
            <div x-show="open" 
            {{-- class="absolute bottom-28 left-1/2 -translate-x-1/2 flex gap-4 w-3/4" --}}
            class="w-5/6 md:w-3/6 py-3 absolute bottom-28 left-1/2 -translate-x-1/2 gap-4 bg-white shadow-xl rounded-lg text-center"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-90"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-90"
            @click.outside="open = !open">
                <ul class="rounded-lg text-gray-500 font-inter font-bold space-y-5">
                    <li><a href="" class="hover:underline underline-offset-2">Rawat Jalan</a></li>
                    <li><a href="" class="hover:underline underline-offset-2">Rawat Inap</a></li>
                    <li><a href="" class="hover:underline underline-offset-2">General Check Up</a></li>
                    <li><a href="" class="hover:underline underline-offset-2">Pelayanan Rujukan</a></li>
                </ul>
            </div>
            {{-- AKHIR SUBMENU LAYANAN --}}
        </li>
        {{-- AKHIR MENU LAYANAN --}}


        {{-- MENU FASILITAS --}}
        <li x-data="{open: false}"">
            <button @click="open = !open" class="flex justify-center flex-col items-center gap-1 hover:text-green-600 @if($active=='about') text-green-600 @endif">
                <ion-icon name="list-outline" class="text-2xl"></ion-icon>
                <span class="text-sm font-inter">Fasilitas</span>
            </button>
            
            {{-- SUBMENU FASILITAS --}}
            <div x-show="open" 
            {{-- class="absolute bottom-28 left-1/2 -translate-x-1/2 flex gap-4 w-3/4" --}}
            class="w-5/6 md:w-3/6 py-3 absolute bottom-28 left-1/2 -translate-x-1/2 gap-4 bg-white shadow-xl rounded-lg text-center"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-90"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-90"
            @click.outside="open = !open">
                <ul class="rounded-lg text-gray-500 font-inter font-bold space-y-5">
                    <li><a href="" class="hover:underline underline-offset-2">Instalasi Gawat Darurat</a></li>
                    <li><a href="" class="hover:underline underline-offset-2">Instalasi Perawatan Intensif</a></li>
                    <li><a href="" class="hover:underline underline-offset-2">Instalasi Gizi</a></li>
                    <li><a href="" class="hover:underline underline-offset-2">Laboratorium</a></li>
                    <li><a href="" class="hover:underline underline-offset-2">Radiologi</a></li>
                </ul>
            </div>
            {{-- AKHIR SUBMENU FASILITAS --}}
        </li>
        {{-- AKHIR MENU FASILITAS --}}

        {{-- MENU LAINNYA --}}
        <li x-data="{open: false}"">
            <button @click="open = !open" class="flex justify-center flex-col items-center gap-1 hover:text-green-600 @if($active=='about') text-green-600 @endif">
                <ion-icon name="library-outline" class="text-2xl"></ion-icon>
                <span class="text-sm font-inter">Lainnya</span>
            </button>
            
            {{-- SUBMENU LAINNYA --}}
            <div x-show="open" 
            {{-- class="absolute bottom-28 left-1/2 -translate-x-1/2 flex gap-4 w-3/4" --}}
            class="w-5/6 md:w-3/6 py-3 absolute bottom-28 left-1/2 -translate-x-1/2 gap-4 bg-white shadow-xl rounded-lg text-center"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-90"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-90"
            @click.outside="open = !open">
                <ul class="rounded-lg text-gray-500 font-inter font-bold space-y-5">
                    <li><a href="" class="hover:underline underline-offset-2">Informasi Jadwal Praktik Dokter</a></li>
                    <li><a href="" class="hover:underline underline-offset-2">Informasi Antrian</a></li>
                    <li><a href="" class="hover:underline underline-offset-2">Informasi Alur Rawat Jalan</a></li>
                    <li><a href="" class="hover:underline underline-offset-2">Informasi Alur Rawat Inap</a></li>
                    <li><a href="" class="hover:underline underline-offset-2">Artikel Kesehatan</a></li>
                    <li><a href="" class="hover:underline underline-offset-2">Artikel Event Rumah Sakit</a></li>
                </ul>
            </div>
            {{-- AKHIR SUBMENU LAINNYA --}}
        </li>
        {{-- AKHIR MENU LAINNYA --}}
    </ul>
</div>