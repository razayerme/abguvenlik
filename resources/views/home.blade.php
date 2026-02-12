@extends('layouts.app')

@section('content')

<!-- Section 1: Diagonal Hero Split -->
<div class="relative min-h-[80vh] flex flex-col lg:flex-row bg-brand-black w-full overflow-hidden">
    
    <!-- Background Image Mobile (Absolute overlay) -->
    <div class="visible lg:hidden absolute inset-0 z-0">
         <img src="https://images.unsplash.com/photo-1557597774-9d273605dfa9?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Security Background" class="w-full h-full object-cover opacity-40">
         <div class="absolute inset-0 bg-gradient-to-t from-brand-black via-brand-black/90 to-transparent"></div>
    </div>

    <!-- Left Content -->
    <div class="w-full lg:w-1/2 relative z-20 flex flex-col justify-center px-4 md:px-12 lg:px-20 py-24 lg:py-0 text-center lg:text-left">
        <div class="relative max-w-full">
            <span class="inline-block py-1 px-3 border border-brand-red/50 rounded text-brand-red text-[10px] font-bold tracking-[0.3em] uppercase mb-4 md:mb-6 animate-fade-in-up md:animate-fade-in-up">
                5188 Sayılı Yasa
            </span>
            <h1 class="text-4xl md:text-6xl lg:text-7xl xl:text-8xl font-display font-black text-white leading-[1.1] lg:leading-[0.9] tracking-tighter mb-6 md:mb-8 animate-fade-in-up md:animate-fade-in-up break-words" style="animation-duration: 0.8s;">
                MUTLAK <br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-red to-brand-yellow">HUZUR</span> <br>
                VE GÜVEN.
            </h1>
            <p class="text-slate-300 lg:text-slate-400 text-sm md:text-xl font-light mb-8 md:mb-10 max-w-md mx-auto lg:mx-0 leading-relaxed animate-fade-in-up md:animate-fade-in-up px-2 md:px-0">
                Modern tehditlere karşı, devlet disiplini ve özel sektör çevikliğiyle harmanlanmış, sarsılmaz bir güvenlik kalkanı.
            </p>
            
            <div class="flex flex-col md:flex-row items-center justify-center lg:justify-start space-y-4 md:space-y-0 md:space-x-6 animate-fade-in-up md:animate-fade-in-up px-4 md:px-0 w-full">
                <a href="{{ route('contact') }}" class="w-full md:w-auto px-8 py-3 md:py-4 bg-white text-brand-black font-bold uppercase tracking-widest text-xs rounded hover:bg-brand-red hover:text-white transition shadow-lg">
                    Bize Ulaşın
                </a>
                <a href="{{ route('services') }}" class="w-full md:w-auto text-white hover:text-brand-yellow transition font-bold text-xs uppercase tracking-widest py-2 md:py-0 border-b border-white/20 hover:border-brand-yellow pb-1">
                    Hizmetleri Keşfet
                </a>
            </div>
        </div>
    </div>

    <!-- Right Image Desktop Only (Asymmetrical Clip Path) -->
    <div class="hidden lg:block w-3/5 absolute top-0 right-0 h-full lg:clip-path-diagonal z-10">
        <div class="absolute inset-0 bg-brand-black/20 z-10"></div> <!-- Overlay -->
        <img src="https://images.unsplash.com/photo-1557597774-9d273605dfa9?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80" alt="Security Guard" class="w-full h-full object-cover grayscale opacity-60 hover:grayscale-0 hover:opacity-100 transition duration-[2s] transform scale-105 hover:scale-100">
    </div>
</div>

<!-- Section 2: Asymmetrical Intro -->
<section class="py-24 bg-white relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-20">
        <div class="flex flex-col md:flex-row items-end gap-16">
            <div class="w-full md:w-5/12">
                <div class="relative">
                    <div class="absolute -top-10 -left-10 w-40 h-40 bg-slate-50 rounded-full mix-blend-multiply filter blur-2xl opacity-70"></div>
                    <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Corporate" class="relative z-10 w-full rounded shadow-2xl grayscale hover:grayscale-0 transition duration-700">
                    <div class="absolute -bottom-10 -right-10 z-20 bg-brand-black p-8 text-white max-w-xs shadow-xl hidden md:block">
                        <p class="text-4xl font-display font-bold text-brand-yellow mb-1">10+</p>
                        <p class="text-xs uppercase tracking-widest text-slate-400">Yıllık Tecrübe</p>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-6/12 pb-10">
                <span class="text-brand-red font-bold text-xs uppercase tracking-[0.2em] mb-4 block">Kurumsal Profil</span>
                <h2 class="text-4xl md:text-5xl font-display font-black text-brand-black mb-8 leading-tight">
                    DEĞİŞEN DÜNYADA <br>
                    <span class="text-slate-500 font-bold">SABİT KALAN TEK ŞEY</span> <br>
                    GÜVENLİK.
                </h2>
                <p class="text-slate-600 text-lg leading-relaxed mb-8 border-l-2 border-brand-red pl-6">
                    AB Koruma olarak, sıradan bir güvenlik firması değiliz. Biz, risk analizi yapan, strateji üreten ve bunları sahada askeri bir disiplinle uygulayan bir çözüm ortağıyız.
                </p>
                <ul class="space-y-4">
                    @foreach(['Eğitimli & Sertifikalı Personel', 'Yüksek Teknoloji Entegrasyonu', 'Hukuki Mevzuata Tam Uyum'] as $item)
                    <li class="flex items-center group">
                        <span class="w-8 h-[1px] bg-brand-red mr-4 group-hover:w-12 transition-all duration-300"></span>
                        <span class="font-bold text-brand-black text-sm uppercase tracking-wide group-hover:translate-x-2 transition-transform duration-300">{{ $item }}</span>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Section 2.5: References / Business Partners -->
<!-- Section 2.5: References / Business Partners -->
<section class="py-16 bg-slate-50 border-y border-slate-200 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center mb-8">
        <h2 class="text-sm font-bold text-slate-400 uppercase tracking-widest">Güçlü İş Ortaklarımız</h2>
    </div>
    
    <div class="relative w-full overflow-hidden">
        <!-- Fade Gradients -->
        <div class="absolute inset-y-0 left-0 w-24 md:w-32 bg-gradient-to-r from-slate-50 to-transparent z-10"></div>
        <div class="absolute inset-y-0 right-0 w-24 md:w-32 bg-gradient-to-l from-slate-50 to-transparent z-10"></div>
        <div class="flex space-x-12 animate-scroll w-[200%]">
            <!-- Original Logos -->
            @foreach(['THY', 'Kalyon İnşaat', 'Acıbadem', 'Vadi İstanbul', 'Zorlu Center', 'Rönesans Holding', 'Garanti BBVA', 'Medipol Mega', 'Sur Yapı', 'Dap Yapı'] as $ref)
            <div class="flex-shrink-0 w-32 h-16 bg-white border border-slate-200 rounded flex items-center justify-center text-slate-500 font-bold text-xs shadow-sm grayscale hover:grayscale-0 transition duration-300">
                {{ $ref }}
            </div>
            @endforeach
            
            <!-- Duplicate Logos for Seamless Loop -->
            @foreach(['THY', 'Kalyon İnşaat', 'Acıbadem', 'Vadi İstanbul', 'Zorlu Center', 'Rönesans Holding', 'Garanti BBVA', 'Medipol Mega', 'Sur Yapı', 'Dap Yapı'] as $ref)
            <div class="flex-shrink-0 w-32 h-16 bg-white border border-slate-200 rounded flex items-center justify-center text-slate-500 font-bold text-xs shadow-sm grayscale hover:grayscale-0 transition duration-300">
                {{ $ref }}
            </div>
            @endforeach
        </div>
    </div>
</section>

