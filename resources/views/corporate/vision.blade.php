@extends('layouts.app')

@section('title', 'Vizyon & Misyon')

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
                                class="block px-4 py-3 text-brand-red font-bold bg-slate-50 border-l-4 border-brand-red">Vizyon
                                & Misyon</a></li>
                        <li><a href="{{ route('corporate.values') }}"
                                class="block px-4 py-3 text-slate-600 hover:bg-slate-50 hover:text-brand-red border-l-4 border-transparent hover:border-brand-red transition">Değerlerimiz</a>
                        </li>
                        <li><a href="{{ route('corporate.regions') }}"
                                class="block px-4 py-3 text-slate-600 hover:bg-slate-50 hover:text-brand-red border-l-4 border-transparent hover:border-brand-red transition">Bölge
                                Müdürlükleri</a></li>
                        <li><a href="{{ route('corporate.documents') }}"
                                class="block px-4 py-3 text-slate-600 hover:bg-slate-50 hover:text-brand-red border-l-4 border-transparent hover:border-brand-red transition">Belgelerimiz</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Content Area -->
            <div class="lg:col-span-9 space-y-12">

                <!-- Vision -->
                <div class="bg-white p-8 rounded-lg border border-slate-200 shadow-sm hover:shadow-md transition">
                    <div class="flex items-start">
                        <div
                            class="w-12 h-12 bg-corporate-navy text-white rounded flex items-center justify-center shrink-0 mr-6">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-2xl font-bold text-corporate-navy mb-4">Vizyonumuz</h2>
                            <p class="text-slate-600 leading-relaxed text-lg">
                                Ulusal ve uluslararası düzeyde özel güvenlik sektöründe; kalitesi, güvenilirliği ve
                                operasyonel kabiliyeti ile referans gösterilen lider marka olmak. Teknolojiyi güvenlik
                                çözümlerine entegre ederek, sektördeki standartları belirleyen bir konuma ulaşmayı
                                hedefliyoruz.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Mission -->
                <div class="bg-white p-8 rounded-lg border border-slate-200 shadow-sm hover:shadow-md transition">
                    <div class="flex items-start">
                        <div
                            class="w-12 h-12 bg-brand-yellow text-brand-black rounded flex items-center justify-center shrink-0 mr-6">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-2xl font-bold text-corporate-navy mb-4">Misyonumuz</h2>
                            <p class="text-slate-600 leading-relaxed text-lg">
                                Müşterilerimizin can ve mal güvenliğini; eğitimli personel, modern teknoloji ve proaktif
                                güvenlik stratejileri ile en üst düzeyde korumak. Riskleri önceden tespit ederek önleyici
                                tedbirler almak ve huzurlu yaşam alanları tesis etmektir.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection