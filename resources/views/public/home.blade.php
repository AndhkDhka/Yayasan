@extends('layouts.app')

@section('title', 'Beranda - Yayasan PPLSI')

@section('content')

{{-- HERO SECTION --}}
<section 
    class="relative w-full h-screen overflow-hidden"
    x-data="heroSlider([
        '{{ asset('images/Backgrounds.jpg') }}',
        '{{ asset('images/Background1.jpg') }}',
        '{{ asset('images/Backgrounds2.jpg') }}'
    ])"
    x-init="init()"
>
    {{-- Background Image --}}
    <template x-for="(image, index) in images" :key="index">
        <div 
            class="absolute inset-0 w-full h-full transition-opacity duration-1000 ease-in-out"
            :class="currentIndex === index ? 'opacity-100' : 'opacity-0'"
            :style="`background-image: url('${image}'); background-size: cover; background-position: center; background-repeat: no-repeat;`">
        </div>
    </template>

    <div class="absolute inset-0 bg-black/60"></div>

    {{-- Konten hero, centered vertikal & horizontal --}}
    <div class="relative z-10 flex items-center justify-center h-full text-center px-6">
        <div class="text-white max-w-3xl">
            <h1 class="text-4xl md:text-6xl font-extrabold mb-4">
                Tumbuh & Berkembang <br>
                dengan <span class="text-[#7c1f1f]">Kearifan Lokal</span>
            </h1>
            <p class="text-lg mb-8">
                Yayasan Pendidikan Peduli Lingkungan dan Sosial Indonesia (PPLSI) 
                    adalah gerakan pendidikan kemasyarakatan yang berfokus pada 
                    pemberdayaan sosial, lingkungan, dan literasi berbasis komunitas 
                    sejak 2014.</p>
            <div class="flex justify-center gap-4 flex-wrap">
                <a href="/profil"
                   class="border border-white px-8 py-3 rounded-lg
                     hover:bg-white hover:text-[#7c1f1f] transition">
                    Tentang Yayasan
                </a>
            </div>
        </div>
    </div>
</section>

{{-- INFORMASI PENEMPATAN FOTO (ALA SPH) --}}
<section class="py-20 bg-white reveal">
    <div class="max-w-7xl mx-auto px-6">

        {{-- Judul --}}
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-[#7c1f1f] mb-4">
                Program Unggulan Yayasan
            </h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
               Program pendidikan kemasyarakatan dan pemberdayaan sosial–lingkungan
                yang dirancang bertahap melalui fase Merintis, Berkembang, hingga Stabil.
            </p>
        </div>

        {{-- GRID FOTO + INFO --}}
        <div class="grid md:grid-cols-3 gap-10">

            {{-- ITEM 1 --}}
            <div class="group">
                <div class="overflow-hidden rounded-xl shadow-lg">
                    <img
                        src="{{ asset('images/fasilitas-kelasz.jpg') }}"
                        class="w-full h-72 object-cover transform group-hover:scale-105 transition duration-500"
                        alt="Ruang Kelas"
                    >
                </div>
                <h3 class="text-xl font-semibold mt-5">
                     Pendidikan Kemasyarakatan
                </h3>
                <p class="text-gray-600 mt-2">
                    Program literasi, edukasi lingkungan, dan penguatan kapasitas masyarakat
                    berbasis kearifan lokal.
                </p>
            </div>

            {{-- ITEM 2 --}}
            <div class="group">
                <div class="overflow-hidden rounded-xl shadow-lg">
                    <img
                        src="{{ asset('images/kegiatan.jpg') }}"
                        class="w-full h-72 object-cover transform group-hover:scale-105 transition duration-500"
                        alt="Kegiatan Siswa"
                    >
                </div>
                <h3 class="text-xl font-semibold mt-5">
                    Pemberdayaan Difabel
                </h3>
                <p class="text-gray-600 mt-2">
                    Produk sabun arang bambu karya bersama kaum difabel yang meraih
                    penghargaan nasional Wirausaha Muda Mandiri.
                </p>
            </div>

            {{-- ITEM 3 --}}
            <div class="group">
                <div class="overflow-hidden rounded-xl shadow-lg">
                    <img
                        src="{{ asset('images/lingkungan.jpg') }}"
                        class="w-full h-72 object-cover transform group-hover:scale-105 transition duration-500"
                        alt="Lingkungan Sekolah">
                </div>
                <h3 class="text-xl font-semibold mt-5">
                    Kolaborasi Sosial & Lingkungan
                </h3>
                <p class="text-gray-600 mt-2">
                    Kolaborasi dengan komunitas, perguruan tinggi, industri,
                    dan pemerintah untuk dampak berkelanjutan.
                </p>
            </div>

        </div>
    </div>
</section>

<section class="py-24 bg-white reveal">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h2 class="text-4xl font-light mb-16">
            Capaian & Dampak <span class="text-[#7c1f1f] font-medium">Yayasan</span>
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-16">
            <div class="group">
                <div class="text-5xl font-bold text-gray-800">2014</div>
                <p class="mt-2 text-gray-500">Tahun Inisiasi Yayasan</p>
            </div>

            <div class="group">
                <div class="text-5xl font-bold text-gray-800">2017</div>
                <p class="mt-2 text-gray-500">Legalitas Kemenkumham RI</p>
            </div>

            <div class="group">
                <div class="text-5xl font-bold text-gray-800">5+</div>
                <p class="mt-2 text-gray-500">Penghargaan Nasional</p>
            </div>

            <div class="group">
                <div class="text-5xl font-bold text-gray-800">10</div>
                <p class="mt-2 text-gray-500">Mitra & Kolaborator</p>
            </div>
        </div>
    </div>
</section>


{{-- BERITA / KEGIATAN SISWA --}}
<section class="py-28 bg-gradient-to-b from-white to-gray-50">
  <div class="max-w-7xl mx-auto px-6 text-center">

    <!-- Header -->
    <div class="mb-16">
      <span class="text-[#7c1f1f] uppercase tracking-widest text-sm">
        Core Values
      </span>
      <h2 class="text-4xl font-light mt-4">
        Nilai-Nilai Inti <span class="font-medium text-[#7c1f1f]">Yayasan</span>
      </h2>
      <p class="text-gray-600 max-w-2xl mx-auto mt-6">
        Prinsip dasar yang menjadi landasan etika, budaya kerja,
        dan pengambilan keputusan dalam setiap program yayasan.
      </p>
    </div>

    <!-- Values -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-5 gap-10">

      <!-- Integritas -->
      <div class="bg-white rounded-2xl shadow-md p-6 hover:-translate-y-1 transition reveal">
        <div class="w-14 h-14 mx-auto mb-4 flex items-center justify-center rounded-full bg-[#7c1f1f]/10">
          <svg class="w-7 h-7 text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path d="M12 3l8 4v6c0 5-3.5 7.5-8 9-4.5-1.5-8-4-8-9V7l8-4z"/>
          </svg>
        </div>
        <h4 class="font-semibold text-lg">Integritas</h4>
        <p class="text-sm text-gray-600 mt-2">
          Menjunjung kejujuran, konsistensi, dan transparansi
          dalam setiap tanggung jawab.
        </p>
      </div>

      <!-- Disiplin -->
      <div class="bg-white rounded-2xl shadow-md p-6 hover:-translate-y-1 transition reveal">
        <div class="w-14 h-14 mx-auto mb-4 flex items-center justify-center rounded-full bg-gray-100">
          <svg class="w-7 h-7 text-gray-700" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path d="M12 8v4l3 3"/>
            <circle cx="12" cy="12" r="9"/>
          </svg>
        </div>
        <h4 class="font-semibold text-lg">Disiplin</h4>
        <p class="text-sm text-gray-600 mt-2">
          Menghargai waktu, proses, dan komitmen
          demi hasil yang berkelanjutan.
        </p>
      </div>

      <!-- Gotong Royong -->
      <div class="bg-white rounded-2xl shadow-md p-6 hover:-translate-y-1 transition reveal">
        <div class="w-14 h-14 mx-auto mb-4 flex items-center justify-center rounded-full bg-green-50">
          <svg class="w-7 h-7 text-green-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path d="M17 20h5v-2a4 4 0 0 0-4-4h-1"/>
            <path d="M9 20H4v-2a4 4 0 0 1 4-4h1"/>
            <circle cx="12" cy="7" r="4"/>
          </svg>
        </div>
        <h4 class="font-semibold text-lg">Gotong Royong</h4>
        <p class="text-sm text-gray-600 mt-2">
          Bekerja bersama lintas komunitas
          untuk menciptakan dampak nyata.
        </p>
      </div>

      <!-- Tanggung Jawab -->
      <div class="bg-white rounded-2xl shadow-md p-6 hover:-translate-y-1 transition reveal">
        <div class="w-14 h-14 mx-auto mb-4 flex items-center justify-center rounded-full bg-orange-50">
          <svg class="w-7 h-7 text-orange-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path d="M12 6v6l4 2"/>
            <circle cx="12" cy="12" r="9"/>
          </svg>
        </div>
        <h4 class="font-semibold text-lg">Tanggung Jawab</h4>
        <p class="text-sm text-gray-600 mt-2">
          Bertanggung jawab atas proses,
          hasil, dan dampak sosial program.
        </p>
      </div>

      <!-- Kepedulian -->
      <div class="bg-white rounded-2xl shadow-md p-6 hover:-translate-y-1 transition reveal">
        <div class="w-14 h-14 mx-auto mb-4 flex items-center justify-center rounded-full bg-red-50">
          <svg class="w-7 h-7 text-red-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path d="M12 21s-6-4.35-9-7.5A5.4 5.4 0 0 1 12 6a5.4 5.4 0 0 1 9 7.5C18 16.65 12 21 12 21z"/>
          </svg>
        </div>
        <h4 class="font-semibold text-lg">Kepedulian</h4>
        <p class="text-sm text-gray-600 mt-2">
          Peka terhadap isu sosial dan
          lingkungan sebagai dasar gerakan.
        </p>
      </div>

    </div>
  </div>
</section>

<section class="py-28 bg-gray-50 reveal">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-16 items-center">

         <div class="reveal md:order-1 order-2">
            <img src="{{ asset('images/legalicy.jpg') }}"
                 class="rounded-2xl shadow-xl w-full"
                 alt="Legacy">
        </div>

        <div class="reveal md:order-2 order-1">
            <span class="text-[#7c1f1f] uppercase tracking-widest text-sm">Bergabung dalam Komitmen Pendidikan</span>

            <h2 class="text-4xl font-light mt-4 mb-6">
                Membangun Budaya Membaca
                <span class="text-[#7c1f1f]">Over 30 Years</span>
            </h2>

            <p class="text-gray-600 leading-relaxed">
                Dukung perubahan nyata dalam dunia pendidikan melalui program, kemitraan
                dan kontribusi bersama kami.
            </p>
        </div>
    </div>
</section>

{{-- JEJAK KOLABORASI & KUNJUNGAN --}}
<section class="py-24 bg-white reveal">
    <div class="max-w-7xl mx-auto px-6">

        {{-- Judul --}}
        <div class="text-center mb-16">
            <h2 class="text-4xl font-light text-gray-900 mb-4">
                Jejak <span class="text-[#7c1f1f]">Kolaborasi & Kunjungan</span>
            </h2>
            <p class="text-gray-600 max-w-3xl mx-auto">
                Dokumentasi kunjungan dan kolaborasi bersama pemerintah, 
                perguruan tinggi, serta mitra pendidikan sebagai bentuk kepercayaan
                dan pengakuan terhadap peran yayasan.
            </p>
        </div>

        {{-- Grid Dokumentasi --}}
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-10">

            {{-- ITEM --}}
            <div class="group">
                <div class="overflow-hidden rounded-xl shadow-lg">
                    <img src="{{ asset('images/kunjungan-kementerian.jpg') }}"
                         class="w-full h-72 object-cover group-hover:scale-105 transition duration-500"
                         alt="Kunjungan Kementerian">
                </div>
                <h3 class="text-lg font-semibold mt-5">
                    Kunjungan Kementerian
                </h3>
                <p class="text-gray-600 text-sm mt-2">
                    Kunjungan dalam rangka peninjauan dan dialog penguatan 
                    kualitas pendidikan di lingkungan yayasan.
                </p>
            </div>

            <div class="group">
                <div class="overflow-hidden rounded-xl shadow-lg">
                    <img src="{{ asset('images/kunjungan-gubernur.jpg') }}"
                         class="w-full h-72 object-cover group-hover:scale-105 transition duration-500"
                         alt="Kunjungan Gubernur">
                </div>
                <h3 class="text-lg font-semibold mt-5">
                    Kunjungan Pemerintah Daerah
                </h3>
                <p class="text-gray-600 text-sm mt-2">
                    Silaturahmi dan dukungan pemerintah daerah terhadap 
                    pengembangan lembaga pendidikan yayasan.
                </p>
            </div>

            <div class="group">
                <div class="overflow-hidden rounded-xl shadow-lg">
                    <img src="{{ asset('images/kolaborasi-kampus.jpg') }}"
                         class="w-full h-72 object-cover group-hover:scale-105 transition duration-500"
                         alt="Kolaborasi Kampus">
                </div>
                <h3 class="text-lg font-semibold mt-5">
                    Kolaborasi Perguruan Tinggi
                </h3>
                <p class="text-gray-600 text-sm mt-2">
                    Kegiatan akademik dan pengabdian masyarakat bersama 
                    mahasiswa dari berbagai perguruan tinggi.
                </p>
            </div>

        </div>
    </div>
</section>

@endsection
