@extends('layouts.app')

@section('title', 'PPDB Sekolah')

@section('content')

<section class="relative h-[70vh] flex items-center justify-center text-center">
    <img src="{{ asset('images/lingkungan.jpg') }}"
         class="absolute inset-0 w-full h-full object-cover">
    <div class="absolute inset-0 bg-[#7c1f1f]/60"></div>

    <div class="relative z-10 text-white max-w-3xl px-6">
        <h1 class="text-4xl md:text-6xl font-extrabold mb-6 leading-tight">
            Rekam Prestasi
            <br>
            <span class="text-white-400">Bukti Kualitas Pendidikan</span>
        </h1>
        <p class="text-lg md:text-xl opacity-90">
            Rekam jejak Yayasan mencetak peserta didik
            berprestasi, berkarakter, dan siap menghadapi masa depan.
        </p>
    </div>
</section>

<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-4 gap-8 text-center">

        <div class="reveal">
            <h3 class="text-5xl font-extrabold text-[#7c1f1f]">2014</h3>
            <p class="mt-3 text-gray-600">
                Tahun Inisiasi Yayasan
            </p>
        </div>

        <div class="reveal">
            <h3 class="text-5xl font-extrabold text-[#7c1f1f]">6+</h3>
            <p class="mt-3 text-gray-600">
                Program & Apresiasi Nasional
            </p>
        </div>

        <div class="reveal">
            <h3 class="text-5xl font-extrabold text-[#7c1f1f]">5+</h3>
            <p class="mt-3 text-gray-600">
                Mitra Strategis Nasional
            </p>
        </div>

        <div class="reveal">
            <h3 class="text-5xl font-extrabold text-[#7c1f1f]">3</h3>
            <p class="mt-3 text-gray-600">
                Fase Pengembangan Program
            </p>
        </div>

    </div>
</section>

<section class="py-28 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-20 reveal">
            <h2 class="text-3xl md:text-4xl font-bold text-[#7c1f1f] mb-4">
                Prestasi Unggulan Peserta Didik
            </h2>
            <p class="text-gray-600 max-w-3xl mx-auto">
                Capaian akademik dan non-akademik yang mencerminkan
                kualitas pembinaan, kedisiplinan, dan budaya berprestasi sekolah.
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-12">

            {{-- ITEM --}}
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden reveal">
                <img src="{{ asset('images/prestasi/olimpiade-matematika.jpg') }}"
                     class="h-56 w-full object-cover">
                <div class="p-6">
                    <h4 class="font-semibold text-[#7c1f1f] mb-2">
                        Olimpiade Matematika
                    </h4>
                    <p class="text-sm text-gray-600">
                        Juara 1 tingkat Kabupaten, membuktikan
                        keunggulan literasi numerasi siswa.
                    </p>
                </div>
            </div>

            <div class="bg-white rounded-2xl shadow-lg overflow-hidden reveal">
                <img src="{{ asset('images/prestasi/seni-tari.jpg') }}"
                     class="h-56 w-full object-cover">
                <div class="p-6">
                    <h4 class="font-semibold text-[#7c1f1f] mb-2">
                        Festival Seni Tari
                    </h4>
                    <p class="text-sm text-gray-600">
                        Juara 2 tingkat Provinsi, hasil pembinaan
                        minat dan bakat seni budaya.
                    </p>
                </div>
            </div>

            <div class="bg-white rounded-2xl shadow-lg overflow-hidden reveal">
                <img src="{{ asset('images/prestasi/pramuka.jpg') }}"
                     class="h-56 w-full object-cover">
                <div class="p-6">
                    <h4 class="font-semibold text-[#7c1f1f] mb-2">
                        Lomba Pramuka
                    </h4>
                    <p class="text-sm text-gray-600">
                        Juara Umum, mencerminkan karakter,
                        kepemimpinan, dan kerja sama tim.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- PERFORMANCE / APRESIASI & MITRA --}}
