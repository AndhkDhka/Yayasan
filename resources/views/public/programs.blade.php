@extends('layouts.app')

@section('title', 'Programs')

@section('content')

{{-- HERO SECTION --}}
<section class="relative h-[70vh] flex items-center justify-center text-center">
    <img src="{{ asset('images/kerjasama-kampus-2.jpg') }}"
         class="absolute inset-0 w-full h-full object-cover">
    <div class="absolute inset-0 bg-[#7c1f1f]/60"></div>

    <div class="relative z-10 text-white max-w-3xl px-6">
        <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight leading-tight mb-5">
            <span class="text-white">Unit Layanan & Program Unggulan Yayasan</span>
        </h1>
        <p class="text-lg">
             Yayasan mengelola unit pendidikan terpadu dari tingkat
            Taman Kanak-Kanak hingga Sekolah Menengah Atas
            dengan standar mutu, nilai, dan tata kelola yang berkelanjutan.
        </p>
    </div>
</section>

<section class="py-28 bg-white">
    <div class="max-w-7xl mx-auto px-6">

        <div class="grid md:grid-cols-4 gap-10">

            @foreach ([
                [
                    'nama' => 'Taman Kanak-Kanak (TK) Modern',
                    'fokus' => 'Pembelajaran holistik berbasis karakter, kreativitas, literasi awal, dan lingkungan',
                    'sasaran' => 'Anak usia 4–6 tahun',
                    'status' => 'Unit Pendidikan Aktif'
                ],
                [
                    'nama' => 'Program Mentoring Talenta',
                    'fokus' => 'Pendampingan intensif bagi anak dan remaja berprestasi akademik maupun non-akademik',
                    'sasaran' => 'Pemenang lomba & talenta potensial',
                    'status' => 'Program Pembinaan'
                ],
                [
                    'nama' => 'Program Kewirausahaan Muda',
                    'fokus' => 'Pengembangan jiwa wirausaha, kepemimpinan, dan problem solving berbasis sosial',
                    'sasaran' => 'Remaja & pemuda',
                    'status' => 'Program Pengembangan'
                ],
                [
                    'nama' => 'Program Inkubasi Prestasi & Inovasi',
                    'fokus' => 'Inkubasi lanjutan bagi peserta berprestasi untuk dikembangkan ke level regional dan nasional',
                    'sasaran' => 'Juara lomba & inovator muda',
                    'status' => 'Program Strategis'
                ]
            ] as $unit)

            <div class="bg-gray-50 rounded-2xl p-8 shadow hover:shadow-xl transition reveal">

                <h3 class="text-xl font-semibold text-[#7c1f1f] mb-2">
                    {{ $unit['nama'] }}
                </h3>

                <span class="inline-block text-xs font-medium bg-[#7c1f1f]/10 text-[#7c1f1f] px-3 py-1 rounded-full mb-4">
                    {{ $unit['status'] }}
                </span>

                <p class="text-sm text-gray-600 mb-4 leading-relaxed">
                    <strong>Fokus:</strong>
                    {{ $unit['fokus'] }}
                </p>

                <div class="text-sm text-gray-700 mb-5">
                    <strong>Sasaran Program:</strong><br>
                    {{ $unit['sasaran'] }}
                </div>

                <ul class="space-y-2 text-sm text-gray-700 border-t pt-4">
                    <li class="flex gap-2">
                        <span class="text-[#7c1f1f]">•</span> Pendampingan Terstruktur
                    </li>
                    <li class="flex gap-2">
                        <span class="text-[#7c1f1f]">•</span> Kurikulum & Modul Khusus
                    </li>
                    <li class="flex gap-2">
                        <span class="text-[#7c1f1f]">•</span> Kolaborasi Mentor & Mitra
                    </li>
                    <li class="flex gap-2">
                        <span class="text-[#7c1f1f]">•</span> Akses Jejaring & Inkubasi
                    </li>
                </ul>

            </div>

            @endforeach

        </div>
    </div>
</section>

