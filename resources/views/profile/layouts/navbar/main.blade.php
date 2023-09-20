{{-- NAVBAR --}}
<nav class="fixed z-50 top-0 py-4 px-4 w-full shadow bg-white" x-data="{navOpen : true}">
    <div class="container mx-auto">
        
        {{-- POTONGAN UNTUK HEADER --}}
        @include('profile.layouts.navbar.header')

        {{-- POTONGAN UNTUK BOTTOMBAR --}}
        @include('profile.layouts.navbar.bottombar')
    </div>
</nav>
