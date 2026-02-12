@extends('layouts.app')
@section('title','Berita')

@section('content')

{{-- HERO --}}
<section class="relative h-[70vh] flex items-center justify-center text-center">
    <img src="{{ asset('images/berita.jpg') }}"
         class="absolute inset-0 w-full h-full object-cover">

    <div class="absolute inset-0 bg-[#7c1f1f]/60"></div>

    <div class="relative z-10 text-white max-w-3xl px-6">
        <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight leading-tight mb-5">
            <span class="text-White-400">Berita & Kegiatan Sekolah</span>
        </h1>
        <p class="text-lg">
            Informasi terbaru seputar kegiatan, prestasi, dan pengumuman resmi sekolah.
        </p>
    </div>
</section>

{{-- FEATURED BERITA --}}
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-6">

        <div class="mb-12 text-center">
            <span class="text-[#7c1f1f] uppercase tracking-widest text-sm">
                Media & Publikasi
            </span>
            <h2 class="text-3xl md:text-4xl font-light mt-4 text-gray-900">
                Berita & <span class="text-[#7c1f1f]">Artikel</span>
            </h2>
            <p class="text-gray-600 mt-4 max-w-2xl mx-auto">
                Informasi resmi seputar kegiatan, kebijakan, dan program strategis
                yayasan sebagai bentuk transparansi kepada publik.
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            @for ($i = 0; $i < 3; $i++)
            <article class="bg-gray-50 rounded-2xl shadow hover:shadow-lg transition overflow-hidden">
                <img src="{{ asset('images/galeri.jpg') }}"
                     class="h-48 w-full object-cover" alt="Berita Yayasan">

                <div class="p-6">
                    <h3 class="font-semibold text-lg text-gray-900 mb-2">
                        Kegiatan Strategis Yayasan
                    </h3>
                    <p class="text-gray-600 text-sm mb-4">
                        Dokumentasi kegiatan resmi yayasan dalam mendukung
                        pengembangan pendidikan dan literasi.
                    </p>
                    <a href="#"
                       class="text-[#7c1f1f] text-sm font-semibold hover:underline">
                        Baca Selengkapnya →
                    </a>
                </div>
            </article>
            @endfor
        </div>
    </div>
</section>

<section class="py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6">

        <div class="mb-12 text-center">
            <h2 class="text-3xl md:text-4xl font-light text-gray-900">
                Galeri <span class="text-[#7c1f1f]">Foto</span>
            </h2>
            <p class="text-gray-600 mt-4">
                Dokumentasi kunjungan, kolaborasi, dan kegiatan strategis yayasan.
            </p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            @for ($i = 0; $i < 8; $i++)
            <div class="group relative overflow-hidden rounded-xl shadow">
                <img src="{{ asset('images/galeri.jpg') }}"
                     class="w-full h-56 object-cover group-hover:scale-110 transition duration-500">
                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition"></div>
            </div>
            @endfor
        </div>

    </div>
</section>

<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-6">

        <div class="mb-12 text-center">
            <h2 class="text-3xl md:text-4xl font-light text-gray-900">
                <span class="text-[#7c1f1f]">Video</span>
            </h2>
            <p class="text-gray-600 mt-4">
                Video dokumentasi kegiatan dan publikasi resmi yayasan.
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-10">
            <div class="aspect-video rounded-2xl overflow-hidden shadow">
                <iframe
                    src="https://www.youtube.com/embed/htGL3D1GbSs"
                    class="w-full h-full"
                    frameborder="0"
                    allowfullscreen>
                </iframe>
            </div>

            <div class="aspect-video rounded-2xl overflow-hidden shadow">
                <iframe
                    src="https://www.youtube.com/embed/VIDEO_ID_LAIN"
                    class="w-full h-full"
                    frameborder="0"
                    allowfullscreen>
                </iframe>
            </div>
        </div>

    </div>
</section>

<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-16 reveal">
            <h2 class="text-3xl md:text-4xl font-bold text-[#7c1f1f] mb-4">
                Kunjungan & Audiensi
            </h2>
            <p class="text-gray-600 max-w-3xl mx-auto mb-16 reveal">
                Yayasan menerima berbagai kunjungan resmi dari pemerintah pusat,
                daerah, serta pemangku kebijakan sebagai bentuk dialog,
                evaluasi, dan dukungan terhadap pengembangan pendidikan.
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            @foreach (['menteri','gubernur','bupati'] as $item)
            <div class="group reveal">
                <div class="overflow-hidden rounded-xl shadow-lg">
                    <img src="{{ asset('images/kunjungan/kunjungan-'.$item.'.jpg') }}"
                         class="w-full h-64 object-cover group-hover:scale-105 transition">
                </div>
                <p class="mt-4 text-sm text-[#7c1f1f]">
                    Kunjungan resmi dan audiensi strategis
                </p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-16 items-center">

        <div class="reveal">
            <h2 class="text-3xl font-bold text-[#7c1f1f] mb-6">
                Kolaborasi & Mitra Strategis
            </h2>
            <p class="text-gray-600 leading-relaxed mb-4">
                Yayasan menjalin kerja sama dengan perguruan tinggi,
                lembaga pendidikan, dan mitra profesional
                untuk mendukung pengembangan mutu akademik,
                penelitian, dan pengabdian masyarakat.
            </p>
            <p class="text-gray-600 leading-relaxed">
                Kolaborasi ini membuka akses pembelajaran lintas institusi
                serta memperluas wawasan peserta didik dan pendidik.
            </p>
        </div>

        <div class="grid grid-cols-2 gap-6 reveal">
            <img src="{{ asset('images/mitra-kampus-1.jpg') }}" class="rounded-xl shadow">
            <img src="{{ asset('images/kerjasama-kampus-2.jpg') }}" class="rounded-xl shadow">
        </div>

    </div>