{{-- PROGRAM INTI YAYASAN --}}
<section class="py-28 bg-[#7c1f1f] text-white">
    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-20 reveal">
            <h2 class="text-4xl md:text-5xl font-extrabold mb-6">
                Program Inti Yayasan
            </h2>
            <p class="max-w-3xl mx-auto text-white/90 leading-relaxed">
                Program yayasan dikembangkan secara tematik dan terintegrasi
                untuk menjawab tantangan pendidikan, lingkungan, energi,
                dan sosial masyarakat secara berkelanjutan.
            </p>
        </div>

        <div class="grid md:grid-cols-5 gap-10">

            {{-- ENERGI --}}
            <div class="bg-white text-gray-800 rounded-2xl p-8 shadow-xl reveal">
                <div class="flex justify-center mb-4">
                    <svg class="w-12 h-12 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                              d="M13 2L3 14h7l-1 8 10-12h-7l1-8z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3">Energi</h3>
                <p class="text-sm leading-relaxed">
                    Memastikan akses energi ramah lingkungan,
                    efisien, dan terjangkau melalui inovasi
                    energi terbarukan berbasis komunitas.
                </p>
            </div>

            {{-- LINGKUNGAN --}}
            <div class="bg-white text-gray-800 rounded-2xl p-8 shadow-xl reveal">
                <div class="flex justify-center mb-4">
                    <svg class="w-12 h-12 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                              d="M12 2C7 7 6 12 6 15a6 6 0 0012 0c0-3-1-8-6-13z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3">Lingkungan</h3>
                <p class="text-sm leading-relaxed">
                    Terlibat aktif dalam penanganan perubahan iklim
                    untuk menjaga kelestarian lingkungan hidup
                    dan keberlanjutan bumi.
                </p>
            </div>

            {{-- PENDIDIKAN --}}
            <div class="bg-white text-gray-800 rounded-2xl p-8 shadow-xl reveal">
                <div class="flex justify-center mb-4">
                    <svg class="w-12 h-12 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                              d="M12 14l9-5-9-5-9 5 9 5z"/>
                        <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                              d="M12 14l6.16-3.422A12 12 0 0112 21a12 12 0 01-6.16-10.422L12 14z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3">Pendidikan</h3>
                <p class="text-sm leading-relaxed">
                    Berpartisipasi dalam pengembangan pendidikan
                    yang merata, berkualitas, dan berorientasi
                    pada pemecahan masalah nyata.
                </p>
            </div>

            {{-- SOSIAL --}}
            <div class="bg-white text-gray-800 rounded-2xl p-8 shadow-xl reveal">
                <div class="flex justify-center mb-4">
                    <svg class="w-12 h-12 text-orange-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                              d="M17 20h5v-2a4 4 0 00-4-4h-1M9 20H4v-2a4 4 0 014-4h1
                                 M12 12a4 4 0 100-8 4 4 0 000 8z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3">Sosial</h3>
                <p class="text-sm leading-relaxed">
                    Pemberdayaan sosial untuk mewujudkan
                    kemandirian dan kesejahteraan masyarakat
                    secara inklusif.
                </p>
            </div>

            {{-- KESETARAAN --}}
            <div class="bg-white text-gray-800 rounded-2xl p-8 shadow-xl reveal">
                <div class="flex justify-center mb-4">
                    <svg class="w-12 h-12 text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                              d="M12 3v18m-7-7h14M5 7l2-2m12 2l-2-2"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3">Kesetaraan</h3>
                <p class="text-sm leading-relaxed">
                    Memperhatikan isu kesetaraan gender
                    serta pemberdayaan kelompok masyarakat
                    marginal dan difabel.
                </p>
            </div>

        </div>
    </div>
</section>

{{-- FASILITAS TK MODERN --}}
<section class="py-28 bg-gradient-to-b from-white to-gray-50">
    <div class="max-w-7xl mx-auto px-6">

        {{-- Header --}}
        <div class="text-center mb-20 reveal">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                Fasilitas Pendukung Pembelajaran
            </h2>
            <p class="text-gray-600 max-w-3xl mx-auto">
                Dirancang khusus untuk menciptakan lingkungan belajar
                yang aman, menyenangkan, dan merangsang kreativitas anak.
            </p>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-10">

            @foreach ([
                [
                    'judul' => 'Ruang Kelas Interaktif',
                    'deskripsi' => 'Kelas tematik, visual cerah, dan ramah anak.',
                    'foto' => 'kelas.jpg',
                    'icon' => 'academic-cap'
                ],
                [
                    'judul' => 'Area Bermain Outdoor',
                    'deskripsi' => 'Playground aman untuk motorik dan kerja sama.',
                    'foto' => 'playground.jpg',
                    'icon' => 'sparkles'
                ],
                [
                    'judul' => 'Perpustakaan Anak',
                    'deskripsi' => 'Buku cerita edukatif dan pojok baca nyaman.',
                    'foto' => 'perpustakaan.jpg',
                    'icon' => 'book-open'
                ],
                [
                    'judul' => 'Kebun Edukasi',
                    'deskripsi' => 'Belajar alam melalui menanam & merawat.',
                    'foto' => 'kebun.jpg',
                    'icon' => 'leaf'
                ],
                [
                    'judul' => 'Ruang Kreativitas',
                    'deskripsi' => 'Seni, musik, dan aktivitas eksploratif.',
                    'foto' => 'ruang-kreatif.jpg',
                    'icon' => 'paint-brush'
                ],
                [
                    'judul' => 'Ruang Konsultasi Orang Tua',
                    'deskripsi' => 'Diskusi perkembangan anak bersama mentor.',
                    'foto' => 'ruang-konsultasi.jpg',
                    'icon' => 'chat-bubble-left-right'
                ],
            ] as $f)

            <div class="group bg-white rounded-3xl overflow-hidden shadow
                        hover:shadow-2xl transition duration-500 reveal">

                {{-- Foto --}}
                <div class="relative h-56 overflow-hidden">
                    <img
                        src="{{ asset('images/fasilitas/' . $f['foto']) }}"
                        class="w-full h-full object-cover group-hover:scale-110 transition duration-700"
                    >
                    <div class="absolute inset-0 bg-black/10"></div>
                </div>

                {{-- Konten --}}
                <div class="p-6">
                    <div class="flex items-center gap-3 mb-3">
                        <div class="w-10 h-10 rounded-xl bg-[#7c1f1f]/10 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="w-6 h-6 text-[#7c1f1f]"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 14l9-5-9-5-9 5 9 5z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 14l6.16-3.422A12.083 12.083 0 0112 21.5c-2.28 0-4.42-.64-6.16-1.922L12 14z" />
                            </svg>
                        </div>


                        <h3 class="text-lg font-semibold text-[#7c1f1f]">
                            {{ $f['judul'] }}
                        </h3>
                    </div>

                    <p class="text-gray-600 text-sm leading-relaxed">
                        {{ $f['deskripsi'] }}
                    </p>
                </div>
            </div>

            @endforeach
        </div>
    </div>
</section>

{{-- VIDEO FASILITAS --}}
<section class="py-28 bg-white">
    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-16 reveal">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                Suasana & Aktivitas Anak
            </h2>
            <p class="text-gray-600 max-w-3xl mx-auto">
                Cuplikan aktivitas nyata yang mencerminkan suasana belajar
                yang aktif, ceria, dan penuh perhatian.
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-10">

            @foreach ([
                ['judul' => 'Kegiatan Belajar Interaktif', 'video' => 'kelas.mp4'],
                ['judul' => 'Aktivitas Bermain & Motorik', 'video' => 'bermain.mp4'],
                ['judul' => 'Kreativitas & Seni Anak', 'video' => 'kreativitas.mp4'],
            ] as $v)

            <div class="group rounded-3xl overflow-hidden shadow-lg
                        hover:shadow-2xl transition reveal">

                <div class="relative">
                    <video
                        class="w-full h-64 object-cover"
                        muted
                        loop
                        preload="metadata"
                        onmouseover="this.play()"
                        onmouseout="this.pause()"
                    >
                        <source src="{{ asset('videos/fasilitas/' . $v['video']) }}" type="video/mp4">
                    </video>

                    {{-- Overlay --}}
                    <div class="absolute inset-0 bg-black/20
                                flex items-center justify-center
                                opacity-0 group-hover:opacity-100 transition">
                        <span class="bg-white/90 text-[#7c1f1f] px-4 py-2 rounded-full text-sm font-semibold">
                            ▶ Putar Video
                        </span>
                    </div>
                </div>

                <div class="p-5 bg-white text-center">
                    <h4 class="font-semibold text-gray-800">
                        {{ $v['judul'] }}
                    </h4>
                </div>

            </div>

            @endforeach
        </div>
    </div>
</section>


{{-- PROGRAM UNGGULAN & KARYA SISWA --}}
<section class="py-32 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-20 reveal">
            <h2 class="text-3xl md:text-5xl font-bold text-[#7c1f1f] mb-6">
                Program Unggulan Berbasis Karya & Inovasi
            </h2>
            <p class="text-gray-600 max-w-4xl mx-auto leading-relaxed">
                Yayasan mengembangkan program pembelajaran berbasis proyek nyata
                untuk membentuk peserta didik yang kreatif, solutif, dan adaptif
                terhadap tantangan masa depan.
                Setiap program dirancang agar anak tidak hanya memahami teori,
                tetapi mampu mencipta, bereksperimen, dan menghasilkan karya yang berdampak.
            </p>
        </div>

        <div class="space-y-24">

            {{-- SABUN HERBAL --}}
            <div class="grid md:grid-cols-2 gap-14 items-center reveal">
                <img src="{{ asset('images/program/sabun-herbal.jpg') }}"
                     class="rounded-3xl shadow-xl w-full h-[360px] object-cover">

                <div>
                    <h3 class="text-3xl font-bold text-[#7c1f1f] mb-5">
                        Program Sabun Arang Bambu
                    </h3>

                    <p class="text-gray-700 leading-relaxed mb-5">
                        Program ini dirancang untuk memperkenalkan peserta didik
                        pada pemanfaatan sumber daya alam secara bijak melalui
                        pembuatan sabun herbal berbahan tumbuhan lokal.
                        Anak belajar bahwa sains, kesehatan, dan lingkungan
                        dapat diolah menjadi produk yang bernilai guna dan bernilai ekonomi.
                    </p>

                    <ul class="space-y-3 text-gray-700 mb-6">
                        <li>• Pengenalan sifat tanaman dan bahan alami</li>
                        <li>• Proses pembuatan sabun secara aman dan higienis</li>
                        <li>• Pengujian kualitas dan kemasan produk</li>
                        <li>• Edukasi kewirausahaan dan pemasaran sederhana</li>
                    </ul>

                    <div class="text-sm text-gray-600">
                        <strong>Output:</strong> Produk sabun herbal siap pakai dan pameran karya siswa<br>
                        <strong>Nilai Unggul:</strong> Sains terapan • Lingkungan • Kewirausahaan dini
                    </div>
                </div>
            </div>

            {{-- BRIKET --}}
            <div class="grid md:grid-cols-2 gap-14 items-center reveal md:flex-row-reverse">
                <div>
                    <h3 class="text-3xl font-bold text-[#7c1f1f] mb-5">
                        Program Energi Terbarukan & Briket Ramah Lingkungan
                    </h3>

                    <p class="text-gray-700 leading-relaxed mb-5">
                        Melalui program ini, peserta didik diajak memahami
                        tantangan energi dan lingkungan melalui praktik langsung
                        mengolah limbah organik menjadi briket sebagai sumber energi alternatif.
                        Anak dilatih berpikir kritis terhadap permasalahan global
                        dan mencari solusi berbasis lingkungan sekitar.
                    </p>

                    <ul class="space-y-3 text-gray-700 mb-6">
                        <li>• Pemahaman konsep energi dan limbah</li>
                        <li>• Proses pembuatan briket dari bahan organik</li>
                        <li>• Uji efisiensi dan daya bakar</li>
                        <li>• Diskusi dampak lingkungan dan keberlanjutan</li>
                    </ul>

                    <div class="text-sm text-gray-600">
                        <strong>Output:</strong> Briket hasil karya siswa & laporan proyek<br>
                        <strong>Nilai Unggul:</strong> Green education • Problem solving • Kesadaran global
                    </div>
                </div>

                <img src="{{ asset('images/program/briket.jpg') }}"
                     class="rounded-3xl shadow-xl w-full h-[360px] object-cover">
            </div>

            {{-- IoT --}}
            <div class="grid md:grid-cols-2 gap-14 items-center reveal">
                <img src="{{ asset('images/program/iot.jpg') }}"
                     class="rounded-3xl shadow-xl w-full h-[360px] object-cover">

                <div>
                    <h3 class="text-3xl font-bold text-[#7c1f1f] mb-5">
                        Program Teknologi & Internet of Things (IoT)
                    </h3>

                    <p class="text-gray-700 leading-relaxed mb-5">
                        Program IoT memperkenalkan peserta didik pada dunia teknologi
                        dan pemrograman melalui proyek nyata yang relevan dengan kehidupan sehari-hari.
                        Anak tidak hanya menjadi pengguna teknologi,
                        tetapi dibimbing untuk memahami cara kerja dan menciptakannya.
                    </p>

                    <ul class="space-y-3 text-gray-700 mb-6">
                        <li>• Logika dasar pemrograman dan sensor</li>
                        <li>• Perakitan alat IoT sederhana</li>
                        <li>• Automasi dan pengolahan data</li>
                        <li>• Presentasi dan demonstrasi proyek</li>
                    </ul>

                    <div class="text-sm text-gray-600">
                        <strong>Output:</strong> Proyek IoT fungsional sesuai jenjang<br>
                        <strong>Nilai Unggul:</strong> Teknologi masa depan • Computational thinking
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="py-24 bg-white">
                <div class="max-w-6xl mx-auto px-6">

                    <div class="text-center mb-16 reveal">
                        <h2 class="text-3xl md:text-4xl font-bold text-[#7c1f1f] mb-4">
                            Profil Lulusan yang Diharapkan
                        </h2>
                        <p class="text-gray-600 max-w-3xl mx-auto">
                            Profil lulusan berikut mencerminkan nilai dan arah pembinaan
                            yang dikembangkan yayasan melalui lembaga pendidikan
                            yang dikelola. <br>
                            Melalui pembelajaran holistik dan lingkungan yang mendukung,
                            peserta didik SDN Balas Klumprik tumbuh menjadi pribadi yang utuh,
                            mandiri, dan berintegritas.
                        </p>
                    </div>
                <div class="grid md:grid-cols-2 gap-12">

            <div class="reveal">
                <h3 class="text-xl font-semibold mb-3">Pembelajar Tangguh</h3>
                <p class="text-gray-600 leading-relaxed">
                    Peserta didik memiliki rasa ingin tahu tinggi, mampu berpikir kritis,
                    bekerja sama, dan bertanggung jawab dalam proses belajar.
                    Mereka siap menjadi pembelajar sepanjang hayat.
                </p>
            </div>

            <div class="reveal">
                <h3 class="text-xl font-semibold mb-3">Critichal Thinkking</h3>
                <p class="text-gray-600 leading-relaxed">
                    Peserta didik dibimbing untuk memiliki kejujuran, integritas,
                    serta kemampuan membedakan yang benar dan salah
                    berdasarkan nilai moral dan kebangsaan.
                </p>
            </div>

            <div class="reveal">
                <h3 class="text-xl font-semibold mb-3">Agen Perubahan</h3>
                <p class="text-gray-600 leading-relaxed">
                    Dengan sikap saling menghormati dan empati,
                    peserta didik tumbuh menjadi individu yang peduli,
                    beretika, dan mampu memberi dampak positif di lingkungannya.
                </p>
            </div>

            <div class="reveal">
                <h3 class="text-xl font-semibold mb-3">Komunikator Percaya Diri</h3>
                <p class="text-gray-600 leading-relaxed">
                    Peserta didik mampu menyampaikan gagasan secara santun,
                    mendengarkan pendapat orang lain,
                    dan berkomunikasi efektif dalam berbagai situasi.
                </p>
            </div>

            <div class="reveal">
                <h3 class="text-xl font-semibold mb-3">Pemimpin Berkarakter</h3>
                <p class="text-gray-600 leading-relaxed">
                    Peserta didik dilatih untuk mengambil inisiatif,
                    bertanggung jawab, dan memimpin dengan keteladanan
                    serta semangat gotong royong.
                </p>
            </div>

            <div class="reveal">
                <h3 class="text-xl font-semibold mb-3">Pribadi Berakhlak Mulia</h3>
                <p class="text-gray-600 leading-relaxed">
                    Peserta didik berkembang menjadi pribadi yang disiplin,
                    tangguh, dan berakhlak mulia,
                    siap menghadapi tantangan masa depan dengan sikap positif.
                </p>
            </div>
        </div>
    </div>
</section>
@endsection
