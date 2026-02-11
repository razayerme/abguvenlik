@extends('layouts.app')

@section('title', 'Değerlerimiz')

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
                    <li><a href="{{ route('corporate.index') }}" class="block px-4 py-3 text-slate-600 hover:bg-slate-50 hover:text-brand-red border-l-4 border-transparent hover:border-brand-red transition">Hakkımızda</a></li>
                    <li><a href="{{ route('corporate.vision') }}" class="block px-4 py-3 text-slate-600 hover:bg-slate-50 hover:text-brand-red border-l-4 border-transparent hover:border-brand-red transition">Vizyon & Misyon</a></li>
                    <li><a href="{{ route('corporate.values') }}" class="block px-4 py-3 text-brand-red font-bold bg-slate-50 border-l-4 border-brand-red">Değerlerimiz</a></li>
                    <li><a href="{{ route('corporate.regions') }}" class="block px-4 py-3 text-slate-600 hover:bg-slate-50 hover:text-brand-red border-l-4 border-transparent hover:border-brand-red transition">Bölge Müdürlükleri</a></li>
                    <li><a href="{{ route('corporate.documents') }}" class="block px-4 py-3 text-slate-600 hover:bg-slate-50 hover:text-brand-red border-l-4 border-transparent hover:border-brand-red transition">Belgelerimiz</a></li>
                </ul>
            </div>
        </div>

        <!-- Content Area -->
        <div class="lg:col-span-9 space-y-8">
            <h2 class="text-2xl font-display font-bold text-corporate-navy mb-6 pb-4 border-b border-slate-200">Temel Değerlerimiz</h2>
            
            <p class="text-slate-600 mb-8 leading-relaxed">
                Kurumsal kültürümüzün temelini oluşturan değerlerimiz, iş yapış biçimimize rehberlik eder. Müşterilerimize, çalışanlarımıza ve topluma karşı sorumluluklarımızı bu değerler ışığında yerine getiriyoruz.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @foreach([
                    ['title' => 'İnsan Odaklılık', 'desc' => 'Çalışanlarımız en değerli varlığımızdır. Onların güvenliği ve gelişimi önceliğimizdir.'],
                    ['title' => 'Hukuka Bağlılık', 'desc' => 'Tüm operasyonlarımızı 5188 sayılı kanun ve ilgili mevzuata tam uyum çerçevesinde yürütürüz.'],
                    ['title' => 'Süreklilik', 'desc' => 'Hizmet kalitemizde sürdürülebilirliği sağlamak için sürekli iyileştirme prensibini benimseriz.'],
                    ['title' => 'Liderlik', 'desc' => 'Sektörde öncü uygulamalar geliştirerek, güvenlik standartlarını yukarı taşırız.'],
                    ['title' => 'Şeffaflık', 'desc' => 'İş süreçlerimizde ve raporlamalarımızda açık, anlaşılır ve denetlenebilir bir yapı sunarız.'],
                    ['title' => 'Dürüstlük', 'desc' => 'Etik ilkelerden taviz vermeden, dürüst ve güvenilir bir iş ortağı olmayı taahhüt ederiz.'],
                    ['title' => 'Ketumiyet', 'desc' => 'Müşterilerimizin ticari sırlarını ve özel bilgilerini en üst düzeyde gizlilikle koruruz.'],
                    ['title' => 'Sorumluluk', 'desc' => 'Topluma ve çevreye karşı duyarlılıkla hareket eder, sosyal sorumluluk bilinci taşırız.']
                ] as $value)
                <div class="bg-white p-6 rounded-lg border border-slate-200 hover:border-brand-red/30 hover:shadow-md transition group">
                    <h3 class="text-lg font-bold text-corporate-navy mb-2 group-hover:text-brand-red transition">{{ $value['title'] }}</h3>
                    <p class="text-sm text-slate-600">{{ $value['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
