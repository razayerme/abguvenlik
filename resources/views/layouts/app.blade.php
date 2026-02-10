<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'AB Koruma') - Geleceğin Güvenlik Standartları</title>
    <meta name="description" content="@yield('meta_description', 'AB Koruma ve Özel Güvenlik; AVM, Plaza, İnşaat, Site ve Hastane güvenliğinde uzman, devlet standartlarında profesyonel hizmet sunar.')">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Montserrat:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans text-slate-800 antialiased bg-white selection:bg-brand-red selection:text-white flex flex-col min-h-full overflow-x-hidden">
    
    <!-- Floating Glass Navigation -->
    <nav class="fixed top-0 w-full z-50 transition-all duration-300 bg-white/80 backdrop-blur-lg border-b border-white/20 shadow-sm" id="navbar">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <!-- Logo Area -->
                <a href="{{ route('home') }}" class="flex items-center group relative z-50">
                    <img src="{{ asset('img/logo.jpeg') }}" alt="AB Koruma" class="h-10 w-auto mr-3">
                    <div class="flex flex-col">
                        <span class="text-xl font-display font-black tracking-tighter text-corporate-navy group-hover:text-brand-red transition-colors uppercase leading-none">AB KORUMA</span>
                        <span class="text-[0.6rem] font-bold tracking-[0.3em] uppercase text-slate-400">Security Systems</span>
                    </div>
                </a>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-1">
                    @foreach([
                        ['home', 'ANA SAYFA'],
                        ['about', 'KURUMSAL'],
                        ['services', 'HİZMETLER'],
                        ['contact', 'İLETİŞİM']
                    ] as $item)
                    <a href="{{ route($item[0]) }}" class="relative px-5 py-2 text-xs font-bold text-corporate-navy hover:text-brand-red transition tracking-widest group">
                        {{ $item[1] }}
                        <span class="absolute bottom-0 left-1/2 w-0 h-0.5 bg-brand-red transition-all duration-300 group-hover:w-1/2 group-hover:-translate-x-1/2 {{ request()->routeIs($item[0]) ? '!w-1/2 !-translate-x-1/2' : '' }}"></span>
                    </a>
                    @endforeach
                    
                    <a href="tel:02121234567" class="ml-6 flex items-center px-5 py-2.5 bg-brand-black text-white text-xs font-bold rounded-full hover:bg-brand-red transition-colors shadow-lg hover:shadow-brand-red/30 tracking-wide">
                        <svg class="w-3 h-3 mr-2" fill="currentColor" viewBox="0 0 24 24"><path d="M20.01 15.38c-1.23 0-2.42-.2-3.53-.56-.35-.12-.74-.03-1.01.24l-1.57 1.97c-2.83-1.44-5.15-3.75-6.59-6.59l1.97-1.57c.27-.27.36-.66.24-1.01-.37-1.11-.56-2.3-.56-3.53 0-.54-.45-.99-.99-.99H4.19C3.65 3.3 3 3.24 3 3.99 3 13.28 10.73 21 20.01 21c.71 0 .99-.63.99-1.18v-3.45c0-.54-.45-.99-.99-.99z"/></svg>
                        0212 123 45 67
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-btn" class="md:hidden p-2 text-corporate-navy hover:text-brand-red transition focus:outline-none z-50">
                    <div class="space-y-1.5">
                        <span class="block w-6 h-0.5 bg-current transition-transform duration-300"></span>
                        <span class="block w-6 h-0.5 bg-current transition-opacity duration-300"></span>
                        <span class="block w-6 h-0.5 bg-current transition-transform duration-300"></span>
                    </div>
                </button>
            </div>
        </div>

        <!-- Fullscreen Mobile Menu -->
        <div id="mobile-menu" class="fixed inset-0 bg-white/95 backdrop-blur-xl z-40 transform translate-x-full transition-transform duration-500 flex flex-col justify-center items-center">
            <nav class="space-y-6 text-center">
                 @foreach([
                        ['home', 'ANA SAYFA'],
                        ['about', 'KURUMSAL'],
                        ['services', 'HİZMETLER'],
                        ['contact', 'İLETİŞİM']
                    ] as $item)
                <a href="{{ route($item[0]) }}" class="block text-2xl font-display font-black text-corporate-navy hover:text-brand-red tracking-tighter transform hover:scale-105 transition duration-300">{{ $item[1] }}</a>
                @endforeach
            </nav>
            <div class="mt-12 space-y-4">
                <p class="text-slate-400 text-sm tracking-wide">Bize Ulaşın</p>
                <a href="tel:02121234567" class="text-xl font-bold text-slate-800 block">0212 123 45 67</a>
                <a href="mailto:info@abkoruma.com" class="text-lg font-medium text-brand-red block">info@abkoruma.com</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-grow w-full pt-20">
        @yield('content')
    </main>

    <!-- Modern "Big Fat" Footer -->
    <footer class="bg-brand-black text-white pt-24 pb-12 relative overflow-hidden">
        <div class="absolute top-0 right-0 w-1/2 h-full bg-slate-900 -mkew-x-12 opacity-50 pointer-events-none"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-16 space-y-8 md:space-y-0">
                <div>
                     <span class="text-brand-red font-bold text-xs uppercase tracking-[0.2em] mb-2 block">Güvenlik Çözümleri</span>
                     <h2 class="text-4xl md:text-5xl font-display font-black tracking-tight leading-none text-white">
                        GELECEĞİ <br><span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-red to-brand-yellow">GÜVENCEYE ALIN.</span>
                     </h2>
                </div>
                <a href="{{ route('contact') }}" class="group flex items-center space-x-4 border-b border-white/30 pb-2 hover:border-brand-red transition duration-300">
                    <span class="text-xl font-bold tracking-wide">Projeleriniz İçin Teklif Alın</span>
                    <span class="bg-brand-red p-2 rounded-full transition transform group-hover:rotate-45">
                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </span>
                </a>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-12 border-t border-white/10 pt-16">
                <div>
                    <h4 class="text-xs font-bold text-slate-500 uppercase tracking-widest mb-6">Navigasyon</h4>
                    <ul class="space-y-4">
                        <li><a href="{{ route('home') }}" class="text-sm hover:text-brand-red transition">Ana Sayfa</a></li>
                        <li><a href="{{ route('about') }}" class="text-sm hover:text-brand-red transition">Kurumsal</a></li>
                        <li><a href="{{ route('services') }}" class="text-sm hover:text-brand-red transition">Hizmetlerimiz</a></li>
                        <li><a href="{{ route('contact') }}" class="text-sm hover:text-brand-red transition">İletişim</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-xs font-bold text-slate-500 uppercase tracking-widest mb-6">Hizmetler</h4>
                    <ul class="space-y-4">
                        <li><a href="{{ route('services') }}#avm" class="text-sm hover:text-brand-red transition">AVM Güvenliği</a></li>
                        <li><a href="{{ route('services') }}#plaza" class="text-sm hover:text-brand-red transition">Plaza Güvenliği</a></li>
                        <li><a href="{{ route('services') }}#insaat" class="text-sm hover:text-brand-red transition">Şantiye Güvenliği</a></li>
                        <li><a href="{{ route('services') }}#site" class="text-sm hover:text-brand-red transition">Konut Güvenliği</a></li>
                    </ul>
                </div>
                <div class="col-span-2 md:col-span-2">
                    <h4 class="text-xs font-bold text-slate-500 uppercase tracking-widest mb-6">İletişim</h4>
                    <p class="text-2xl font-light mb-2 text-white">0212 123 45 67</p>
                    <p class="text-lg font-light text-slate-400 mb-6">info@abkoruma.com</p>
                    <p class="text-sm text-slate-500 max-w-xs">Ofis: İstanbul, Türkiye<br>7/24 Kesintisiz Destek Hattı</p>
                </div>
            </div>

            <div class="flex flex-col md:flex-row justify-between items-center mt-20 pt-8 border-t border-white/10 text-xs text-slate-600">
                <p>&copy; {{ date('Y') }} AB Koruma Hizmetleri A.Ş.</p>
                <div class="flex space-x-6 mt-4 md:mt-0">
                    <a href="#" class="hover:text-white transition">Gizlilik</a>
                    <a href="#" class="hover:text-white transition">Çerezler</a>
                    <a href="#" class="hover:text-white transition">Yasal Uyarı</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');
        const navbar = document.getElementById('navbar');

        btn.addEventListener('click', () => {
            menu.classList.toggle('translate-x-full');
            // Toggle hamburger icon animation logic here if needed
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
