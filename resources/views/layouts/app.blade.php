<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth h-full">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'AB Koruma ve Özel Güvenlik Hizmetleri') - Geleceğin Güvenlik Standartları</title>
    <meta name="description"
        content="@yield('meta_description', 'AB Koruma ve Özel Güvenlik Hizmetleri; AVM, Plaza, İnşaat, Site ve Hastane güvenliğinde uzman, devlet standartlarında profesyonel hizmet sunar.')">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Montserrat:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body
    class="font-sans text-slate-800 antialiased bg-white selection:bg-brand-red selection:text-white flex flex-col min-h-full overflow-x-hidden">

    <!-- Floating Glass Navigation -->
    <nav class="fixed top-0 w-full z-50 transition-all duration-300 bg-white/80 backdrop-blur-lg border-b border-white/20 shadow-sm"
        id="navbar">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <!-- Logo Area -->
                <a href="{{ route('home') }}" class="flex items-center group relative z-50">
                    <img src="{{ asset('img/logo.jpeg') }}" alt="AB Koruma" class="h-10 w-auto mr-3">
                    <div class="flex flex-col">
                        <span
                            class="text-xl font-display font-black tracking-tighter text-corporate-navy group-hover:text-brand-red transition-colors uppercase leading-none">AB
                            KORUMA</span>
                        <span class="text-[0.6rem] font-bold tracking-[0.3em] uppercase text-slate-400">Security
                            Systems</span>
                    </div>
                </a>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-1 h-full">
                    <a href="{{ route('home') }}"
                        class="relative px-5 py-2 text-xs font-bold text-corporate-navy hover:text-brand-red transition tracking-widest group h-full flex items-center">
                        ANA SAYFA
                        <span
                            class="absolute bottom-0 left-1/2 w-0 h-0.5 bg-brand-red transition-all duration-300 group-hover:w-1/2 group-hover:-translate-x-1/2 {{ request()->routeIs('home') ? '!w-1/2 !-translate-x-1/2' : '' }}"></span>
                    </a>

                    <!-- Corporate Dropdown -->
                    <div class="relative group h-full flex items-center">
                        <a href="{{ route('corporate.index') }}"
                            class="relative px-5 py-2 text-xs font-bold text-corporate-navy hover:text-brand-red transition tracking-widest group-hover:text-brand-red h-full flex items-center">
                            HAKKIMIZDA
                            <svg class="w-3 h-3 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                            <span
                                class="absolute bottom-0 left-1/2 w-0 h-0.5 bg-brand-red transition-all duration-300 group-hover:w-1/2 group-hover:-translate-x-1/2 {{ request()->routeIs('corporate.*') || request()->routeIs('about') ? '!w-1/2 !-translate-x-1/2' : '' }}"></span>
                        </a>
                        <div
                            class="absolute top-full left-0 w-64 bg-white shadow-xl rounded-b-lg overflow-hidden invisible group-hover:visible opacity-0 group-hover:opacity-100 transition-all duration-300 border-t-2 border-brand-red transform translate-y-2 group-hover:translate-y-0">
                            <a href="{{ route('corporate.index') }}"
                                class="block px-6 py-3 text-sm text-corporate-navy hover:bg-slate-50 hover:text-brand-red transition border-b border-slate-50 font-medium">Hakkımızda</a>
                            <a href="{{ route('corporate.vision') }}"
                                class="block px-6 py-3 text-sm text-corporate-navy hover:bg-slate-50 hover:text-brand-red transition border-b border-slate-50 font-medium">Vizyon
                                & Misyon</a>
                            <a href="{{ route('corporate.values') }}"
                                class="block px-6 py-3 text-sm text-corporate-navy hover:bg-slate-50 hover:text-brand-red transition border-b border-slate-50 font-medium">Değerlerimiz</a>
                            <a href="{{ route('corporate.regions') }}"
                                class="block px-6 py-3 text-sm text-corporate-navy hover:bg-slate-50 hover:text-brand-red transition border-b border-slate-50 font-medium">Bölge
                                Müdürlükleri</a>
                            <a href="{{ route('corporate.documents') }}"
                                class="block px-6 py-3 text-sm text-corporate-navy hover:bg-slate-50 hover:text-brand-red transition border-b border-slate-50 font-medium">Belgelerimiz</a>
                        </div>
                    </div>

                    <!-- Services Dropdown -->
                    <div class="relative group h-full flex items-center">
                        <a href="{{ route('services') }}"
                            class="relative px-5 py-2 text-xs font-bold text-corporate-navy hover:text-brand-red transition tracking-widest group-hover:text-brand-red h-full flex items-center">
                            HİZMETLER
                            <svg class="w-3 h-3 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                            <span
                                class="absolute bottom-0 left-1/2 w-0 h-0.5 bg-brand-red transition-all duration-300 group-hover:w-1/2 group-hover:-translate-x-1/2 {{ request()->routeIs('services') || request()->routeIs('service.show') ? '!w-1/2 !-translate-x-1/2' : '' }}"></span>
                        </a>
                        <div
                            class="absolute top-full left-0 w-64 bg-white shadow-xl rounded-b-lg overflow-hidden invisible group-hover:visible opacity-0 group-hover:opacity-100 transition-all duration-300 border-t-2 border-brand-red transform translate-y-2 group-hover:translate-y-0">
                            @foreach(\App\Http\Controllers\ServiceController::getServices() as $s)
                                <a href="{{ route('service.show', $s['slug']) }}"
                                    class="block px-6 py-3 text-sm text-corporate-navy hover:bg-slate-50 hover:text-brand-red transition border-b border-slate-50 last:border-0 font-medium">
                                    {{ $s['title'] }}
                                </a>
                            @endforeach
                        </div>
                    </div>

                    <a href="{{ route('contact') }}"
                        class="relative px-5 py-2 text-xs font-bold text-corporate-navy hover:text-brand-red transition tracking-widest group h-full flex items-center">
                        İLETİŞİM
                        <span
                            class="absolute bottom-0 left-1/2 w-0 h-0.5 bg-brand-red transition-all duration-300 group-hover:w-1/2 group-hover:-translate-x-1/2 {{ request()->routeIs('contact') ? '!w-1/2 !-translate-x-1/2' : '' }}"></span>
                    </a>

                    <a href="tel:02163156363"
                        class="ml-6 flex items-center px-5 py-2.5 bg-brand-black text-white text-xs font-bold rounded-full hover:bg-brand-red transition-colors shadow-lg hover:shadow-brand-red/30 tracking-wide">
                        <svg class="w-3 h-3 mr-2" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M20.01 15.38c-1.23 0-2.42-.2-3.53-.56-.35-.12-.74-.03-1.01.24l-1.57 1.97c-2.83-1.44-5.15-3.75-6.59-6.59l1.97-1.57c.27-.27.36-.66.24-1.01-.37-1.11-.56-2.3-.56-3.53 0-.54-.45-.99-.99-.99H4.19C3.65 3.3 3 3.24 3 3.99 3 13.28 10.73 21 20.01 21c.71 0 .99-.63.99-1.18v-3.45c0-.54-.45-.99-.99-.99z" />
                        </svg>
                        0216 315 63 63
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-btn"
                    class="md:hidden p-2 text-corporate-navy hover:text-brand-red transition focus:outline-none z-50">
                    <div class="space-y-1.5">
                        <span class="block w-6 h-0.5 bg-current transition-transform duration-300"></span>
                        <span class="block w-6 h-0.5 bg-current transition-opacity duration-300"></span>
                        <span class="block w-6 h-0.5 bg-current transition-transform duration-300"></span>
                    </div>
                </button>
            </div>
        </div>

        <!-- Fullscreen Mobile Menu -->
        <div id="mobile-menu"
            class="fixed inset-0 bg-white/95 backdrop-blur-xl z-40 transform translate-x-full transition-transform duration-500 flex flex-col justify-center items-center overflow-y-auto py-20">
            <nav class="space-y-6 text-center w-full max-w-sm px-4">
                <a href="{{ route('home') }}"
                    class="block text-2xl font-display font-black text-corporate-navy hover:text-brand-red tracking-tighter transition duration-300">ANA
                    SAYFA</a>

                <div x-data="{ open: false }">
                    <button @click="open = !open"
                        class="text-2xl font-display font-black text-corporate-navy hover:text-brand-red tracking-tighter transition duration-300 flex items-center justify-center w-full">
                        HAKKIMIZDA
                        <svg class="w-5 h-5 ml-2 transform transition-transform" :class="{'rotate-180': open}"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div x-show="open" class="mt-4 space-y-3 pl-4 border-l-2 border-slate-100 ml-4 hidden"
                        :class="{'!block': open}">
                        <a href="{{ route('corporate.index') }}"
                            class="block text-lg font-medium text-slate-600 hover:text-brand-red">Hakkımızda</a>
                        <a href="{{ route('corporate.vision') }}"
                            class="block text-lg font-medium text-slate-600 hover:text-brand-red">Vizyon & Misyon</a>
                        <a href="{{ route('corporate.values') }}"
                            class="block text-lg font-medium text-slate-600 hover:text-brand-red">Değerlerimiz</a>
                        <a href="{{ route('corporate.regions') }}"
                            class="block text-lg font-medium text-slate-600 hover:text-brand-red">Bölge Müdürlükleri</a>
                        <a href="{{ route('corporate.documents') }}"
                            class="block text-lg font-medium text-slate-600 hover:text-brand-red">Belgelerimiz</a>
                    </div>
                </div>

                <div x-data="{ open: false }">
                    <button @click="open = !open"
                        class="text-2xl font-display font-black text-corporate-navy hover:text-brand-red tracking-tighter transition duration-300 flex items-center justify-center w-full">
                        HİZMETLER
                        <svg class="w-5 h-5 ml-2 transform transition-transform" :class="{'rotate-180': open}"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div x-show="open" class="mt-4 space-y-3 pl-4 border-l-2 border-slate-100 ml-4 hidden"
                        :class="{'!block': open}">
                        <a href="{{ route('services') }}"
                            class="block text-lg font-bold text-slate-700 hover:text-brand-red">Tüm Hizmetler</a>
                        @foreach(\App\Http\Controllers\ServiceController::getServices() as $s)
                            <a href="{{ route('service.show', $s['slug']) }}"
                                class="block text-lg font-medium text-slate-600 hover:text-brand-red">{{ $s['title'] }}</a>
                        @endforeach
                    </div>
                </div>

                <a href="{{ route('contact') }}"
                    class="block text-2xl font-display font-black text-corporate-navy hover:text-brand-red tracking-tighter transition duration-300">İLETİŞİM</a>
            </nav>
            <div class="mt-12 space-y-4 text-center">
                <p class="text-slate-400 text-sm tracking-wide">Bize Ulaşın</p>
                <a href="tel:02163156363" class="text-xl font-bold text-slate-800 block">0216 315 63 63</a>
                <a href="mailto:info@abozelguvenlik.com"
                    class="text-lg font-medium text-brand-red block">info@abozelguvenlik.com</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-grow w-full pt-20">
        @yield('content')
    </main>

    <!-- Modern "Big Fat" Footer -->
    <!-- Footer -->
    <footer class="bg-brand-black text-white pt-24 pb-8 border-t border-slate-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 lg:gap-20 mb-16">
                
                <!-- Brand & Info -->
                <div class="space-y-6">
                    <h2 class="text-3xl font-display font-black tracking-tighter leading-none">
                        AB<span class="text-brand-red">.</span>
                    </h2>
                    <p class="text-slate-400 text-sm leading-relaxed max-w-xs">
                        Modern tehditlere karşı, devlet disiplini ve özel sektör çevikliğiyle harmanlanmış, sarsılmaz bir güvenlik çözümü.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="w-8 h-8 rounded bg-white/5 flex items-center justify-center hover:bg-brand-red transition text-slate-400 hover:text-white">
                            <span class="sr-only">Facebook</span>
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                        </a>
                        <a href="#" class="w-8 h-8 rounded bg-white/5 flex items-center justify-center hover:bg-brand-red transition text-slate-400 hover:text-white">
                            <span class="sr-only">Instagram</span>
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.072 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.052.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                        </a>
                    </div>
                </div>

                <!-- Navigation -->
                <div>
                    <h3 class="text-sm font-bold text-white uppercase tracking-widest mb-6">Kurumsal</h3>
                    <ul class="space-y-3">
                        <li><a href="{{ route('home') }}" class="text-slate-400 hover:text-brand-red transition text-sm">Ana Sayfa</a></li>
                        <li><a href="{{ route('corporate.index') }}" class="text-slate-400 hover:text-brand-red transition text-sm">Hakkımızda</a></li>
                        <li><a href="{{ route('contact') }}" class="text-slate-400 hover:text-brand-red transition text-sm">Bize Ulaşın</a></li>
                    </ul>
                </div>

                <!-- Services -->
                <div>
                    <h3 class="text-sm font-bold text-white uppercase tracking-widest mb-6">Hizmetlerimiz</h3>
                    <ul class="space-y-3">
                        @foreach(\App\Http\Controllers\ServiceController::getServices() as $s)
                        <li><a href="{{ route('service.show', $s['slug']) }}" class="text-slate-400 hover:text-brand-red transition text-sm">{{ $s['title'] }}</a></li>
                        @endforeach
                    </ul>
                </div>

                <!-- Contact Info (Non-linked look as requested) -->
                <div>
                    <h3 class="text-sm font-bold text-white uppercase tracking-widest mb-6">İletişim</h3>
                    <div class="space-y-4">
                        <div class="group">
                            <p class="text-xs text-slate-500 uppercase tracking-wide mb-1">Adres</p>
                            <p class="text-slate-300 text-sm leading-relaxed">
                                Örnek Mah. Fehmi Tokay Cad. <br>Hışım Apt. No:10 D 11 <br>ATAŞEHİR İSTANBUL
                            </p>
                        </div>
                        <div class="group">
                            <p class="text-xs text-slate-500 uppercase tracking-wide mb-1">Telefon</p>
                            <p class="text-slate-300 text-sm font-medium">0216 315 63 63</p>
                        </div>
                        <div class="group">
                            <p class="text-xs text-slate-500 uppercase tracking-wide mb-1">E-Posta</p>
                            <p class="text-slate-300 text-sm">info@abozelguvenlik.com</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Bar -->
            <div class="pt-8 border-t border-white/10 flex flex-col md:flex-row justify-between items-center text-xs text-slate-600">
                <p>&copy; {{ date('Y') }} AB Koruma ve Özel Güvenlik Hizmetleri. Tüm hakları saklıdır.</p>
                <div class="flex space-x-6 mt-4 md:mt-0">
                    <a href="#" class="hover:text-white transition">Gizlilik Politikası</a>
                    <a href="#" class="hover:text-white transition">Kullanım Koşulları</a>
                </div>
            </div>
        </div>
    </footer>

    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script>
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');
        const navbar = document.getElementById('navbar');

        btn.addEventListener('click', () => {
            // Simple toggle for mobile menu presence
            if (menu.classList.contains('translate-x-full')) {
                menu.classList.remove('translate-x-full');
            } else {
                menu.classList.add('translate-x-full');
            }
        });

        // Sticky Navbar effect
        window.addEventListener('scroll', () => {
            if (window.scrollY > 20) {
                navbar.classList.add('shadow-md', 'bg-white/95');
                navbar.classList.remove('bg-white/80');
            } else {
                navbar.classList.remove('shadow-md', 'bg-white/95');
                navbar.classList.add('bg-white/80');
            }
        });
    </script>
</body>

</html>