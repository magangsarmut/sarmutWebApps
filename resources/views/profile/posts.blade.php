{{-- MELAKUKAN EKSTENSI FILE DARI MAIN --}}
@extends('profile.layouts.main')

{{-- ISI CHILD VIEW --}}
@section('container')

    {{-- JUDUL HALAMAN --}}
    <H1 class="mb-3 text-center">{{ $title }}</H1>

    {{-- SEARCH --}}
    <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            <form action="/posts">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search" name="search"
                        value="{{ request('search') }}">
                    <button class="btn btn-success" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>


    {{-- POSTINGAN YANG PALING BARU --}}
    @if ($posts->count())
        <div class="card mb-3">

            {{-- GAMBAR CARD --}}
            @if ($posts[0]->image)
                <div style="max-height: 400px; overflow:hidden" class="d-flex justify-content-center">
                    <img src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}"
                        class="img-fluid mt-3">
                </div>
            @else
                <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top"
                    alt="{{ $posts[0]->category->name }}">
            @endif



            {{-- CARD BODY --}}
            <div class="card-body text-center">

                {{-- JUDUL KONTEN CARD --}}
                <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}"
                        class='text-decoration-none text-dark'>{{ $posts[0]->title }}</a></h3>

                {{-- PENULIS DAN KATEGORI --}}
                <p>
                    <small class="text-muted">
                        By: <a href="/posts?author={{ $posts[0]->author->username }}"
                            class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a
                            href="/posts?category={{ $posts[0]->category->slug }}"
                            class="text-decoration-none">{{ $posts[0]->category->name }}</a>
                        {{ $posts[0]->created_at->diffForHumans() }}
                    </small>
                </p>

                {{-- EXCERPT KONTEN --}}
                <p class="card-text">{{ $posts[0]->excerpt }}</p>

                {{-- READ MORE --}}
                <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read more</a>
            </div>
        </div>

        {{-- PERULANGAN UNTUK MENAMPILKAN SELURUH POST YANG ADA --}}
        <div class="container">
            <div class="row">
                @foreach ($posts->skip(1) as $post)
                    <div class="col-md-4 mb-3">
                        <div class="card">

                            {{-- TAG CATEGORY --}}
                            <div class="position-absolute bg-dark px-3 py-2 text-white"
                                style="background-color: rgba(0, 0, 0, 0.7)"><a
                                    href="/posts?category={{ $post->category->slug }}"
                                    class="text-white text-decoration-none">{{ $post->category->name }}</a></div>

                            {{-- GAMBAR POST --}}
                            @if ($post->image)
                                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}"
                                    class="img-fluid">
                            @else
                                <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}"
                                    class="card-img-top" alt="{{ $post->category->name }}">
                            @endif

                            {{-- BODY POST --}}
                            <div class="card-body">

                                {{-- JUDUL CARD --}}
                                <h5 class="card-title"><a href="/posts/{{ $post->slug }}"
                                        class="text-decoration-none">{{ $post->title }}</a></h5>

                                {{-- PENULIS DAN KATEGORI --}}
                                <p>
                                    <small class="text-muted">
                                        By: <a href="/posts?author={{ $posts[0]->author->username }}"
                                            class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a
                                            href="/posts?category={{ $posts[0]->category->slug }}"
                                            class="text-decoration-none">{{ $posts[0]->category->name }}</a>
                                        {{ $posts[0]->created_at->diffForHumans() }}
                                    </small>
                                </p>

                                {{-- EXCERPT KONTEN --}}
                                <p>{{ $post['excerpt'] }}</p>

                                {{-- READ MORE --}}
                                <a href="/posts/{{ $post->slug }}" class="text-decoration-none btn btn-primary">Read
                                    more</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-center fs-4">No Post Found</p>
    @endif

    {{-- PAGINATION --}}
    <div class="d-flex justify-content-end">
        {{ $posts->links() }}
    </div>

@endsection
