{{-- MELAKUKAN EKSTENSI FILE DARI MAIN --}}
@extends('profile.layouts.main')

{{-- ISI CHILD VIEW --}}
@section('container')

    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                {{-- Judul Post --}}
                <h2>{{ $post->title }}</h2>

                {{-- Author dan Kategori Post --}}
                <h5 class="mb-3">By: <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></h5>

                {{-- Gambar dalam Post --}}
                @if($post->image)
                    <div style="max-height: 350px; overflow:hidden">
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
                @endif
    
                {{-- Isi Post --}}
                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>
                
                {{-- Kembali ke Halaman List Post --}}
                <a href="/blog" class="d-block mt-3"><b>Back to Posts</b></a>
            </div>
        </div>
    </div>

    

@endsection