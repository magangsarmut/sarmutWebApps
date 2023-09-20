{{-- MELAKUKAN EKSTENSI FILE DARI MAIN --}}
@extends('dashboard.layouts.main')

{{-- ISI CHILD VIEW --}}
@section('container')

    {{-- JUDUL HALAMAN --}}
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Buat Postingan Baru</h1>
    </div>

    {{-- FORM CREATE POST --}}
    <div class="col-lg-8">
        <form method="POST" action="/dashboard/posts" class="mb-5" enctype="multipart/form-data">
            @csrf

            {{-- ISIAN JUDUL POSTINGAN --}}
            <div class="mb-3">
                <label for="title" class="form-label">Judul Postingan</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                    required autofocus value="{{ old('title') }}">

                {{-- ERROR MESSAGE --}}
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            {{-- ISIAN SLUG POSTINGAN --}}
            <div class="mb-3">
                <label for="slug" class="form-label">Slug Postingan</label>
                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug"
                    value="{{ old('slug') }}">

                {{-- ERROR MESSAGE --}}
                @error('slug')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            {{-- PILIHAN KATEGORI POSTINGAN --}}
            <div class="mb-3">
                <label for="category" class="form-label">Kategori Postingan</label>
                <select class="form-select" name="category_id">
                    <option selected>Pilih Kategori</option>
                    @foreach ($categories as $category)
                        @if (old('category_id') == $category->id)
                            <option value="{{ $category->id }}" selected> {{ $category->name }}</option>
                        @else
                            <option value="{{ $category->id }}"> {{ $category->name }}</option>
                        @endif
                    @endforeach
                </select>

                {{-- ERROR MESSAGE --}}
                @error('category_id')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            {{-- UPLOAD FILE GAMBAR POSTINGAN --}}
            <div class="mb-3">
                <label for="image" class="form-label">Upload File Gambar Postingan</label>
                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" accept="image/*" onchange="previewImage()">
                <img class="img-preview img-fluid mt-3 col-sm-5">
                
                {{-- ERROR MESSAGE --}}
                @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            {{-- ISIAN BODY POSTINGAN --}}
            <div class="mb-3">
                <label for="body" class="form-label">Body Postingan</label>

                {{-- ERROT MESSAGE --}}
                @error('body')
                    <p class="text-danger">
                        {{ $message }}
                    </p>
                @enderror

                <input id="body" type="hidden" name="body" value="{{ old('body') }}">
                <trix-editor input="body"></trix-editor>
            </div>

            {{-- BUTTON SUBMIT --}}
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script>
        // SCRIPT UNTUK MEMBUAT SLUG OTOMATIS
        title.addEventListener("keyup", function() {
            let preslug = title.value;
            preslug = preslug.replace(/ /g, "-");
            slug.value = preslug.toLowerCase();
        });

        // SCRIPT UNTUK MEMATIKAN FITUR UPLOAD FILE
        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault()
        })

        // SCRIPT UNTUK PREVIEW IMAGE
        function previewImage()
        {
            const image = document.querySelector('#image')
            const imgPreview = document.querySelector('.img-preview')

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();

            oFReader.readAsDataURL(image.files[0])

            oFReader.onload = function(oFREvent){
                imgPreview.src = oFREvent.target.result;
            }
        }

    </script>
@endsection
