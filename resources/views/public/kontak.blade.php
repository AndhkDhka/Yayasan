@extends('layouts.app')
@section('title','Kontak')

@section('content')

<!-- HERO -->
<section class="relative h-[70vh] flex items-center justify-center text-center">
    <img src="{{ asset('images/berita.jpg') }}"
         class="absolute inset-0 w-full h-full object-cover">
    <div class="absolute inset-0 bg-[#7c1f1f]/60"></div>

    <div class="relative z-10 text-white max-w-3xl px-6">
        <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight leading-tight mb-5">Kontak Sekolah</h1>
        <p class="text-lg md:text-xl text-white/90 leading-relaxed">
            Hubungi kami untuk informasi pendaftaran, kegiatan sekolah, dan layanan pendidikan.
        </p>
    </div>
</section>

<!-- KONTEN -->
<section class="py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-16">

        <!-- INFO YAYASAN -->
        <div class="bg-white rounded-2xl shadow-lg p-10 reveal">
            <h2 class="text-2xl font-bold mb-8 text-[#7c1f1f] flex items-center gap-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-[#7c1f1f]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17.657 16.657L13.414 20.9a2 2 0 01-2.828 0l-4.243-4.243a8 8 0 1111.314 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                Informasi Sekretariat Yayasan
            </h2>
            <div class="space-y-6 text-gray-700">

                <div>
                    <p class="text-sm text-gray-500">Nama Yayasan</p>
                    <p class="font-semibold">
                        Yayasan Pendidikan Peduli Lingkungan dan Sosial Indonesia
                    </p>
                </div>

                <div>
                    <p class="text-sm text-gray-500">Legalitas</p>
                    <p>
                        Kemenkumham RI<br>
                        No. AHU-0002310.AH.01.04 Tahun 2017
                    </p>
                </div>

                <div>
                    <p class="text-sm text-gray-500">Alamat Sekretariat</p>
                    <p class="leading-relaxed">
                        Desa Slempit RT 016 RW 003<br>
                        Kecamatan Kedamean, Kabupaten Gresik<br>
                        Jawa Timur 61175
                    </p>
                </div>

                <div>
                    <p class="text-sm text-gray-500">Kontak Resmi</p>
                    <a href="https://wa.me/6281234567890"
                        target="_blank"
                        class="inline-flex items-center gap-3
                                bg-[#7c1f1f] text-white px-5 py-3
                                rounded-xl shadow hover:bg-[#651919] transition">

                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 10h.01M12 10h.01M16 10h.01M21 12c0 4.418-4.03 8-9 8a9.77 9.77 0 01-4-.8L3 20l1.3-3.9A7.4 7.4 0 013 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                            </svg>

                            WhatsApp Sekretariat
                    </a>
                </div>

                <div>
                    <p class="text-sm text-gray-500">Email Resmi</p>
                    <a href="mailto:info@yayasanpplsi.or.id"
                       class="text-[#7c1f1f] hover:underline">
                        info@yayasanpplsi.or.id
                    </a>
                </div>

                <div>
                    <p class="text-sm text-gray-500">Jam Layanan</p>
                    <p>Senin – Jumat, 08.00 – 16.00 WIB</p>
                </div>

            </div>
        </div>
        <div class="bg-white rounded-2xl shadow-lg p-10 reveal space-y-10">

            <div>
                <h3 class="text-xl font-bold mb-4 text-[#7c1f1f] flex items-center gap-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 20h5v-2a4 4 0 00-4-4h-1M9 20H4v-2a4 4 0 014-4h1
                                M12 12a4 4 0 100-8 4 4 0 000 8z"/>
                    </svg>
                    Kemitraan & Korespondensi
                </h3>
                <p class="text-gray-600 leading-relaxed">
                    Yayasan terbuka untuk kerja sama di bidang pendidikan,
                    lingkungan, pengembangan karakter, dan program sosial.
                    Seluruh bentuk kolaborasi dilakukan secara profesional
                    dan terdokumentasi.
                </p>
            </div>

            <div>
                <h3 class="text-lg font-semibold mb-3 text-[#7c1f1f] flex items-center gap-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M11 5h2m-1 0v14m7-7H5"/>
                    </svg>
                    Media Sosial Resmi Yayasan
                </h3>
                <div class="flex flex-wrap gap-4">
                    <a href="#" class="px-5 py-3 rounded-xl bg-[#7c1f1f] text-white">Facebook</a>
                    <a href="#" class="px-5 py-3 rounded-xl bg-[#7c1f1f] text-white">Instagram</a>
                    <a href="#" class="px-5 py-3 rounded-xl bg-[#7c1f1f] text-white">YouTube</a>
                </div>
            </div>

            <div class="bg-[#7c1f1f]/10 border border-[#7c1f1f]/30 p-5 rounded-xl">
                <h4 class="font-semibold text-[#7c1f1f] mb-1 flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 16h-1v-4h-1m1-4h.01M12 20a8 8 0 100-16 8 8 0 000 16z"/>
                    </svg>
                    Informasi Penting
                </h4>
                <p class="text-sm text-gray-700">
                    Seluruh komunikasi resmi yayasan hanya dilakukan melalui
                    kontak dan kanal yang tercantum di halaman ini.
                </p>
            </div>

        </div>
    </div>
</section>


<section class="w-screen relative left-1/2 right-1/2 -ml-[50vw] -mr-[50vw] bg-white">

    <div class="relative h-[650px]">

        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d417.14657020330884!2d112.52206524779334!3d-7.3218022321014775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78050007794a0d%3A0xf7f323246bfc189c!2sYPLSI%20Sekolah%20Ndesa!5e0!3m2!1sid!2sid!4v1769318394987!5m2!1sid!2sid"
            class="absolute inset-0 w-full h-full"
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>

        <!-- OVERLAY INFO -->
        <div class="absolute top-8 left-8 bg-white/95 backdrop-blur
                    p-6 rounded-2xl shadow-2xl z-10 max-w-md">
            <h3 class="text-2xl font-bold text-[#7c1f1f]">
                📍 Sekretariat Yayasan
            </h3>
            <p class="text-gray-600 leading-relaxed text-sm">
                Desa Slempit RT 016 RW 003<br>
                Kecamatan Kedamean, Kabupaten Gresik<br>
                Jawa Timur 61175
            </p>
            <p class="text-xs text-gray-500 mt-3">
                Gunakan peta untuk navigasi menuju sekretariat yayasan
            </p>
        </div>

        <!-- CTA -->
        <a href="https://www.google.com/maps?q=MGG6+9G7,+Slempit,+Kedamean,+Gresik"
           target="_blank"
           class="absolute bottom-8 right-8 bg-[#7c1f1f] hover:bg-[#651919]
       text-white px-6 py-3 rounded-xl shadow-xl transition z-10">
            Buka Lokasi di Google Maps →
        </a>

    </div>
</section>

@endsection
