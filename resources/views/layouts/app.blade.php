<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'SDN Balas Klumprik')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Scroll Reveal --}}
    <style>
        .reveal {
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 0.8s ease, transform 0.8s ease;
            will-change: opacity, transform;
        }

        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }
    </style>

    <script>
document.addEventListener('DOMContentLoaded', () => {
    const navbar = document.getElementById('navbar');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            navbar.classList.remove('bg-transparent');
            navbar.classList.add(
                'bg-white',
                'shadow-md'
            );
            navbar.querySelectorAll('a, span').forEach(el => {
                el.classList.remove('text-white');
                el.classList.add('text-gray-800');
            });
        } else {
            navbar.classList.add('bg-transparent');
            navbar.classList.remove('bg-white', 'shadow-md');
            navbar.querySelectorAll('a, span').forEach(el => {
                el.classList.add('text-white');
                el.classList.remove('text-gray-800');
            });
        }
    });
});
</script>

<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
<script>
function heroSlider(imageList = []) {
    return {
        images: imageList,
        currentIndex: 0,
        init() {
            setInterval(() => {
                this.currentIndex = (this.currentIndex + 1) % this.images.length;
            }, 5000); // ganti setiap 5 detik
        }
    }
}
</script>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const container = document.getElementById('glass-container');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 60) {
            container.classList.add(
                'backdrop-blur-md',
                'bg-[#7c1f1f]/85',
                'shadow-xl',
                'shadow-black/30'
            );
            container.classList.remove('bg-transparent');
        } else {
            container.classList.remove(
                'backdrop-blur-md',
                'bg-[#7c1f1f]/85',
                'shadow-xl',
                'shadow-black/30'
            );
            container.classList.add('bg-transparent');
        }
    });
});
</script>

</head>

<body class="m-0 p-0 font-sans text-gray-800">

    {{-- NAVBAR --}}
    <nav class="fixed top-6 left-0 right-0 z-[9999] flex justify-center">
        <div id="glass-container"
            class="max-w-6xl w-full
                    rounded-full px-8 py-3
                    flex items-center justify-between
                    transition-all duration-300
                    bg-transparent">

            <!-- LEFT MENU -->
            <div class="hidden md:flex items-center space-x-6 text-white text-sm font-medium">
                <a href="/" class="hover:text-yellow-300 transition">Beranda</a>
                <a href="/profil" class="hover:text-yellow-300 transition">About Us</a>
                <a href="/programs" class="hover:text-yellow-300 transition">Programs</a>
            </div>

            <!-- CENTER LOGO -->
            <div class="flex items-center gap-3 shrink-0">
                <img src="/images/Logo.jpg"
                    alt="Logo"
                    class="h-12 w-12 object-contain">

                <span class="text-xl font-bold tracking-wide text-white leading-tight">
                    Yayansan<br>
                    <span class="text-sm font-medium tracking-normal opacity-90">
                        PPLSI
                    </span>
                </span>
            </div>


            <!-- RIGHT MENU -->
            <div class="hidden md:flex items-center space-x-6 text-white text-sm font-medium">
                <a href="/ppdb" class="hover:text-yellow-300 transition">Peformance</a>
                <a href="/berita" class="hover:text-yellow-300 transition">Media & Publication</a>
                <a href="/kontak" class="hover:text-yellow-300 transition">Contact</a>
            </div>

            <!-- MOBILE BUTTON -->
            <button id="nav-toggle"
                class="md:hidden text-white focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>

        <!-- MOBILE MENU -->
        <div id="mobile-menu"
            class="hidden mt-4 mx-auto max-w-sm
                    backdrop-blur-md bg-[#1F3A5F]/90
                    rounded-2xl shadow-lg text-white overflow-hidden">

            <a href="/" class="block px-6 py-3 hover:bg-white/10">Beranda</a>
            <a href="/profil" class="block px-6 py-3 hover:bg-white/10">About Us</a>
            <a href="/programs" class="block px-6 py-3 hover:bg-white/10">Progams</a>
            <a href="/ppdb" class="block px-6 py-3 hover:bg-white/10">Peformance</a>
            <a href="/berita" class="block px-6 py-3 hover:bg-white/10">Media & Publication</a>
            <a href="/kontak" class="block px-6 py-3 hover:bg-white/10">Contact</a>
        </div>
    </nav>

    <script>
        document.getElementById('nav-toggle')?.addEventListener('click', () => {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>



    {{-- PAGE CONTENT --}}
    <main>
        @yield('content')
    </main>

    {{-- FOOTER --}}
<footer class="relative text-gray-200">

    <!-- BACKGROUND -->
    <div class="bg-gradient-to-t from-[#5a1414] to-[#7c1f1f] pt-14 pb-10">

        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-3 gap-10">

            <!-- PROFIL SEKOLAH -->
            <div>
                <h4 class="text-xl font-bold text-white mb-3">
                    SDN Balas Klumprik
                </h4>
                <p class="text-sm leading-relaxed text-gray-200">
                    Sekolah dasar negeri yang berkomitmen pada pendidikan
                    berkualitas, berkarakter, dan berlandaskan nilai kebangsaan.
                </p>

                <div class="mt-4 text-sm space-y-1 opacity-90">
                    <p>📍 Balas Klumprik, Surabaya</p>
                    <p>📞 (031) 123-456</p>
                    <p>✉️ sdn.balasklumprik@email.sch.id</p>
                </div>
            </div>

            <!-- MENU -->
            <div>
                <h4 class="text-lg font-semibold text-white mb-3">
                    Navigasi
                </h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="/" class="hover:text-white transition">Beranda</a></li>
                    <li><a href="{{ url('/profil') }}" class="hover:text-white transition">Profil Sekolah</a></li>
                    <li><a href="{{ url('/programs') }}" class="hover:text-white transition">Visi & Misi</a></li>
                    <li><a href="{{ route('ppdb.index') }}" class="hover:text-white transition">PPDB</a></li>
                </ul>
            </div>

            <!-- SOSIAL & LEGAL -->
            <div>
                <h4 class="text-lg font-semibold text-white mb-3">
                    Informasi
                </h4>

                <div class="text-sm space-y-2">
                    <p>Jam Operasional:</p>
                    <p class="opacity-90">
                        Senin – Jumat<br>
                        07.00 – 14.00 WIB
                    </p>
                </div>

                <div class="flex space-x-4 mt-5 text-sm">
                    <a href="#" class="hover:text-white transition">Facebook</a>
                    <a href="#" class="hover:text-white transition">Instagram</a>
                </div>
            </div>

        </div>

        <!-- COPYRIGHT -->
        <div class="mt-10 border-t border-white/20 pt-4 text-center text-xs text-gray-300">
            © {{ date('Y') }} SDN Balas Klumprik. Seluruh hak cipta dilindungi.
        </div>

    </div>
</footer>


    {{-- SCRIPTS --}}
    <script>
        // Mobile menu
        document.getElementById('mobile-menu-button')
            .addEventListener('click', () =>
                document.getElementById('mobile-menu').classList.toggle('hidden')
            );

        // Scroll reveal (single source of truth)
        document.addEventListener('DOMContentLoaded', () => {
            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('active');
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.15 });

            document.querySelectorAll('.reveal')
                .forEach(el => observer.observe(el));
        });
    </script>

</body>
</html>