</section>

<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-6">

        {{-- Judul --}}
        <div class="max-w-6xl mx-auto px-6 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-[#7c1f1f] mb-4">
                Kunjungan Pemerintah & Pemangku Kebijakan
            </h2>
            <p class="text-gray-600 max-w-3xl mx-auto mb-16 reveal">
                Yayasan menerima berbagai kunjungan resmi dari pemerintah pusat dan daerah
                sebagai bentuk apresiasi, dialog kebijakan, serta dukungan terhadap
                pengembangan pendidikan berkelanjutan.
            </p>
        </div>

        {{-- Galeri --}}
        <div class="grid md:grid-cols-3 gap-10">

            {{-- Menteri --}}
            <div class="group reveal">
                <div class="overflow-hidden rounded-2xl shadow-lg">
                    <img src="{{ asset('images/kunjungan-menteri.jpg') }}"
                         class="w-full h-72 object-cover group-hover:scale-105 transition duration-500">
                </div>
                <h4 class="font-semibold mt-5">Kunjungan Menteri</h4>
                <p class="text-sm text-gray-600 mt-2">
                    Dialog kebijakan dan dukungan terhadap penguatan ekosistem pendidikan.
                </p>
            </div>

            {{-- Gubernur --}}
            <div class="group reveal">
                <div class="overflow-hidden rounded-2xl shadow-lg">
                    <img src="{{ asset('images/kunjungan-gubernur.jpg') }}"
                         class="w-full h-72 object-cover group-hover:scale-105 transition duration-500">
                </div>
                <h4 class="font-semibold mt-5">Kunjungan Gubernur</h4>
                <p class="text-sm text-gray-600 mt-2">
                    Apresiasi dan evaluasi program pendidikan tingkat daerah.
                </p>
            </div>

            {{-- Bupati --}}
            <div class="group reveal">
                <div class="overflow-hidden rounded-2xl shadow-lg">
                    <img src="{{ asset('images/Background2.jpg') }}"
                         class="w-full h-72 object-cover group-hover:scale-105 transition duration-500">
                </div>
                <h4 class="font-semibold mt-5">Kunjungan Bupati</h4>
                <p class="text-sm text-gray-600 mt-2">
                    Sinergi pemerintah daerah dalam peningkatan mutu pendidikan.
                </p>
            </div>

        </div>
    </div>
</section>

<section class="py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-16 items-center">

        {{-- Narasi --}}
        <div class="reveal">
           <span class="text-[#7c1f1f] uppercase tracking-widest text-sm">
                Diakui & Dipercaya Berbagai Pihak
            </span>

            <h2 class="text-3xl md:text-4xl font-light mt-4 mb-6 text-gray-900">
                Kerja Sama Kampus &
                <span class="text-[#7c1f1f]">Institusi Pendidikan</span>
            </h2>

            <p class="text-gray-600 leading-relaxed mb-4">
                Prestasi yang diraih menjadi dasar kepercayaan
                pemerintah dan mitra pendidikan untuk melakukan
                kunjungan, evaluasi, dan kolaborasi strategis.
            </p>

            <p class="text-gray-600 leading-relaxed">
                Kolaborasi ini menjadi jembatan antara dunia pendidikan dasar,
                menengah, dan pendidikan tinggi dalam satu ekosistem yang berkelanjutan.
            </p>
        </div>

        {{-- Galeri Kampus --}}
        <div class="grid grid-cols-2 gap-6 reveal">
            <img src="{{ asset('images/Background1.jpg') }}"
                 class="rounded-xl shadow-lg object-cover h-48 w-full">
            <img src="{{ asset('images/Background2.jpg') }}"
                 class="rounded-xl shadow-lg object-cover h-48 w-full">
            <img src="{{ asset('images/kerjasama-kampus-3.jpg') }}"
                 class="rounded-xl shadow-lg object-cover h-48 w-full col-span-2">
        </div>

    </div>
</section>

