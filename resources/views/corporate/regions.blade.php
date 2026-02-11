@extends('layouts.app')

@section('title', 'Bölge Müdürlükleri')

@section('content')
    <!-- Page Header -->
    <div class="bg-corporate-navy py-16 relative overflow-hidden">
        <div class="absolute inset-0 bg-brand-black/20"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <h1 class="text-3xl md:text-4xl font-display font-bold text-white mb-4">Hakkımızda</h1>
            <div class="flex justify-center items-center space-x-2 text-sm text-slate-300">
                <a href="{{ route('home') }}" class="hover:text-white transition">Ana Sayfa</a>
                <span>/</span>
                <span class="text-brand-red font-semibold">Kurumsal</span>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
            <!-- Sidebar Navigation -->
            <div class="lg:col-span-3 hidden lg:block">
                <div class="bg-white border border-slate-200 rounded-lg overflow-hidden sticky top-28">
                    <div class="p-4 bg-slate-50 border-b border-slate-200 font-bold text-corporate-navy">Hakkımızda</div>
                    <ul class="divide-y divide-slate-100 text-sm">
                        <li><a href="{{ route('corporate.index') }}"
                                class="block px-4 py-3 text-slate-600 hover:bg-slate-50 hover:text-brand-red border-l-4 border-transparent hover:border-brand-red transition">Hakkımızda</a>
                        </li>
                        <li><a href="{{ route('corporate.vision') }}"
                                class="block px-4 py-3 text-slate-600 hover:bg-slate-50 hover:text-brand-red border-l-4 border-transparent hover:border-brand-red transition">Vizyon
                                & Misyon</a></li>
                        <li><a href="{{ route('corporate.values') }}"
                                class="block px-4 py-3 text-slate-600 hover:bg-slate-50 hover:text-brand-red border-l-4 border-transparent hover:border-brand-red transition">Değerlerimiz</a>
                        </li>
                        <li><a href="{{ route('corporate.regions') }}"
                                class="block px-4 py-3 text-brand-red font-bold bg-slate-50 border-l-4 border-brand-red">Bölge
                                Müdürlükleri</a></li>
                        <li><a href="{{ route('corporate.documents') }}"
                                class="block px-4 py-3 text-slate-600 hover:bg-slate-50 hover:text-brand-red border-l-4 border-transparent hover:border-brand-red transition">Belgelerimiz</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Content Area -->
            <div class="lg:col-span-9 space-y-8">
                <h2 class="text-2xl font-display font-bold text-corporate-navy mb-6 pb-4 border-b border-slate-200">Bölge
                    Müdürlükleri</h2>
                <p class="text-slate-600 mb-8 leading-relaxed">
                    Türkiye genelindeki geniş hizmet ağımız ile müşterilerimize yerinde ve hızlı çözümler sunuyoruz. Bölge
                    müdürlüklerimiz ve irtibat ofislerimizle her an yanınızdayız.
                </p>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Headquarters -->
                    <div class="bg-white p-6 rounded-lg border border-slate-200 shadow-sm">
                        <h3 class="text-xl font-bold text-corporate-navy mb-2 flex items-center">
                            <svg class="w-5 h-5 text-brand-red mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                                </path>
                            </svg>
                            Genel Merkez (İstanbul)
                        </h3>
                        <p class="text-slate-600 text-sm mb-2">Avrupa Yakası Bölge Müdürlüğü</p>
                        <p class="text-slate-500 text-sm">T: 0216 315 63 63</p>
                    </div>

                    <!-- Ankara Region -->
                    <div class="bg-white p-6 rounded-lg border border-slate-200 shadow-sm">
                        <h3 class="text-xl font-bold text-corporate-navy mb-2 flex items-center">
                            <svg class="w-5 h-5 text-brand-red mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            İç Anadolu Bölge Müdürlüğü
                        </h3>
                        <p class="text-slate-600 text-sm mb-2">Ankara İrtibat Ofisi</p>
                        <p class="text-slate-500 text-sm">T: 0216 315 63 63</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection