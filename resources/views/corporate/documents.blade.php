@extends('layouts.app')

@section('title', 'Belgelerimiz')

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
                                class="block px-4 py-3 text-slate-600 hover:bg-slate-50 hover:text-brand-red border-l-4 border-transparent hover:border-brand-red transition">Bölge
                                Müdürlükleri</a></li>
                        <li><a href="{{ route('corporate.documents') }}"
                                class="block px-4 py-3 text-brand-red font-bold bg-slate-50 border-l-4 border-brand-red">Belgelerimiz</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Content Area -->
            <div class="lg:col-span-9 space-y-8">
                <h2 class="text-2xl font-display font-bold text-corporate-navy mb-6 pb-4 border-b border-slate-200">
                    Belgelerimiz ve Sertifikalarımız</h2>
                <p class="text-slate-600 mb-8 leading-relaxed">
                    Hizmet kalitemizi ve yasal uyumluluğumuzu belgeleyen sertifikalarımız, müşterilerimize sunduğumuz
                    güvenin teminatıdır.
                </p>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    @foreach(['Özel Güvenlik Faaliyet İzin Belgesi', 'ISO 9001:2015 Kalite Yönetim Sistemi', 'OHSAS 18001 İş Sağlığı ve Güvenliği', 'ISO 10002 Müşteri Memnuniyeti', 'Hizmet Yeterlilik Belgesi (TSE)'] as $doc)
                        <div
                            class="bg-white p-6 rounded-lg border border-slate-200 flex items-center hover:shadow-md transition group">
                            <div
                                class="w-12 h-12 bg-slate-100 rounded flex items-center justify-center mr-4 text-slate-400 group-hover:text-brand-red group-hover:bg-brand-red/10 transition">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                    </path>
                                </svg>
                            </div>
                            <span
                                class="font-semibold text-corporate-navy group-hover:text-brand-red transition">{{ $doc }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection