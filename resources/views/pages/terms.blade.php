@extends('layouts.app')

@section('title', 'Yasal Uyarı')

@section('content')
<div class="bg-corporate-navy pt-32 pb-16 relative overflow-hidden">
    <div class="absolute inset-0 bg-brand-black/20"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <h1 class="text-3xl md:text-4xl font-display font-bold text-white mb-4">Yasal Uyarı</h1>
        <div class="flex justify-center items-center space-x-2 text-sm text-slate-300">
            <a href="{{ route('home') }}" class="hover:text-white transition">Ana Sayfa</a>
            <span>/</span>
            <span class="text-brand-red font-semibold">Yasal Uyarı</span>
        </div>
    </div>
</div>

<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
    <div class="prose prose-slate max-w-none text-slate-600">
        <p>
            Bu web sitesi AB KORUMA ÖZEL GÜVENLİK HİZMETLERİ'ne aittir. Site içeriğinde bulunan tüm metinler, görseller, 
            logolar ve diğer materyaller telif hakları ile korunmaktadır. İzinsiz kopyalanması, dağıtılması veya ticari amaçla 
            kullanılması yasaktır.
        </p>

        <h3>Sorumluluk Reddi</h3>
        <p>
            Bu sitede yer alan bilgiler genel bilgilendirme amacı taşımakta olup, kesinlik ve güncellik garantisi verilmemektedir. 
            Şirketimiz, sitedeki bilgilerin kullanımından doğabilecek herhangi bir zarardan sorumlu tutulamaz.
        </p>

        <h3>Gizlilik Politikası</h3>
        <p>
            Sitemizi ziyaret ettiğinizde, tarayıcınız aracılığıyla bazı anonim veriler (IP adresi, tarayıcı türü vb.) toplanabilir. 
            Bu veriler sadece site performansını analiz etmek amacıyla kullanılır.
        </p>
    </div>
</div>
@endsection
