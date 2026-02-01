<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;

class BeritaController extends Controller
{
    private function dummyBerita()
    {
        return [
            (object)[
                'judul' => 'Berita Sekolah 1',
                'excerpt' => 'Ringkasan berita sekolah pertama...',
                'isi' => 'Ini adalah isi lengkap berita sekolah pertama.',
                'slug' => 'berita-sekolah-1',
                'thumbnail' => 'https://source.unsplash.com/800x500/?school,news',
                'kategori' => 'Kegiatan Sekolah'
            ],
            (object)[
                'judul' => 'Berita Sekolah 2',
                'excerpt' => 'Ringkasan berita sekolah kedua...',
                'isi' => 'Isi lengkap berita sekolah kedua.',
                'slug' => 'berita-sekolah-2',
                'thumbnail' => 'https://source.unsplash.com/800x500/?students,learning',
                'kategori' => 'Prestasi'
            ],
            (object)[
                'judul' => 'Berita Sekolah 2',
                'excerpt' => 'Ringkasan berita sekolah kedua...',
                'isi' => 'Isi lengkap berita sekolah kedua.',
                'slug' => 'berita-sekolah-2',
                'thumbnail' => 'https://source.unsplash.com/800x500/?students,learning',
                'kategori' => 'Prestasi'
            ],
            (object)[
                'judul' => 'Berita Sekolah 2',
                'excerpt' => 'Ringkasan berita sekolah kedua...',
                'isi' => 'Isi lengkap berita sekolah kedua.',
                'slug' => 'berita-sekolah-2',
                'thumbnail' => 'https://source.unsplash.com/800x500/?students,learning',
                'kategori' => 'Prestasi'
            ],
            (object)[
                'judul' => 'Berita Sekolah 2',
                'excerpt' => 'Ringkasan berita sekolah kedua...',
                'isi' => 'Isi lengkap berita sekolah kedua.',
                'slug' => 'berita-sekolah-2',
                'thumbnail' => 'https://source.unsplash.com/800x500/?students,learning',
                'kategori' => 'Prestasi'
            ],
        ];
    }

    public function index()
    {
        $berita = $this->dummyBerita();
        return view('public.berita', compact('berita'));
    }

    public function show($slug)
    {
        $berita = collect($this->dummyBerita())
            ->firstWhere('slug', $slug);

        abort_if(!$berita, 404);

        return view('public.berita-show', compact('berita'));
    }
}
