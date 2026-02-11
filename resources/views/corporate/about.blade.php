@extends('layouts.app')

@section('title', 'Hakkımızda')

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
                                class="block px-4 py-3 text-brand-red font-bold bg-slate-50 border-l-4 border-brand-red">Hakkımızda</a>
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
                                class="block px-4 py-3 text-slate-600 hover:bg-slate-50 hover:text-brand-red border-l-4 border-transparent hover:border-brand-red transition">Belgelerimiz</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Content Area -->
            <div class="lg:col-span-9 space-y-8">
                <h2 class="text-2xl font-display font-bold text-corporate-navy mb-6 pb-4 border-b border-slate-200">Şirket
                    Profili</h2>
                <div class="prose prose-slate max-w-none text-slate-600 leading-relaxed">
                    <p class="mb-4">
                        Özel güvenlik alanında faaliyet gösteren <strong class="text-corporate-navy">AB KORUMA ÖZEL
                            GÜVENLİK</strong>, ilk kurulduğu günkü heyecanını ve kaliteli hizmet anlayışını, kurumsal
                        disiplinden taviz vermeden sürdürmektedir. Değişime hızla uyum sağlayan, teknolojiyi operasyonel
                        süreçlerine entegre eden dinamik bir yapımız bulunmaktadır.
                    </p>
                    <p class="mb-4">
                        5188 sayılı Özel Güvenlik Hizmetlerine Dair Kanun çerçevesinde; kişilerin, kurum ve kuruluşların
                        güvenliğini sağlamak amacıyla yasal mevzuata tam uyum içerisinde hizmet veriyoruz. Kamu güvenliğinin
                        tamamlayıcısı olarak, üzerimize düşen sorumluluğun bilincindeyiz.
                    </p>

                    <div class="bg-slate-50 p-6 rounded-lg border-l-4 border-brand-red mt-8">
                        <h4 class="font-bold text-corporate-navy mb-2 text-sm uppercase tracking-wide">Denetim ve Şeffaflık
                        </h4>
                        <p class="text-sm">
                            Hizmet kalitemizi standartların üzerinde tutmak adına, bağımsız denetim mekanizmaları ve iç
                            teftiş birimlerimizle sürekli kontrol sağlıyoruz. Haftanın 6 günü yapılan saha denetim
                            raporları, şeffaflık ilkesi gereği müşterilerimizle düzenli olarak paylaşılmaktadır.
                        </p>
                    </div>

                    <h3 class="text-xl font-bold text-corporate-navy mt-8 mb-4">Neden AB Koruma?</h3>
                    <ul class="list-disc pl-5 space-y-2">
                        <li>Profesyonel ve Eğitimli Personel</li>
                        <li>Yasal Mevzuata Tam Uyum</li>
                        <li>7/24 Operasyonel Destek</li>
                        <li>Modern Güvenlik Teknolojileri</li>
                        <li>Sürdürülebilir Güvenlik Politikaları</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection