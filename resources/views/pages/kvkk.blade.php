@extends('layouts.app')

@section('title', 'Kişisel Verilerin Korunması')

@section('content')
<div class="bg-corporate-navy pt-32 pb-16 relative overflow-hidden">
    <div class="absolute inset-0 bg-brand-black/20"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <h1 class="text-3xl md:text-4xl font-display font-bold text-white mb-4">Kişisel Verilerin Korunması</h1>
        <div class="flex justify-center items-center space-x-2 text-sm text-slate-300">
            <a href="{{ route('home') }}" class="hover:text-white transition">Ana Sayfa</a>
            <span>/</span>
            <span class="text-brand-red font-semibold">KVKK</span>
        </div>
    </div>
</div>

<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
    <div class="prose prose-slate max-w-none text-slate-600">
        <h3>1. Amaç</h3>
        <p>
            AB KORUMA ÖZEL GÜVENLİK HİZMETLERİ ("Şirket") olarak, kişisel verilerinizin güvenliği hususuna azami hassasiyet göstermekteyiz. 
            Bu bilinçle, Şirket olarak ürün ve hizmetlerimizden faydalanan kişiler dahil, Şirket ile ilişkili tüm şahıslara ait her türlü
            kişisel verilerin 6698 sayılı Kişisel Verilerin Korunması Kanunu ("KVK Kanunu")'na uygun olarak işlenerek, muhafaza edilmesine 
            büyük önem atfetmekteyiz.
        </p>

        <h3>2. Kişisel Verilerin Toplanması ve İşlenmesi</h3>
        <p>
            Kişisel verileriniz, Şirketimiz tarafından verilen güvenlik hizmetlerinin değişkenliğine ve niteliğine bağlı olarak; 
            otomatik ya da otomatik olmayan yöntemlerle, ofisler, şubeler, internet sitesi, sosyal medya mecraları, mobil uygulamalar 
            ve benzeri vasıtalarla sözlü, yazılı ya da elektronik olarak toplanabilecektir.
        </p>

        <h3>3. İşlenen Kişisel Verilerin Kimlere ve Hangi Amaçla Aktarılabileceği</h3>
        <p>
            Toplanan kişisel verileriniz; Şirketimiz tarafından sunulan hizmetlerden sizleri faydalandırmak için gerekli çalışmaların 
            iş birimlerimiz tarafından yapılması, Şirketimizin ve Şirketimizle iş ilişkisi içerisinde olan kişilerin hukuki ve ticari 
            güvenliğinin temini, Şirketimizin ticari ve iş stratejilerinin belirlenmesi ve uygulanması amaçlarıyla; iş ortaklarımıza, 
            tedarikçilerimize, hissedarlarımıza, kanunen yetkili kamu kurumları ve özel kişilere, KVK Kanunu'nun 8. ve 9. maddelerinde 
            belirtilen kişisel veri işleme şartları ve amaçları çerçevesinde aktarılabilecektir.
        </p>
    </div>
</div>
@endsection