<section class="py-28 bg-gradient-to-br from-slate-50 to-white">
    <div class="max-w-7xl mx-auto px-6">

        {{-- Header --}}
        <div class="text-center mb-20 reveal">
           <span class="text-[#7c1f1f] uppercase tracking-widest text-sm font-semibold">
                Performance Yayasan
            </span>
            <h2 class="text-3xl md:text-4xl font-bold text-[#7c1f1f] mt-4 mb-4">
                Apresiasi & Mitra Nasional
            </h2>
            <p class="text-gray-600 max-w-3xl mx-auto">
                Rekam jejak kolaborasi, program nasional, dan mitra strategis
                yang memperkuat dampak yayasan di bidang pendidikan,
                kepemudaan, kewirausahaan, dan sosial.
            </p>
        </div>

        {{-- CONTAINER LOGO --}}
        <div class="bg-white rounded-[2.5rem] shadow-xl p-10 md:p-14">

            <div class="flex flex-wrap justify-center items-center gap-10 md:gap-14">

                @foreach ([
                    [
                        'logo' => 'logo/kemendikbud.png',
                        'nama' => 'Program Organisasi Penggerak',
                        'ket'  => 'Kemendikbud RI (2021–2023)',
                        'size' => 'w-40'
                    ],
                    [
                        'logo' => 'logo/logo-profile.png',
                        'nama' => 'Peraih Mandaya Awward',
                        'ket'  => 'kemenko koordinator pemberdayaan masyarakat (2025)',
                        'size' => 'w-44'
                    ],
                    [
                        'logo' => 'logo/KPAI.png',
                        'nama' => 'Peraih Anugerah KPAI',
                        'ket'  => 'Komisi Perlindungan Anak Indonesia (2025)',
                        'size' => 'w-36'
                    ],
                    [
                        'logo' => 'logo/pfmuda.png',
                        'nama' => 'PFMuda',
                        'ket'  => 'Pertamina Foundation (2021–2024)',
                        'size' => 'w-32'
                    ],
                    [
                        'logo' => 'logo/shell-livewire.png',
                        'nama' => 'Shell LiveWIRE Energy',
                        'ket'  => 'Program Kewirausahaan (2020)',
                        'size' => 'w-40'
                    ],
                    [
                        'logo' => 'logo/matching-fund.png',
                        'nama' => 'Matching Fund',
                        'ket'  => 'PT KPI RU II Dumai (2023)',
                        'size' => 'w-36'
                    ],
                    [
                        'logo' => 'logo/wirausaha-muda-mandiri.png',
                        'nama' => 'Wirausaha Muda Mandiri',
                        'ket'  => 'Program Nasional UMKM',
                        'size' => 'w-28'
                    ],
                    [
                        'logo' => 'logo/baznas.png',
                        'nama' => 'BAZNAS',
                        'ket'  => 'Kolaborasi Sosial & Pemberdayaan',
                        'size' => 'w-28'
                    ],
                    [
                        'logo' => 'logo/pemkab-gresik.png',
                        'nama' => 'Pemerintah Daerah',
                        'ket'  => 'Kabupaten Gresik',
                        'size' => 'w-28'
                    ],
                    [
                        'logo' => 'logo/kemendikbud.png',
                        'nama' => 'Kementerian Pendidikan',
                        'ket'  => 'Kemendikbud RI',
                        'size' => 'w-28'
                    ],
                ] as $item)

                <div
                    class="group flex flex-col items-center text-center
                           transition-all duration-300 ease-out
                           hover:-translate-y-2">

                    <div class="bg-gray-50 rounded-2xl p-5 shadow-sm
                                group-hover:shadow-xl
                                transition-all duration-300">
                        <img
                            src="{{ asset('images/' . $item['logo']) }}"
                            alt="{{ $item['nama'] }}"
                            class="{{ $item['size'] }} h-auto mx-auto
                                   grayscale group-hover:grayscale-0
                                   transition duration-300"
                        >
                    </div>

                    <h4 class="mt-4 font-semibold text-gray-900 text-sm md:text-base">
                        {{ $item['nama'] }}
                    </h4>
                    <p class="text-xs text-gray-500 mt-1">
                        {{ $item['ket'] }}
                    </p>
                </div>

                @endforeach

            </div>

        </div>

    </div>