<section class="py-28 bg-white">
    <div class="max-w-7xl mx-auto px-6 text-center">

        <h2 class="text-3xl md:text-4xl font-bold text-[#7c1f1f] mb-4">
            Alumni & Jejak Lulusan
        </h2>

        <p class="text-gray-600 max-w-3xl mx-auto mb-20 reveal">
            Jejak lulusan menjadi indikator keberhasilan pembinaan yayasan
            dalam membentuk sumber daya manusia yang berkarakter,
            berdaya saing, dan berkontribusi nyata bagi masyarakat.
        </p>

        <div class="grid md:grid-cols-3 gap-10">

            {{-- Pendidikan Lanjutan --}}
            <div class="reveal bg-gray-50 p-10 rounded-2xl shadow-sm hover:shadow-xl transition text-left">
                <div class="w-12 h-12 mb-6 rounded-xl bg-[#7c1f1f]/10 flex items-center justify-center">
                    <svg class="w-6 h-6 text-[#7c1f1f]" fill="none" stroke="currentColor" stroke-width="2"
                         viewBox="0 0 24 24">
                        <path d="M12 14l9-5-9-5-9 5 9 5z"/>
                        <path d="M12 14l6.16-3.422A12.083 12.083 0 0 1 12 21.5a12.083 12.083 0 0 1-6.16-10.922L12 14z"/>
                    </svg>
                </div>
                <h4 class="font-semibold text-lg mb-3 text-gray-900">
                    Melanjutkan Pendidikan
                </h4>
                <p class="text-sm text-gray-600 leading-relaxed">
                    Alumni melanjutkan studi ke jenjang pendidikan menengah,
                    tinggi, dan pelatihan profesional sesuai minat dan potensi.
                </p>
            </div>

            {{-- Kontribusi Sosial --}}
            <div class="reveal bg-gray-50 p-10 rounded-2xl shadow-sm hover:shadow-xl transition text-left">
                <div class="w-12 h-12 mb-6 rounded-xl bg-[#7c1f1f]/10 flex items-center justify-center">
                    <svg class="w-6 h-6 text-[#7c1f1f]" fill="none" stroke="currentColor" stroke-width="2"
                         viewBox="0 0 24 24">
                        <path d="M17 20h5v-2a3 3 0 0 0-5.356-1.857"/>
                        <path d="M9 20H4v-2a3 3 0 0 1 5.356-1.857"/>
                        <circle cx="12" cy="7" r="4"/>
                    </svg>
                </div>
                <h4 class="font-semibold text-lg mb-3 text-gray-900">
                    Kontribusi Sosial
                </h4>
                <p class="text-sm text-gray-600 leading-relaxed">
                    Lulusan berperan aktif dalam kegiatan sosial,
                    komunitas, dan pengabdian masyarakat di lingkungannya.
                </p>
            </div>

            {{-- Kemandirian --}}
            <div class="reveal bg-gray-50 p-10 rounded-2xl shadow-sm hover:shadow-xl transition text-left">
                <div class="w-12 h-12 mb-6 rounded-xl bg-[#7c1f1f]/10 flex items-center justify-center">
                    <svg class="w-6 h-6 text-[#7c1f1f]" fill="none" stroke="currentColor" stroke-width="2"
                         viewBox="0 0 24 24">
                        <path d="M5 12l5 5L20 7"/>
                    </svg>
                </div>
                <h4 class="font-semibold text-lg mb-3 text-gray-900">
                    Mandiri & Adaptif
                </h4>
                <p class="text-sm text-gray-600 leading-relaxed">
                    Alumni dibekali kemampuan berpikir kritis,
                    komunikasi efektif, dan karakter tangguh
                    menghadapi dinamika perubahan zaman.
                </p>
            </div>

        </div>
    </div>
</section>

<section class="py-24 bg-gradient-to-b from-gray-50 to-white">
    <div class="max-w-6xl mx-auto px-6 text-center reveal">

        <div class="w-14 h-14 mx-auto mb-6 rounded-full bg-[#7c1f1f]/10
                    flex items-center justify-center">
            <svg class="w-7 h-7 text-[#7c1f1f]" fill="none" stroke="currentColor" stroke-width="2"
                 viewBox="0 0 24 24">
                <path d="M12 11c0 3.866-3.134 7-7 7H3v-2a7 7 0 0 1 9-6.708"/>
                <path d="M12 11c0 3.866 3.134 7 7 7h2v-2a7 7 0 0 0-9-6.708"/>
                <circle cx="12" cy="7" r="4"/>
            </svg>
        </div>

        <h3 class="text-3xl md:text-4xl font-bold mb-6 text-gray-900">
            Dampak & Kepercayaan Publik
        </h3>

        <p class="text-gray-600 max-w-3xl mx-auto leading-relaxed">
            Rekam jejak lulusan dan program yayasan menjadi dasar kepercayaan
            pemerintah, institusi pendidikan, komunitas, dan mitra strategis
            dalam membangun kolaborasi berkelanjutan untuk pendidikan
            yang inklusif dan berdampak luas.
        </p>

    </div>
</section>

@endsection
