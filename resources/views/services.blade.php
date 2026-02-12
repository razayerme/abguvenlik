@extends('layouts.app')

@section('title', 'Hizmetlerimiz')

@section('content')
<!-- Page Header -->
<div class="bg-corporate-navy py-16 relative overflow-hidden">
    <div class="absolute inset-0 bg-brand-black/20"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <h1 class="text-3xl md:text-4xl font-display font-bold text-white mb-4">Hizmetlerimiz</h1>
        <div class="flex justify-center items-center space-x-2 text-sm text-slate-300">
            <a href="{{ route('home') }}" class="hover:text-white transition">Ana Sayfa</a>
            <span>/</span>
            <span class="text-brand-red font-semibold">Hizmet Alanlarımız</span>
        </div>
    </div>
</div>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 space-y-12">
    
    <!-- Service Item: AVM -->
    <div id="avm" class="scroll-mt-32 bg-white rounded-lg border border-slate-200 overflow-hidden hover:shadow-lg transition duration-300">
        <div class="grid grid-cols-1 md:grid-cols-3">
            <div class="md:col-span-1 bg-slate-100 relative h-64 md:h-auto">
                 <a href="{{ route('service.show', 'avm-guvenligi') }}" class="block h-full w-full group relative">
                    <img src="https://images.unsplash.com/photo-1532453288672-3a27e9be9efd?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80" alt="AVM Güvenliği" class="absolute inset-0 w-full h-full object-cover transition duration-300 group-hover:scale-105">
                    <div class="absolute inset-0 bg-brand-black/20 group-hover:bg-brand-black/0 transition duration-300"></div>
                 </a>
            </div>
            <div class="md:col-span-2 p-8 md:p-10">
                <div class="flex items-center mb-4">
                    <div class="w-10 h-10 bg-slate-50 rounded flex items-center justify-center text-brand-red mr-4">
                       <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                    </div>
                     <h2 class="text-2xl font-bold text-corporate-navy">
                        <a href="{{ route('service.show', 'avm-guvenligi') }}" class="hover:text-brand-red transition">Alışveriş Merkezi (AVM) Güvenliği</a>
                    </h2>
                </div>
                <p class="text-slate-600 mb-6 leading-relaxed">
                    Alışveriş merkezlerinde ziyaretçi yoğunluğunu yönetmek, mağaza güvenliğini sağlamak ve ortak alanlarda huzuru tesis etmek için profesyonel çözümler sunuyoruz. Giriş kontrollerini "güvenlik odaklı" ancak "müşteri dostu" bir yaklaşımla yönetiyoruz.
                </p>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mb-6">
                    <div class="flex items-center text-sm text-slate-700"><span class="w-1.5 h-1.5 bg-brand-red rounded-full mr-2"></span>Giriş ve X-Ray Kontrolü</div>
                    <div class="flex items-center text-sm text-slate-700"><span class="w-1.5 h-1.5 bg-brand-red rounded-full mr-2"></span>Kat ve Mağaza Devriyesi</div>
                    <div class="flex items-center text-sm text-slate-700"><span class="w-1.5 h-1.5 bg-brand-red rounded-full mr-2"></span>Otopark Denetimi</div>
                    <div class="flex items-center text-sm text-slate-700"><span class="w-1.5 h-1.5 bg-brand-red rounded-full mr-2"></span>CCTV İzleme Merkezi</div>
                </div>
                <a href="{{ route('service.show', 'avm-guvenligi') }}" class="inline-flex items-center text-brand-red font-semibold hover:text-corporate-navy transition group">
                    Hizmeti İncele
                    <svg class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </a>
            </div>
        </div>
    </div>

    <!-- Service Item: Plaza -->
    <div id="plaza" class="scroll-mt-32 bg-white rounded-lg border border-slate-200 overflow-hidden hover:shadow-lg transition duration-300">
        <div class="grid grid-cols-1 md:grid-cols-3">
            <div class="md:col-span-1 bg-slate-100 relative h-64 md:h-auto order-1 md:order-last">
                 <a href="{{ route('service.show', 'plaza-guvenligi') }}" class="block h-full w-full group relative">
                    <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Plaza Güvenliği" class="absolute inset-0 w-full h-full object-cover transition duration-300 group-hover:scale-105">
                    <div class="absolute inset-0 bg-brand-black/20 group-hover:bg-brand-black/0 transition duration-300"></div>
                 </a>
            </div>
            <div class="md:col-span-2 p-8 md:p-10 order-2 md:order-first">
                 <div class="flex items-center mb-4">
                    <div class="w-10 h-10 bg-slate-50 rounded flex items-center justify-center text-brand-red mr-4">
                      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z"></path></svg>
                    </div>
                     <h2 class="text-2xl font-bold text-corporate-navy">
                        <a href="{{ route('service.show', 'plaza-guvenligi') }}" class="hover:text-brand-red transition">Plaza ve İş Merkezi Güvenliği</a>
                     </h2>
                </div>
                <p class="text-slate-600 mb-6 leading-relaxed">
                    İş dünyasının kalbinin attığı plazalarda, prestij ve güvenliği bir arada sunuyoruz. Resepsiyon ve karşılama hizmetlerini güvenlik protokolleri ile birleştirerek, ziyaretçi trafiğini kayıt altına alıyor ve yetkisiz girişleri engelliyoruz.
                </p>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mb-6">
                    <div class="flex items-center text-sm text-slate-700"><span class="w-1.5 h-1.5 bg-brand-yellow rounded-full mr-2"></span>Danışma ve Kartlı Geçiş</div>
                    <div class="flex items-center text-sm text-slate-700"><span class="w-1.5 h-1.5 bg-brand-yellow rounded-full mr-2"></span>VIP Karşılama</div>
                    <div class="flex items-center text-sm text-slate-700"><span class="w-1.5 h-1.5 bg-brand-yellow rounded-full mr-2"></span>Mesai Dışı Kontrol</div>
                    <div class="flex items-center text-sm text-slate-700"><span class="w-1.5 h-1.5 bg-brand-yellow rounded-full mr-2"></span>Acil Durum Yönetimi</div>
                </div>
                <a href="{{ route('service.show', 'plaza-guvenligi') }}" class="inline-flex items-center text-brand-red font-semibold hover:text-corporate-navy transition group">
                    Hizmeti İncele
                    <svg class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </a>
            </div>
        </div>
    </div>

    <!-- Service Item: Insaat -->
     <div id="insaat" class="scroll-mt-32 bg-white rounded-lg border border-slate-200 overflow-hidden hover:shadow-lg transition duration-300">
        <div class="grid grid-cols-1 md:grid-cols-3">
            <div class="md:col-span-1 bg-slate-100 relative h-64 md:h-auto">
                 <a href="{{ route('service.show', 'insaat-guvenligi') }}" class="block h-full w-full group relative">
                    <img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="İnşaat Güvenliği" class="absolute inset-0 w-full h-full object-cover transition duration-300 group-hover:scale-105">
                     <div class="absolute inset-0 bg-brand-black/20 group-hover:bg-brand-black/0 transition duration-300"></div>
                 </a>
            </div>
            <div class="md:col-span-2 p-8 md:p-10">
                <div class="flex items-center mb-4">
                    <div class="w-10 h-10 bg-slate-50 rounded flex items-center justify-center text-brand-red mr-4">
                       <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.384-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                    </div>
                     <h2 class="text-2xl font-bold text-corporate-navy">
                        <a href="{{ route('service.show', 'insaat-guvenligi') }}" class="hover:text-brand-red transition">İnşaat ve Şantiye Güvenliği</a>
                     </h2>
                </div>
                <p class="text-slate-600 mb-6 leading-relaxed">
                    Şantiye sahalarındaki pahalı ekipmanların, malzemelerin korunması ve iş güvenliği kurallarının denetlenmesi kritik önem taşır. Hırsızlık, sabotaj ve iş kazalarına karşı proaktif önlemler alıyoruz.
                </p>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mb-6">
                    <div class="flex items-center text-sm text-slate-700"><span class="w-1.5 h-1.5 bg-brand-red rounded-full mr-2"></span>Çevre Güvenliği</div>
                    <div class="flex items-center text-sm text-slate-700"><span class="w-1.5 h-1.5 bg-brand-red rounded-full mr-2"></span>Giriş-Çıkış Kayıtları</div>
                    <div class="flex items-center text-sm text-slate-700"><span class="w-1.5 h-1.5 bg-brand-red rounded-full mr-2"></span>Gece Bekçiliği</div>
                    <div class="flex items-center text-sm text-slate-700"><span class="w-1.5 h-1.5 bg-brand-red rounded-full mr-2"></span>İş Sağlığı Denetimi</div>
                </div>
                <a href="{{ route('service.show', 'insaat-guvenligi') }}" class="inline-flex items-center text-brand-red font-semibold hover:text-corporate-navy transition group">
                    Hizmeti İncele
                    <svg class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </a>
            </div>
        </div>
    </div>

    <!-- Service Item: Site -->
     <div id="site" class="scroll-mt-32 bg-white rounded-lg border border-slate-200 overflow-hidden hover:shadow-lg transition duration-300">
        <div class="grid grid-cols-1 md:grid-cols-3">
            <div class="md:col-span-1 bg-slate-100 relative h-64 md:h-auto order-1 md:order-last">
                 <a href="{{ route('service.show', 'site-guvenligi') }}" class="block h-full w-full group relative">
                    <img src="https://images.unsplash.com/photo-1564013799919-ab600027ffc6?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80" alt="Site Güvenliği" class="absolute inset-0 w-full h-full object-cover transition duration-300 group-hover:scale-105">
                     <div class="absolute inset-0 bg-brand-black/20 group-hover:bg-brand-black/0 transition duration-300"></div>
                 </a>
            </div>
            <div class="md:col-span-2 p-8 md:p-10 order-2 md:order-first">
                 <div class="flex items-center mb-4">
                    <div class="w-10 h-10 bg-slate-50 rounded flex items-center justify-center text-brand-red mr-4">
                      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                    </div>
                     <h2 class="text-2xl font-bold text-corporate-navy">
                        <a href="{{ route('service.show', 'site-guvenligi') }}" class="hover:text-brand-red transition">Site ve Konut Güvenliği</a>
                     </h2>
                </div>
                <p class="text-slate-600 mb-6 leading-relaxed">
                    Ailenizle huzur içinde yaşamanız için site ve konutlarda 7/24 güvenlik sağlıyoruz. Devriye hizmetleri, kamera sistemleri ve plaka tanıma sistemleri ile yaşam alanlarınızı koruma altına alıyoruz.
                </p>
                <ul class="space-y-2 mb-6">
                     <li class="flex items-center text-sm text-slate-700">
                        <svg class="w-4 h-4 text-green-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        Fiziki ve Elektronik Güvenlik Entegrasyonu
                    </li>
                     <li class="flex items-center text-sm text-slate-700">
                        <svg class="w-4 h-4 text-green-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        Misafir Kayıt ve Yönlendirme
                    </li>
                </ul>
                <a href="{{ route('service.show', 'site-guvenligi') }}" class="inline-flex items-center text-brand-red font-semibold hover:text-corporate-navy transition group">
                    Hizmeti İncele
                    <svg class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </a>
            </div>
        </div>
    </div>
    
     <!-- Service Item: Hastane -->
    <div id="hastane" class="scroll-mt-32 bg-white rounded-lg border border-slate-200 overflow-hidden hover:shadow-lg transition duration-300">
        <div class="grid grid-cols-1 md:grid-cols-3">
            <div class="md:col-span-1 bg-slate-100 relative h-64 md:h-auto">
                 <a href="{{ route('service.show', 'hastane-guvenligi') }}" class="block h-full w-full group relative">
                    <img src="https://images.unsplash.com/photo-1586773860418-d37222d8fce3?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Hastane Güvenliği" class="absolute inset-0 w-full h-full object-cover transition duration-300 group-hover:scale-105">
                     <div class="absolute inset-0 bg-brand-black/20 group-hover:bg-brand-black/0 transition duration-300"></div>
                 </a>
            </div>
            <div class="md:col-span-2 p-8 md:p-10">
                <div class="flex items-center mb-4">
                    <div class="w-10 h-10 bg-slate-50 rounded flex items-center justify-center text-brand-red mr-4">
                       <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                    </div>
                     <h2 class="text-2xl font-bold text-corporate-navy">
                        <a href="{{ route('service.show', 'hastane-guvenligi') }}" class="hover:text-brand-red transition">Hastane Güvenliği</a>
                     </h2>
                </div>
                <p class="text-slate-600 mb-6 leading-relaxed">
                    Hastanelerde hasta, hasta yakını ve sağlık çalışanlarının güvenliğini sağlamak hassasiyet gerektirir. Şiddet olaylarını önleme, acil durum yönetimi ve kalabalık kontrolü konularında eğitimli personelimizle hizmet veriyoruz.
                </p>
                 <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mb-6">
                    <div class="flex items-center text-sm text-slate-700"><span class="w-1.5 h-1.5 bg-brand-red rounded-full mr-2"></span>Acil Servis Güvenliği</div>
                    <div class="flex items-center text-sm text-slate-700"><span class="w-1.5 h-1.5 bg-brand-red rounded-full mr-2"></span>Poliklinik Düzeni</div>
                </div>
                <a href="{{ route('service.show', 'hastane-guvenligi') }}" class="inline-flex items-center text-brand-red font-semibold hover:text-corporate-navy transition group">
                    Hizmeti İncele
                    <svg class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </a>
            </div>
        </div>
    </div>

    <!-- Service Item: Danışmanlık (New) -->
     <div id="guvenlik-danismanligi" class="scroll-mt-32 bg-white rounded-lg border border-slate-200 overflow-hidden hover:shadow-lg transition duration-300">
        <div class="grid grid-cols-1 md:grid-cols-3">
            <div class="md:col-span-1 bg-slate-100 relative h-64 md:h-auto order-1 md:order-last">
                 <a href="{{ route('service.show', 'guvenlik-danismanligi') }}" class="block h-full w-full group relative">
                    <img src="https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Güvenlik Danışmanlığı" class="absolute inset-0 w-full h-full object-cover transition duration-300 group-hover:scale-105">
                     <div class="absolute inset-0 bg-brand-black/20 group-hover:bg-brand-black/0 transition duration-300"></div>
                 </a>
            </div>
            <div class="md:col-span-2 p-8 md:p-10 order-2 md:order-first">
                 <div class="flex items-center mb-4">
                    <div class="w-10 h-10 bg-slate-50 rounded flex items-center justify-center text-brand-red mr-4">
                      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                     <h2 class="text-2xl font-bold text-corporate-navy">
                        <a href="{{ route('service.show', 'guvenlik-danismanligi') }}" class="hover:text-brand-red transition">Güvenlik Danışmanlığı</a>
                     </h2>
                </div>
                <p class="text-slate-600 mb-6 leading-relaxed">
                    Sadece fiziksel güvenlik değil, stratejik planlama da sunuyoruz. Mevcut risklerin analizi, tehdit değerlendirmesi ve güvenlik prosedürlerinin oluşturulması konularında 5188 sayılı kanuna uygun profesyonel danışmanlık hizmeti veriyoruz.
                </p>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mb-6">
                    <div class="flex items-center text-sm text-slate-700"><span class="w-1.5 h-1.5 bg-brand-yellow rounded-full mr-2"></span>Risk Analizi</div>
                    <div class="flex items-center text-sm text-slate-700"><span class="w-1.5 h-1.5 bg-brand-yellow rounded-full mr-2"></span>Güvenlik Denetimi (Audit)</div>
                    <div class="flex items-center text-sm text-slate-700"><span class="w-1.5 h-1.5 bg-brand-yellow rounded-full mr-2"></span>Kriz Yönetimi Planlaması</div>
                    <div class="flex items-center text-sm text-slate-700"><span class="w-1.5 h-1.5 bg-brand-yellow rounded-full mr-2"></span>Acil Durum Senaryoları</div>
                </div>
                <a href="{{ route('service.show', 'guvenlik-danismanligi') }}" class="inline-flex items-center text-brand-red font-semibold hover:text-corporate-navy transition group">
                    Hizmeti İncele
                    <svg class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </a>
            </div>
        </div>
    </div>

</div>
@endsection