</section>

{{-- APRESIASI & PROGRAM NASIONAL --}}
<section class="py-28 bg-white">
    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-20 reveal">
            <h2 class="text-3xl md:text-4xl font-bold text-[#7c1f1f] mb-4">
                Apresiasi & Program Nasional
            </h2>
            <p class="text-gray-600 max-w-3xl mx-auto">
                Pengakuan dan kepercayaan dari pemerintah, industri,
                dan lembaga nasional terhadap kiprah yayasan
                dalam pendidikan, lingkungan, dan pemberdayaan masyarakat.
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">

            @foreach ([
                [
                    'logo' => 'logoprofile.png',
                    'judul' => 'Peraih Mandaya Awward 2025'
                ],
                [
                    'logo' => 'KPAI.png',
                    'judul' => 'Peraih Anugerah KPAI 2025'
                ],
                [
                    'logo' => 'pfmuda.png',
                    'judul' => 'PFMuda (2021–2024)'
                ],
                [
                    'logo' => 'pop.png',
                    'judul' => 'Program Organisasi Penggerak – Kemendikbud'
                ],
                [
                    'logo' => 'shell-livewire.png',
                    'judul' => 'Shell LiveWIRE Energy Solutions 2020'
                ],
                [
                    'logo' => 'matching-fund.png',
                    'judul' => 'Matching Fund PT KPI RU II Dumai 2023'
                ],
            ] as $item)

            <div class="bg-white border rounded-2xl p-8 shadow-sm
                        hover:shadow-xl transition reveal flex flex-col">

                <!-- LOGO -->
                <div class="h-20 flex items-center mb-6">
                    <img src="{{ asset('images/apresiasi/' . $item['logo']) }}"
                    alt="{{ $item['judul'] }}"
                    class="max-h-16 object-contain opacity-90 hover:opacity-100 transition">
                </div>

                <!-- JUDUL -->
                <h4 class="font-semibold text-lg text-[#7c1f1f] mb-2">
                    {{ $item['judul'] }}
                </h4>

                <!-- DESKRIPSI -->
                <p class="text-sm text-gray-600 leading-relaxed">
                    Program nasional yang mendukung penguatan kapasitas,
                    inovasi, serta keberlanjutan inisiatif yayasan
                    di tingkat regional dan nasional.
                </p>

            </div>

            @endforeach

        </div>
    </div>
</section>


<section class="py-28 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-16 items-center">

        <div class="reveal">
            <span class="text-[#7c1f1f] uppercase tracking-widest text-sm">
                Mitra & Kolaborator
            </span>

            <h2 class="text-3xl md:text-4xl font-semibold mt-4 mb-6 text-gray-900">
                Kolaborasi Strategis
                <span class="text-[#7c1f1f]">Lintas Sektor</span>
            </h2>

            <p class="text-gray-600 leading-relaxed mb-4">
                Yayasan menjalin kolaborasi dengan pemerintah,
                industri, perguruan tinggi, dan komunitas
                dalam pengembangan pendidikan, riset,
                serta pemberdayaan masyarakat.
            </p>

            <ul class="text-gray-700 text-sm space-y-2">
                <li>• Kementerian Pendidikan, Kebudayaan, Riset & Teknologi</li>
                <li>• PT KPI (Pertamina Group)</li>
                <li>• Shell LiveWIRE Indonesia</li>
                <li>• Perguruan Tinggi & Komunitas Riset</li>
            </ul>
        </div>

        <div class="grid grid-cols-2 gap-6 reveal">
            <img src="{{ asset('images/mitra/mitra-1.jpg') }}"
                 loading="lazy"
                 class="rounded-xl shadow-lg object-cover h-48 w-full">
            <img src="{{ asset('images/mitra/mitra-2.jpg') }}"
                 loading="lazy"
                 class="rounded-xl shadow-lg object-cover h-48 w-full">
            <img src="{{ asset('images/mitra/mitra-3.jpg') }}"
                 loading="lazy"
                 class="rounded-xl shadow-lg object-cover h-48 w-full col-span-2">
        </div>

    </div>
</section>

@endsection
