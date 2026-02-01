@extends('layouts.app')

@section('title', 'Profil Yayasan PPLSI')

@section('content')
<div class="max-w-6xl mx-auto p-4">
    <!-- Hero Profil -->
    <div class="relative w-full h-64 md:h-96 mb-6">
        <img src="{{ asset('images/profil.jpg') }}" class="w-full h-full object-cover rounded-lg shadow" alt="Profil SDN Balas Klumprik">
        <div class="absolute inset-0 bg-black/40 flex items-center justify-center rounded-lg text-center px-6">
            <h1 class="text-3xl md:text-5xl text-white font-bold leading-tight">
                Profil Yayasan<br><br>
                Pendidikan Peduli Lingkungan dan Sosial Indonesia</span>
            </h1>
        </div>
    </div>

    <div class="max-w-5xl mx-auto px-6 text-center reveal">
        <h1 class="text-4xl md:text-5xl font-extrabold text-[#7c1f1f] mb-5">
            Tentang Kami
        </h1>
        <p class="text-lg text-gray-600 leading-relaxed">
        Yayasan Pendidikan Peduli Lingkungan dan Sosial Indonesia (PPLSI)
        diinisiasi sejak tahun 2014 sebagai gerakan pendidikan kemasyarakatan
        yang berfokus pada isu sosial, lingkungan, dan literasi berbasis
        kearifan lokal. Yayasan ini berkomitmen membangun kesadaran kolektif
        dan kemandirian masyarakat melalui program pendidikan non-formal,
        kolaborasi lintas sektor, dan pemberdayaan komunitas.
        </p>
    </div>
</div>

{{-- TATA KELOLA YAYASAN --}}
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-6">

        {{-- Header --}}
        <div class="text-center mb-16 reveal">
            <span class="text-[#7c1f1f] uppercase tracking-widest text-sm font-medium">
                Tata Kelola Organisasi
            </span>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-4">
                Struktur & Kepemimpinan Yayasan
            </h2>
            <p class="text-gray-600 max-w-3xl mx-auto mt-4">
                Yayasan dikelola secara profesional, transparan, dan akuntabel
                melalui struktur organisasi yang jelas sesuai ketentuan perundang-undangan.
            </p>
        </div>

        {{-- Struktur --}}
        <div class="grid md:grid-cols-3 gap-10">

            <!-- PEMBINA -->
            <div class="border rounded-2xl p-8 text-center shadow-sm reveal">
                <div class="flex justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="w-12 h-12 text-[#7c1f1f]"
                         fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M3 21h18M4 21V7l8-4 8 4v14M9 21v-6h6v6"/>
                    </svg>
                </div>
                <h4 class="font-semibold text-lg mb-2">Pembina Yayasan</h4>
                <p class="text-sm text-gray-600">
                    Berperan dalam penetapan arah kebijakan umum dan pengawasan
                    terhadap visi serta nilai dasar yayasan.
                </p>
            </div>

            <!-- PENGURUS -->
            <div class="border rounded-2xl p-8 text-center shadow-sm reveal">
                <div class="flex justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="w-12 h-12 text-[#7c1f1f]"
                         fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M17 20h5v-2a4 4 0 00-4-4h-1M9 20H4v-2a4 4 0 014-4h1
                                 M12 12a4 4 0 100-8 4 4 0 000 8z"/>
                    </svg>
                </div>
                <h4 class="font-semibold text-lg mb-2">Pengurus Yayasan</h4>
                <p class="text-sm text-gray-600">
                    Bertanggung jawab atas pengelolaan program, operasional,
                    dan keberlanjutan kegiatan pendidikan serta sosial.
                </p>
            </div>

            <!-- PENGAWAS -->
            <div class="border rounded-2xl p-8 text-center shadow-sm reveal">
                <div class="flex justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="w-12 h-12 text-[#7c1f1f]"
                         fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M9 12l2 2 4-4m5 2a9 9 0 11-18 0
                                 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h4 class="font-semibold text-lg mb-2">Pengawas Yayasan</h4>
                <p class="text-sm text-gray-600">
                    Mengawasi tata kelola, keuangan, dan kepatuhan yayasan
                    terhadap prinsip akuntabilitas dan transparansi.
                </p>
            </div>

        </div>

    </div>
</section>

<!-- FOTO & INFORMASI UNIT YAYASAN -->
<section class="py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-start">

        <!-- FOTO REPRESENTATIF YAYASAN -->
        <div class="reveal">
            <img 
                src="{{ asset('images/Sekolahh.jpg') }}" 
                alt="Kegiatan Yayasan Pendidikan Peduli Lingkungan dan Sosial Indonesia"
                class="w-full h-[470px] object-cover rounded-xl shadow-lg"
            >
        </div>

        <!-- INFORMASI UNIT YAYASAN -->
        <div class="bg-white rounded-xl shadow-lg p-8 reveal h-[470px] overflow-auto">
            <h2 class="text-3xl font-bold mb-6 text-[#7c1f1f]">
                Informasi Unit Yayasan
            </h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-gray-700">

                <p>
                    <strong>Nama Yayasan:</strong><br>
                    Yayasan Pendidikan Peduli Lingkungan dan Sosial Indonesia
                </p>

                <p>
                    <strong>Status Badan Hukum:</strong><br>
                    Yayasan (Terdaftar Kemenkumham RI)
                </p>

                <p>
                    <strong>Legalitas:</strong><br>
                    AHU No. 0002310.AH.01.04 Tahun 2017
                </p>

                <p>
                    <strong>Tanggal Pendirian:</strong><br>
                    Tahun 2017
                </p>

                <p>
                    <strong>Tahun Inisiasi Kegiatan:</strong><br>
                    2014
                </p>

                <p>
                    <strong>Domisili:</strong><br>
                    Desa Slempit, Kecamatan Kedamean,<br>
                    Kabupaten Gresik, Provinsi Jawa Timur
                </p>

            </div>
        </div>

    </div>
</section>


<section class="py-24 bg-[#7c1f1f] text-white">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-16 reveal">

        <div>
            <h2 class="text-3xl font-bold mb-4">Visi Yayasan</h2>
            <p class="leading-relaxed text-lg">
                Tumbuh dan berkembang bersama masyarakat melalui pendidikan
                kemasyarakatan yang berpijak pada kearifan lokal, kepedulian sosial,
                dan keberlanjutan lingkungan.
            </p>
        </div>

        <div>
            <h2 class="text-3xl font-bold mb-4">Misi Yayasan</h2>
            <ul class="space-y-3 text-lg list-disc list-inside">
                <li>Mengembangkan pembelajaran aktif dan bermakna</li>
                <li>Menanamkan nilai karakter dan budaya positif</li>
                <li>Mendorong prestasi akademik dan non-akademik</li>
                <li>Menciptakan lingkungan sekolah yang aman dan inklusif</li>
            </ul>
        </div>

    </div>
</section>

<!-- SEJARAH SEKOLAH -->
<section class="py-16 bg-gray-50">
    <div class="max-w-5xl mx-auto px-6">
        <div class="bg-white rounded-xl shadow-lg p-8 reveal">
            <h2 class="text-3xl font-bold mb-6 text-gray-900 text-center">Sejarah & Perjalanan Yayasan</h2>
            <p class="text-gray-600 leading-relaxed mb-4">
                Yayasan ini berawal dari kepedulian terhadap kebutuhan
                pendidikan masyarakat di wilayah Kedamean dan sekitarnya.
                Sejak tahun 1985, yayasan secara konsisten mendukung
                penyelenggaraan pendidikan dasar yang berkualitas,
                berorientasi pada pembentukan karakter dan nilai kebangsaan.
            <p class="text-gray-600 leading-relaxed">
                Seiring perkembangan zaman, yayasan terus beradaptasi
                dengan tantangan pendidikan modern melalui peningkatan
                mutu pengelolaan, penguatan sumber daya manusia, serta
                kolaborasi dengan berbagai pihak. Perjalanan ini menjadi
                fondasi kuat dalam membangun kepercayaan publik dan
                keberlanjutan lembaga pendidikan yang dikelola.
        </div>
    </div>
</section>

<section class="py-28 bg-gradient-to-b from-white to-gray-50">
  <div class="max-w-7xl mx-auto px-6">

    <!-- Header -->
    <div class="text-center mb-20">
      <span class="text-[#7c1f1f] uppercase tracking-widest text-sm">
        Pendidikan Kemasyarakatan
      </span>
      <h2 class="text-4xl md:text-5xl font-light mt-4">
        Peta Jalan <span class="font-semibold">Program Unggulan</span>
      </h2>
      <p class="text-gray-600 max-w-3xl mx-auto mt-6">
        Alur pengembangan program yayasan dari penguatan kapasitas,
        pemetaan masalah, hingga implementasi dan evaluasi dampak
        bagi masyarakat secara berkelanjutan.
      </p>
    </div>

    <!-- Roadmap -->
    <div class="grid md:grid-cols-5 gap-8">

      <!-- STEP 1 -->
      <div class="bg-white rounded-2xl shadow-lg p-6 text-center hover:-translate-y-1 transition">
        <div class="w-14 h-14 mx-auto mb-5 flex items-center justify-center rounded-full bg-gray-100">
          <!-- ICON: Training -->
          <svg class="w-7 h-7 text-gray-700" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path d="M12 14l9-5-9-5-9 5 9 5z"/>
            <path d="M12 14l6.16-3.422A12.083 12.083 0 0 1 12 21.5a12.083 12.083 0 0 1-6.16-10.922L12 14z"/>
          </svg>
        </div>
        <h3 class="font-semibold text-lg mb-2">Training Activities</h3>
        <p class="text-sm text-gray-600">
          Pembekalan kapasitas melalui pelatihan daring & luring
          dengan modul dasar dan spesialisasi.
        </p>
      </div>

      <!-- STEP 2 -->
      <div class="bg-white rounded-2xl shadow-lg p-6 text-center hover:-translate-y-1 transition">
        <div class="w-14 h-14 mx-auto mb-5 flex items-center justify-center rounded-full bg-blue-50">
          <!-- ICON: Mapping -->
          <svg class="w-7 h-7 text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path d="M9 20l-5.447-2.724A2 2 0 0 1 2 15.382V4.618a2 2 0 0 1 2.553-1.894L9 4m0 16l6-3m-6 3V4m6 13l5.447 2.724A2 2 0 0 0 22 19.382V8.618a2 2 0 0 0-2.553-1.894L15 8m0 9V8m0 9l-6 3"/>
          </svg>
        </div>
        <h3 class="font-semibold text-lg mb-2">Problem Mapping</h3>
        <p class="text-sm text-gray-600">
          Pemetaan masalah, penentuan target early adopters,
          serta validasi bersama mentor ahli.
        </p>
      </div>

      <!-- STEP 3 -->
      <div class="bg-white rounded-2xl shadow-lg p-6 text-center hover:-translate-y-1 transition">
        <div class="w-14 h-14 mx-auto mb-5 flex items-center justify-center rounded-full bg-red-50">
          <!-- ICON: Solution -->
          <svg class="w-7 h-7 text-red-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path d="M12 3a7 7 0 0 0-4 12.74V21h8v-5.26A7 7 0 0 0 12 3z"/>
          </svg>
        </div>
        <h3 class="font-semibold text-lg mb-2">Solution Development</h3>
        <p class="text-sm text-gray-600">
          Perumusan konsep, pembuatan prototipe,
          uji solusi, dan validasi dampak awal.
        </p>
      </div>

      <!-- STEP 4 -->
      <div class="bg-white rounded-2xl shadow-lg p-6 text-center hover:-translate-y-1 transition">
        <div class="w-14 h-14 mx-auto mb-5 flex items-center justify-center rounded-full bg-orange-50">
          <!-- ICON: Execution -->
          <svg class="w-7 h-7 text-orange-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path d="M14 3l-1 7h7l-9 11 1-7H5l9-11z"/>
          </svg>
        </div>
        <h3 class="font-semibold text-lg mb-2">Project Execution</h3>
        <p class="text-sm text-gray-600">
          Implementasi solusi pada skala lebih luas
          dengan kolaborasi multipihak.
        </p>
      </div>

      <!-- STEP 5 -->
      <div class="bg-white rounded-2xl shadow-lg p-6 text-center hover:-translate-y-1 transition">
        <div class="w-14 h-14 mx-auto mb-5 flex items-center justify-center rounded-full bg-yellow-50">
          <!-- ICON: Impact -->
          <svg class="w-7 h-7 text-yellow-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path d="M9 17v-6h13v6M9 5h13M5 9v10"/>
          </svg>
        </div>
        <h3 class="font-semibold text-lg mb-2">Impact & Evaluation</h3>
        <p class="text-sm text-gray-600">
          Pengukuran dampak, evaluasi menyeluruh,
          dan pelaporan sebagai dasar replikasi.
        </p>
      </div>

    </div>
  </div>
</section>

<section class="py-28 bg-gray-50 reveal">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-16 items-center">

            <div>
               <span class="text-[#7c1f1f] uppercase tracking-widest text-sm font-medium">Our Legacy</span>

                <h2 class="text-4xl font-light mt-4 mb-6">
                    Membangun Generasi Berkarakter
                    <span class="text-[#7c1f1f] font-medium">Selama Lebih dari 30 Tahun</span>
                </h2>

                <p class="text-gray-600 leading-relaxed">
                    moral, kebangsaan, dan karakter luhur melalui
                    pengelolaan lembaga pendidikan yang profesional,
                    inklusif, dan berorientasi pada masa depan.
                </p>
            </div>

            <div>
                <img src="{{ asset('images/legalcycy.jpg') }}"
                    class="rounded-2xl shadow-xl w-full"
                    alt="Legacy">
            </div>

        </div>
</section>

{{-- VIDEO PROFIL YAYASAN --}}
<section class="py-24 bg-gray-50 reveal">
    <div class="max-w-7xl mx-auto px-6">

        <div class="grid md:grid-cols-2 gap-16 items-center">

            {{-- TEKS NARASI --}}
            <div>
                <span class="text-[#7c1f1f] uppercase tracking-widest text-sm font-medium">
                    Profil & Dokumentasi Yayasan
                </span>

                <h2 class="text-4xl font-light mt-4 mb-6 text-gray-900">
                    Komitmen Nyata dalam
                    <span class="text-[#7c1f1f] font-medium">Membangun Pendidikan</span>
                </h2>

                <p class="text-gray-600 leading-relaxed mb-4">
                    Video ini merekam perjalanan, aktivitas, serta keterlibatan
                    yayasan dalam mendukung dunia pendidikan melalui kolaborasi,
                    pengabdian, dan pembangunan ekosistem belajar yang berkelanjutan.
                </p>

                <p class="text-gray-600 leading-relaxed">
                    Dokumentasi ini menjadi bagian dari transparansi dan rekam jejak
                    yayasan dalam menjalankan perannya bagi masyarakat dan generasi
                    masa depan.
                </p>
            </div>

            {{-- VIDEO RESPONSIVE --}}
            <div class="relative w-full overflow-hidden rounded-2xl shadow-xl aspect-video">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/g_yeWlCprJE?si=zNOK11fiZZViMB9U" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>

        </div>

    </div>
</section>
@endsection
