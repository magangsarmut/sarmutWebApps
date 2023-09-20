<nav class="navbar navbar-expand-lg navbar-dark bg-light" >
    <div class="container">
        
        {{-- LOGO INSTANSI ||  NAVBAR --}}
        <a href="/"><img class="img-fluid mx-auto d-block my-2" src="{{URL::asset('/img/logo/logoUtama.png')}}" alt="profile Pic" height="150" width="150"></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        {{-- LIST KONTEN || NAVBAR --}}
        <div class="collapse navbar-collapse mx-5" id="navbarNav">

            {{-- BAGIAN KIRI NAVBAR --}}
            <ul class="navbar-nav">
                {{-- MENU HOME --}}
                <li class="nav-item">
                    <a class="nav-link @if($active=='home') active @endif text-dark" href="/">Home</a>
                </li>

                {{-- MENU ABOUT --}}
                <li class="nav-item">
                    <a class="nav-link @if($active=='about') active @endif text-dark" href="/about">About</a>
                </li>

                {{-- MENU BLOG --}}
                <li class="nav-item">
                    <a class="nav-link @if($active=='posts') active @endif text-dark" href="/blog">Blog</a>
                </li>

                {{-- MENU CATEGORIES --}}
                <li class="nav-item">
                    <a class="nav-link @if($active=='categories') active @endif text-dark" href="/categories">Categories</a>
                </li>
            </ul>

            {{-- BAGIAN KANAN NAVBAR --}}
            <ul class="navbar-nav ms-auto">

                @auth
                {{-- APABILA USER SUDAH SIGN IN --}}
                <li class="nav-item dropdown">
                    {{-- MEMBERITAHU USER MANA YANG SIGN IN --}}
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Halo {{ auth()->user()->name }}
                    </a>

                    {{-- DROPDOWN USER --}}
                    <ul class="dropdown-menu">
                      
                        {{-- LINK KE HALAMAN DASHBOARD --}}
                        <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-window-reverse"></i> Dashboard</a></li>

                        {{-- PEMISAH --}}
                        <li><hr class="dropdown-divider"></li>

                        {{-- BUTTON UNTUK LOGOUT --}}
                        <li><form action="/logout" method="post">
                            @csrf
                            <button type="submit" class="dropdown-item">
                                <i class="bi bi-box-arrow-right"></i> Logout
                            </button>
                        </form></li>
                    </ul>
                </li>

                @else
                {{-- APABILA USER BELUM SIGN IN --}}
                <li class="nav-item">
                    <a href="/login" class="nav-link @if($active=='signin') active @endif" href="/categories"><i class="bi bi-box-arrow-in-right"></i>  Sign In</a>
                </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>