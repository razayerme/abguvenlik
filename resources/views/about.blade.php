@extends('layouts.app')

@section('title', 'Kurumsal')

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

<!-- Main Content -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
        <!-- Sidebar Navigation (Optional for Corporate feel) -->
        <div class="lg:col-span-3 hidden lg:block">
            <div class="bg-white border border-slate-200 rounded-lg overflow-hidden sticky top-28">
                <div class="p-4 bg-slate-50 border-b border-slate-200 font-bold text-corporate-navy">Kurumsal</div>
                <ul class="divide-y divide-slate-100 text-sm">
                    <li><a href="#profil" class="block px-4 py-3 text-slate-600 hover:bg-slate-50 hover:text-brand-red border-l-2 border-transparent hover:border-brand-red transition">Şirket Profili</a></li>
                    <li><a href="#vizyon" class="block px-4 py-3 text-slate-600 hover:bg-slate-50 hover:text-brand-red border-l-2 border-transparent hover:border-brand-red transition">Vizyon & Misyon</a></li>
                    <li><a href="#kalite" class="block px-4 py-3 text-slate-600 hover:bg-slate-50 hover:text-brand-red border-l-2 border-transparent hover:border-brand-red transition">Kalite Politikası</a></li>
                    <li><a href="#degerler" class="block px-4 py-3 text-slate-600 hover:bg-slate-50 hover:text-brand-red border-l-2 border-transparent hover:border-brand-red transition">Değerlerimiz</a></li>
                </ul>
            </div>
        </div>

        <!-- Content Area -->
        <div class="lg:col-span-9 space-y-16">
            <!-- Company Profile -->
            <section id="profil" class="scroll-mt-28">
                <h2 class="text-2xl font-display font-bold text-corporate-navy mb-6 pb-4 border-b border-slate-200">Şirket Profili</h2>
                <div class="prose prose-slate max-w-none text-slate-600 leading-relaxed">
                    <p class="mb-4">
                        Özel güvenlik alanında faaliyet gösteren <strong class="text-corporate-navy">AB KORUMA ÖZEL GÜVENLİK</strong>, ilk kurulduğu günkü heyecanını ve kaliteli hizmet anlayışını, kurumsal disiplinden taviz vermeden sürdürmektedir. Değişime hızla uyum sağlayan, teknolojiyi operasyonel süreçlerine entegre eden dinamik bir yapımız bulunmaktadır.
                    </p>
                    <p class="mb-4">
                        5188 sayılı Özel Güvenlik Hizmetlerine Dair Kanun çerçevesinde; kişilerin, kurum ve kuruluşların güvenliğini sağlamak amacıyla yasal mevzuata tam uyum içerisinde hizmet veriyoruz. Kamu güvenliğinin tamamlayıcısı olarak, üzerimize düşen sorumluluğun bilincindeyiz.
                    </p>
                    <div class="bg-slate-50 p-6 rounded-lg border-l-4 border-brand-red mt-6">
                        <h4 class="font-bold text-corporate-navy mb-2 text-sm uppercase tracking-wide">Denetim ve Şeffaflık</h4>
                        <p class="text-sm">
                            Hizmet kalitemizi standartların üzerinde tutmak adına, bağımsız denetim mekanizmaları ve iç teftiş birimlerimizle sürekli kontrol sağlıyoruz. Haftanın 6 günü yapılan saha denetim raporları, şeffaflık ilkesi gereği müşterilerimizle düzenli olarak paylaşılmaktadır.
                        </p>
                    </div>
                </div>
            </section>

            <!-- Vision & Mission -->
            <section id="vizyon" class="grid grid-cols-1 md:grid-cols-2 gap-8 scroll-mt-28">
                <div class="bg-white p-8 rounded-lg border border-slate-200 shadow-sm hover:shadow-md transition">
                    <div class="w-10 h-10 bg-corporate-navy text-white rounded flex items-center justify-center mb-4">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-corporate-navy mb-3">Vizyonumuz</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">
                        Ulusal ve uluslararası düzeyde özel güvenlik sektöründe; kalitesi, güvenilirliği ve operasyonel kabiliyeti ile referans gösterilen lider marka olmak.
                    </p>
                </div>
                <div class="bg-white p-8 rounded-lg border border-slate-200 shadow-sm hover:shadow-md transition">
                    <div class="w-10 h-10 bg-brand-yellow text-brand-black rounded flex items-center justify-center mb-4">
                         <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-corporate-navy mb-3">Misyonumuz</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">
                        Müşterilerimizin can ve mal güvenliğini; eğitimli personel, modern teknoloji ve proaktif güvenlik stratejileri ile en üst düzeyde korumak.
                    </p>
                </div>
            </section>

            <!-- Values -->
            <section id="degerler" class="scroll-mt-28">
                <h2 class="text-2xl font-display font-bold text-corporate-navy mb-6 pb-4 border-b border-slate-200">Temel Değerlerimiz</h2>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    @foreach(['İnsan Odaklılık', 'Hukuka Bağlılık', 'Süreklilik', 'Liderlik', 'Şeffaflık', 'Dürüstlük', 'Ketumiyet', 'Sorumluluk'] as $value)
                    <div class="bg-slate-50 p-4 rounded border border-slate-100 text-center">
                        <span class="text-sm font-semibold text-corporate-blue">{{ $value }}</span>
                    </div>
                    @endforeach
                </div>
            </section>

             <!-- Privacy Policy Snippet -->
            <section class="bg-slate-50 p-8 rounded-lg border border-slate-200">
                <h3 class="text-lg font-bold text-corporate-navy mb-3">Gizlilik Taahhüdü</h3>
                <p class="text-slate-600 text-sm leading-relaxed">
                    AB KORUMA ÖZEL GÜVENLİK; hizmet verdiği tüm kurum ve kuruluşlara ait ticari sırları, güvenlik planlarını ve risk analizlerini "Gizli – Kişiye Özel" derecesinde korur. Bilgi güvenliği, operasyonel güvenliğimizin ayrılmaz bir parçasıdır.
                </p>
            </section>
        </div>
    </div>
</div>
@endsection
