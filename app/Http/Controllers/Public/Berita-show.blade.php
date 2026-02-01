@extends('layouts.app')
@section('title', $berita->judul)

@section('content')

<section class="py-16">
    <div class="max-w-4xl mx-auto px-6">

        <img src="{{ $berita->thumbnail }}"
             class="w-full h-[400px] object-cover rounded-xl mb-8 shadow">

        <span class="text-blue-700 font-semibold text-sm">
            {{ $berita->kategori }}
        </span>

        <h1 class="text-3xl font-extrabold my-4">
            {{ $berita->judul }}
        </h1>

        <p class="text-gray-600 leading-relaxed">
            {{ $berita->isi }}
        </p>

        <a href="{{ route('berita.index') }}"
           class="inline-block mt-10 text-blue-700 font-semibold hover:underline">
            ← Kembali ke Berita
        </a>

    </div>
</section>

@endsection
