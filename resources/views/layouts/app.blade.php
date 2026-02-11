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
                            class="absolute top-full left-0 w-64 bg-white shadow-xl rounded-b-lg overflow-hidden invisible group-hover:visible opacity-0 group-hover:opacity-100 transition-all duration-300 transform translate-y-2 group-hover:translate-y-0">
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
                            class="absolute top-full left-0 w-64 bg-white shadow-xl rounded-b-lg overflow-hidden invisible group-hover:visible opacity-0 group-hover:opacity-100 transition-all duration-300 transform translate-y-2 group-hover:translate-y-0">
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
    <main class="flex-grow w-full pt-20 lg:pt-24 relative z-0">
        @yield('content')
    </main>

    <!-- Modern "Big Fat" Footer -->
    <!-- Footer -->
    <footer class="relative bg-slate-950 text-white pt-20 pb-10 overflow-hidden z-10 font-sans border-t-4 border-brand-red">
        
        <!-- Background Elements -->
        <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/diagmonds-light.png')] opacity-[0.03]"></div>
        <div class="absolute top-0 right-0 w-[800px] h-[800px] bg-brand-red/5 rounded-full blur-[120px] pointer-events-none -translate-y-1/2 translate-x-1/2"></div>
        <div class="absolute bottom-0 left-0 w-[600px] h-[600px] bg-corporate-navy/20 rounded-full blur-[100px] pointer-events-none translate-y-1/2 -translate-x-1/3"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Newsletter / Pre-Footer -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center border-b border-white/10 pb-12 mb-16">
                <div class="lg:col-span-7">
                    <h2 class="text-2xl md:text-3xl font-display font-black tracking-tight text-white mb-2">
                        GÜVENLİK GÜNDEMİNDEN HABERDAR OLUN
                    </h2>
                    <p class="text-slate-400 text-sm max-w-xl leading-relaxed">
                        Sektörel gelişmeler, risk analizleri ve AB Koruma'dan en yeni duyurular için bültenimize kaydolun. Spam yok, sadece güvenlik.
                    </p>
                </div>
                <div class="lg:col-span-5">
                    <form class="flex flex-col sm:flex-row gap-3">
                        <input type="email" placeholder="E-posta adresiniz" class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded focus:outline-none focus:border-brand-red/50 text-white placeholder-slate-500 transition-colors">
                        <button type="button" class="px-6 py-3 bg-brand-red text-white font-bold tracking-wide rounded hover:bg-red-700 transition duration-300 shadow-[0_0_20px_rgba(204,0,0,0.3)] hover:shadow-[0_0_30px_rgba(204,0,0,0.5)] whitespace-nowrap">
                            ABONE OL
                        </button>
                    </form>
                </div>
            </div>

            <!-- Main Footer Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-12 lg:gap-8 mb-20">
                
                <!-- Brand & Info (5 Cols) -->
                <div class="lg:col-span-5 pr-8">
                    <a href="{{ route('home') }}" class="inline-block group mb-6">
                        <div class="flex items-center gap-4">
                            <div class="p-2 bg-white rounded-lg shadow-lg shadow-brand-red/20 group-hover:shadow-brand-red/40 transition duration-500">
                                <img src="{{ asset('img/logo.jpeg') }}" alt="AB Koruma" class="h-12 w-auto">
                            </div>
                            <div class="flex flex-col">
                                <span class="text-2xl font-display font-black tracking-tighter text-white leading-none">AB KORUMA</span>
                                <span class="text-[0.6rem] uppercase tracking-[0.35em] text-brand-red font-bold mt-1">SECURITY SYSTEMS</span>
                            </div>
                        </div>
                    </a>
                    <p class="text-slate-400 text-sm leading-7 mb-8 border-l-2 border-brand-red/30 pl-4">
                        5188 Sayılı Yasa kapsamında yetkilendirilmiş, Türkiye'nin lider güvenlik çözüm ortağı. AVM, Plaza, Şantiye ve Kurumsal tesislerde yüksek standartlı koruma sağlıyoruz.
                    </p>
                    <div class="flex gap-3">
                        @foreach(['facebook', 'twitter', 'instagram', 'linkedin'] as $social)
                        <a href="#" class="w-10 h-10 rounded bg-slate-900 border border-slate-800 flex items-center justify-center text-slate-400 hover:text-white hover:border-brand-red hover:bg-brand-red transition-all duration-300 group">
                            <svg class="w-4 h-4 transition-transform duration-300 group-hover:scale-110" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2C6.477 2 2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12c0-5.523-4.477-10-10-10z"/>
                            </svg>
                        </a>
                        @endforeach
                    </div>
                </div>

                <!-- Quick Links (2 Cols) -->
                <div class="lg:col-span-2">
                    <h3 class="text-sm font-bold text-white uppercase tracking-widest mb-6 border-b-2 border-brand-red pb-2 inline-block">Kurumsal</h3>
                    <ul class="space-y-3">
                         @foreach([
                            ['route' => 'corporate.index', 'label' => 'Hakkımızda'],
                            ['route' => 'corporate.vision', 'label' => 'Yönetim İlkeleri'],
                            ['route' => 'services', 'label' => 'Hizmetlerimiz'],
                            ['route' => 'corporate.documents', 'label' => 'Yasal Belgeler'],
                            ['route' => 'contact', 'label' => 'İnsan Kaynakları']
                        ] as $link)
                        <li>
                            <a href="{{ route($link['route']) }}" class="text-slate-400 hover:text-white text-sm transition-colors flex items-center gap-2 group">
                                <span class="w-1 h-1 bg-brand-red rounded-full opacity-0 group-hover:opacity-100 transition-opacity"></span>
                                <span class="group-hover:translate-x-1 transition-transform">{{ $link['label'] }}</span>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>

                <!-- Services (3 Cols) -->
                <div class="lg:col-span-3">
                    <h3 class="text-sm font-bold text-white uppercase tracking-widest mb-6 border-b-2 border-brand-red pb-2 inline-block">Çözümlerimiz</h3>
                    <ul class="space-y-3">
                        @foreach(\App\Http\Controllers\ServiceController::getServices() as $s)
                        <li>
                            <a href="{{ route('service.show', $s['slug']) }}" class="text-slate-400 hover:text-white text-sm transition-colors flex items-center gap-2 group">
                                <svg class="w-3 h-3 text-slate-600 group-hover:text-brand-red transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                                <span>{{ $s['title'] }}</span>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>

                <!-- Contact Section (2 Cols) -->
                <div class="lg:col-span-2 space-y-8">
                    <h3 class="text-sm font-bold text-white uppercase tracking-widest mb-6 border-b-2 border-brand-red pb-2 inline-block">İletişim</h3>
                    
                    <div class="space-y-6">
                        <!-- Address -->
                        <div class="group flex items-start gap-4">
                            <div class="flex-shrink-0 w-10 h-10 rounded bg-white/5 flex items-center justify-center text-brand-red group-hover:bg-brand-red group-hover:text-white transition-all duration-300">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            </div>
                            <div>
                                <h4 class="text-white text-xs font-bold uppercase tracking-wide mb-1 opacity-50">Genel Merkez</h4>
                                <p class="text-slate-300 text-sm leading-relaxed">
                                    Örnek Mah. Fehmi Tokay Cad. <br>Hışım Apt. No:10 D:11 <br>
                                    <span class="text-white font-medium">Ataşehir / İSTANBUL</span>
                                </p>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="group flex items-center gap-4">
                             <div class="flex-shrink-0 w-10 h-10 rounded bg-white/5 flex items-center justify-center text-brand-red group-hover:bg-brand-red group-hover:text-white transition-all duration-300">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            </div>
                            <div>
                                <h4 class="text-white text-xs font-bold uppercase tracking-wide mb-1 opacity-50">Çağrı Merkezi</h4>
                                <a href="tel:02163156363" class="text-lg font-bold text-white hover:text-brand-red transition">0216 315 63 63</a>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="group flex items-center gap-4">
                             <div class="flex-shrink-0 w-10 h-10 rounded bg-white/5 flex items-center justify-center text-brand-red group-hover:bg-brand-red group-hover:text-white transition-all duration-300">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            </div>
                            <div>
                                <h4 class="text-white text-xs font-bold uppercase tracking-wide mb-1 opacity-50">E-Posta</h4>
                                <a href="mailto:info@abozelguvenlik.com" class="text-sm text-slate-300 hover:text-white transition">info@abozelguvenlik.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Certs & Bottom -->
            <div class="border-t border-white/10 pt-8 mt-8">
                <div class="flex flex-col md:flex-row justify-between items-center gap-6">
                    <div class="flex flex-col sm:flex-row items-center gap-4 text-xs text-slate-500">
                        <span>&copy; {{ date('Y') }} AB KORUMA GÜVENLİK HİZMETLERİ LTD. ŞTİ.</span>
                        <div class="hidden sm:block w-1 h-1 bg-slate-700 rounded-full"></div>
                        <div class="flex gap-4">
                            <a href="#" class="hover:text-white transition-colors">KVKK</a>
                            <a href="#" class="hover:text-white transition-colors">Yasal Uyarı</a>
                            <a href="#" class="hover:text-white transition-colors">Bilgi Toplumu Hizmetleri</a>
                        </div>
                    </div>
                    
                    <!-- Fake Certs badges for Authority -->
                    <div class="flex items-center gap-3 opacity-60 grayscale hover:grayscale-0 transition-all duration-500">
                         <!-- Using simple shapes/text representations for certs as placeholders -->
                         <div class="h-8 px-2 border border-slate-600 rounded flex items-center justify-center text-[10px] font-bold text-slate-400">ISO 9001</div>
                         <div class="h-8 px-2 border border-slate-600 rounded flex items-center justify-center text-[10px] font-bold text-slate-400">OHSAS 18001</div>
                         <div class="h-8 px-2 border border-slate-600 rounded flex items-center justify-center text-[10px] font-bold text-slate-400">5188 YÖNETMELİK</div>
                    </div>
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