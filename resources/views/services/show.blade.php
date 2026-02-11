@extends('layouts.app')

@section('title', $service->title)

@section('content')
    <!-- Hero Section -->
    <div class="relative bg-corporate-navy pt-32 pb-20 text-center text-white overflow-hidden">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0">
            <img src="{{ $service->image }}" alt="{{ $service->title }}" class="w-full h-full object-cover opacity-20 transform scale-105">
            <div class="absolute inset-0 bg-gradient-to-t from-corporate-navy via-corporate-navy/90 to-transparent"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 z-10">
            <div class="flex justify-center items-center space-x-2 text-sm text-slate-300 mb-6 font-medium tracking-wide">
                <a href="{{ route('home') }}" class="hover:text-white transition hover:underline">Ana Sayfa</a>
                <span class="text-slate-500">/</span>
                <a href="{{ route('services') }}" class="hover:text-white transition hover:underline">Hizmetlerimiz</a>
                <span class="text-slate-500">/</span>
                <span class="text-brand-red">{{ $service->title }}</span>
            </div>
            <h1 class="text-4xl md:text-6xl font-display font-black text-white tracking-tight leading-tight drop-shadow-lg">{{ $service->title }}</h1>
        </div>
    </div>

    <!-- Content Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            <!-- Main Content -->
            <div class="lg:col-span-2">
                <div class="prose prose-lg prose-slate max-w-none">
                    <img src="{{ $service->image }}" alt="{{ $service->title }}"
                        class="w-full h-64 md:h-96 object-cover rounded-lg shadow-lg mb-8">

                    @foreach(explode("\n", $service->content) as $line)
                        @if(trim($line) != '')
                            @if(str_ends_with(trim($line), ':'))
                                <h3 class="text-xl font-bold text-corporate-navy mt-8 mb-4">{{ $line }}</h3>
                            @elseif(str_starts_with(trim($line), '-'))
                                <li class="ml-4">{{ substr(trim($line), 1) }}</li>
                            @else
                                <p class="mb-4 text-slate-600 leading-relaxed">{{ $line }}</p>
                            @endif
                        @endif
                    @endforeach
                </div>

                <div class="mt-12 p-8 bg-slate-50 rounded-lg border border-slate-200">
                    <h3 class="text-2xl font-bold text-corporate-navy mb-4">Güvenlik Çözümlerimiz İçin Bize Ulaşın</h3>
                    <p class="text-slate-600 mb-6">Projenize özel güvenlik risk analizi ve tekliflendirme için uzman
                        ekibimizle iletişime geçin.</p>
                    <a href="{{ route('contact') }}"
                        class="inline-flex items-center px-6 py-3 bg-brand-red text-white font-bold rounded hover:bg-corporate-navy transition duration-300">
                        Teklif Alın
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="lg:col-span-1 space-y-8">
                <!-- Services Menu -->
                <div class="bg-white rounded-lg shadow-md border border-slate-100 overflow-hidden">
                    <div class="bg-corporate-navy p-4">
                        <h3 class="text-lg font-bold text-white">Diğer Hizmetlerimiz</h3>
                    </div>
                    <div class="p-2">
                        <nav class="space-y-1">
                            @foreach(\App\Http\Controllers\ServiceController::getServices() as $s)
                                <a href="{{ route('service.show', $s['slug']) }}"
                                    class="flex items-center px-4 py-3 text-sm font-medium rounded-md transition-colors {{ $service->slug == $s['slug'] ? 'bg-slate-100 text-brand-red border-l-4 border-brand-red' : 'text-slate-600 hover:bg-slate-50 hover:text-corporate-navy' }}">
                                    {{ $s['title'] }}
                                </a>
                            @endforeach
                        </nav>
                    </div>
                </div>

                <!-- Contact Widget -->
                <div class="bg-corporate-navy rounded-lg shadow-md p-6 text-white text-center">
                    <h3 class="text-xl font-bold mb-2">Yardıma mı ihtiyacınız var?</h3>
                    <p class="text-slate-300 mb-6 text-sm">7/24 Kesintisiz Destek Hattımız</p>
                    <a href="tel:02163156363" class="text-2xl font-bold block hover:text-brand-red transition">0216 315 63
                        63
                        67</a>
                </div>
            </div>
        </div>
    </div>
@endsection