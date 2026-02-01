<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use Illuminate\Support\Collection;

class HomeController extends Controller
{
    public function index()
    {
        /* ===============================
         | HERO SLIDER
         |===============================*/
        $heroSlides = collect([
            [
                'title' => 'Selamat Datang di SDN Balas Klumprik',
                'subtitle' => 'Mewujudkan Pendidikan Berkualitas dan Berkarakter',
                'image' => 'https://source.unsplash.com/1600x600/?school,classroom',
                'cta_ppdb' => route('ppdb.index'),
                'cta_profil' => url('/profil')
            ],
            [
                'title' => 'Kegiatan Siswa Aktif & Kreatif',
                'subtitle' => 'Membangun Generasi Unggul Masa Depan',
                'image' => 'https://source.unsplash.com/1600x600/?students,learning',
                'cta_ppdb' => route('ppdb.index'),
                'cta_profil' => url('/profil')
            ],
            [
                'title' => 'Fasilitas Lengkap & Nyaman',
                'subtitle' => 'Mendukung Proses Belajar Mengajar Optimal',
                'image' => 'https://source.unsplash.com/1600x600/?school,library',
                'cta_ppdb' => route('ppdb.index'),
                'cta_profil' => url('/profil')
            ],
        ]);

        /* ===============================
         | BERITA (UNTUK HOME)
         |===============================*/
        $berita = collect([
            (object)[
                'id' => 1,
                'judul' => 'Kegiatan Literasi Pagi Siswa',
                'excerpt' => 'Kegiatan literasi rutin untuk meningkatkan minat baca siswa.',
                'slug' => 'kegiatan-literasi-pagi',
                'thumbnail' => 'https://source.unsplash.com/600x400/?students,reading',
                'kategori' => 'Kegiatan Sekolah',
                'created_at' => now()->subDays(2),
            ],
            (object)[
                'id' => 2,
                'judul' => 'Prestasi Siswa di Lomba Akademik',
                'excerpt' => 'Siswa SDN Balas Klumprik meraih juara tingkat kecamatan.',
                'slug' => 'prestasi-siswa-lomba-akademik',
                'thumbnail' => 'https://source.unsplash.com/600x400/?students,award',
                'kategori' => 'Prestasi',
                'created_at' => now()->subDays(5),
            ],
            (object)[
                'id' => 3,
                'judul' => 'Peringatan Hari Pendidikan Nasional',
                'excerpt' => 'Upacara dan kegiatan edukatif memperingati Hardiknas.',
                'slug' => 'peringatan-hari-pendidikan',
                'thumbnail' => 'https://source.unsplash.com/600x400/?school,ceremony',
                'kategori' => 'Pengumuman',
                'created_at' => now()->subDays(7),
            ],
        ]);

        /* ===============================
         | GALERI (UNTUK HOME)
         |===============================*/
        $galeri = collect([
            [
                'url' => 'https://source.unsplash.com/600x400/?school,playground',
                'caption' => 'Area bermain siswa'
            ],
            [
                'url' => 'https://source.unsplash.com/600x400/?students,activity',
                'caption' => 'Kegiatan ekstrakurikuler'
            ],
            [
                'url' => 'https://source.unsplash.com/600x400/?classroom,learning',
                'caption' => 'Suasana belajar di kelas'
            ],
            [
                'url' => 'https://source.unsplash.com/600x400/?school,library',
                'caption' => 'Perpustakaan sekolah'
            ],
            [
                'url' => 'https://source.unsplash.com/600x400/?students,sports',
                'caption' => 'Kegiatan olahraga'
            ],
            [
                'url' => 'https://source.unsplash.com/600x400/?school,event',
                'caption' => 'Kegiatan sekolah'
            ],
        ]);

        /* ===============================
         | KIRIM KE VIEW
         |===============================*/
        return view('public.home', compact(
            'heroSlides',
            'berita',
            'galeri'
        ));
    }
}