<style>
    @keyframes scroll {
        0% { transform: translateX(0); }
        100% { transform: translateX(-50%); }
    }
    .animate-scroll {
        animation: scroll 30s linear infinite;
    }
    .animate-scroll:hover {
        animation-play-state: paused;
    }
</style>

<!-- Section 3: Dark Services "Showcase" -->
<section class="py-16 md:py-32 bg-brand-black text-white relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-12 md:mb-20 border-b border-white/10 pb-8">
            <h2 class="text-4xl md:text-6xl font-display font-black tracking-tighter mb-4 md:mb-0">HİZMETLER.</h2>
            <a href="{{ route('services') }}" class="text-xs font-bold uppercase tracking-widest hover:text-brand-yellow transition flex items-center">
                Tümünü İncele <span class="ml-2">&rarr;</span>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-0 border-t border-l-0 md:border-l border-white/10">
            @foreach([
                ['01', 'AVM GÜVENLİĞİ', 'Müşteri deneyimini aksatmayan, görünmez ama hissedilir koruma.', 'avm'],
                ['02', 'PLAZA & OFİS', 'Kurumsal itibara uygun, profesyonel karşılama ve güvenlik.', 'plaza'],
                ['03', 'ŞANTİYE', 'Malzeme ve ekipman güvenliği için sert tedbirler.', 'insaat'],
                ['04', 'KONUT & SİTE', 'Aileniz için 7/24 huzur çemberi.', 'site'],
                ['05', 'HASTANE', 'Hassas süreç yönetimi ve kriz müdahalesi.', 'hastane'],
                ['06', 'DANIŞMANLIK', 'Güvenlik açıklarını kapatan stratejik analiz.', 'guvenlik-danismanligi']
            ] as $service)
            <a href="{{ route('services') }}#{{ $service[3] }}" class="group border-b md:border-r border-white/10 p-8 md:p-10 hover:bg-white/5 transition duration-500 relative overflow-hidden">
                <span class="text-xs font-bold text-brand-red mb-4 md:mb-6 block">{{ $service[0] }}</span>
                <h3 class="text-xl md:text-2xl font-bold mb-3 md:mb-4 group-hover:translate-x-2 transition-transform duration-300">{{ $service[1] }}</h3>
                <p class="text-slate-500 text-sm leading-relaxed max-w-xs group-hover:text-slate-300 transition-colors duration-300">
                    {{ $service[2] }}
                </p>
                <div class="absolute bottom-6 right-6 opacity-0 group-hover:opacity-100 transition-opacity duration-300 hidden md:block">
                     <svg class="w-6 h-6 text-brand-yellow" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>


<!-- Section 4: Full Width CTA -->
<section class="relative py-32 flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0 bg-brand-red"></div>
    <div class="absolute inset-0 opacity-20 bg-[url('https://www.transparenttextures.com/patterns/carbon-fibre.png')]"></div>
    
    <div class="relative z-10 text-center px-4 max-w-4xl mx-auto">
        <h2 class="text-white text-5xl md:text-7xl font-display font-black tracking-tighter mb-8 leading-none">
            RİSK ALMAYIN.<br>ÖNLEM ALIN.
        </h2>
        <a href="{{ route('contact') }}" class="inline-block px-12 py-5 bg-white text-brand-black text-sm font-black uppercase tracking-widest hover:bg-brand-black hover:text-white transition-all transform hover:scale-105 shadow-2xl">
            Hemen Teklif İsteyin
        </a>
    </div>
</section>

<style>
    /* Custom Clip Path for Split Hero */
    @media (min-width: 1024px) {
        .lg\:clip-path-diagonal {
            clip-path: polygon(15% 0, 100% 0, 100% 100%, 0% 100%);
        }
    }
    
    .animate-fade-in-up {
        animation: fadeInUp 1s cubic-bezier(0.16, 1, 0.3, 1) both;
    }
    
    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(40px); }
        to { opacity: 1; transform: translateY(0); }
    }
</style>
@endsection
