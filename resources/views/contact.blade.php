@extends('layouts.app')

@section('title', 'İletişim')

@section('content')
<!-- Page Header -->
<div class="bg-corporate-navy py-16 relative overflow-hidden">
    <div class="absolute inset-0 bg-brand-black/20"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <h1 class="text-3xl md:text-4xl font-display font-bold text-white mb-4">İletişim</h1>
        <div class="flex justify-center items-center space-x-2 text-sm text-slate-300">
            <a href="{{ route('home') }}" class="hover:text-white transition">Ana Sayfa</a>
            <span>/</span>
            <span class="text-brand-red font-semibold">Bize Ulaşın</span>
        </div>
    </div>
</div>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
        
        <!-- Contact Info Sidebar -->
        <div class="lg:col-span-4 space-y-8">
            <div class="bg-white p-8 rounded-lg border border-slate-200 shadow-sm">
                <h2 class="text-xl font-display font-bold text-corporate-navy mb-6">İletişim Bilgileri</h2>
                <div class="space-y-6">
                    <div class="flex items-start">
                        <div class="w-10 h-10 bg-slate-50 rounded flex items-center justify-center text-brand-red flex-shrink-0 mr-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-slate-800 text-sm mb-1">Merkez Ofis</h3>
                            <p class="text-slate-600 text-sm">İstanbul, Türkiye</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="w-10 h-10 bg-slate-50 rounded flex items-center justify-center text-brand-red flex-shrink-0 mr-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-slate-800 text-sm mb-1">Telefon</h3>
                            <p class="text-slate-600 text-sm">0212 123 45 67</p>
                            <p class="text-slate-400 text-xs mt-1">Hafta içi 09:00 - 18:00</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="w-10 h-10 bg-slate-50 rounded flex items-center justify-center text-brand-red flex-shrink-0 mr-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-slate-800 text-sm mb-1">E-posta</h3>
                            <p class="text-slate-600 text-sm">info@abkoruma.com</p>
                            <p class="text-slate-400 text-xs mt-1">7/24 Mail Gönderebilirsiniz</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Google Maps Placeholder with Corporate Style -->
            <div class="bg-slate-100 rounded-lg border border-slate-200 h-64 flex items-center justify-center relative overflow-hidden group">
                 <div class="absolute inset-0 bg-slate-200 animate-pulse"></div>
                 <span class="relative z-10 text-slate-500 font-bold text-sm">Google Maps Entegrasyonu</span>
            </div>
        </div>

        <!-- Contact Form -->
        <div class="lg:col-span-8">
            <div class="bg-white p-8 md:p-10 rounded-lg border border-slate-200 shadow-sm">
                <h2 class="text-2xl font-display font-bold text-corporate-navy mb-2">Bize Ulaşın</h2>
                <p class="text-slate-500 mb-8 border-b border-slate-100 pb-8">Güvenlik ihtiyaçlarınız için form doldurarak teklif alabilir veya bilgi talep edebilirsiniz.</p>
                
                <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="name" class="block text-xs font-bold text-slate-700 uppercase tracking-wide mb-2">Adınız Soyadınız *</label>
                            <input type="text" id="name" name="name" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded text-slate-700 focus:outline-none focus:border-brand-red focus:ring-1 focus:ring-brand-red transition placeholder-slate-400" placeholder="Tam adınız" required>
                        </div>
                        <div>
                            <label for="phone" class="block text-xs font-bold text-slate-700 uppercase tracking-wide mb-2">Telefon Numaranız</label>
                            <input type="tel" id="phone" name="phone" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded text-slate-700 focus:outline-none focus:border-brand-red focus:ring-1 focus:ring-brand-red transition placeholder-slate-400" placeholder="05XX XXX XX XX">
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                         <div>
                            <label for="email" class="block text-xs font-bold text-slate-700 uppercase tracking-wide mb-2">E-posta Adresiniz *</label>
                            <input type="email" id="email" name="email" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded text-slate-700 focus:outline-none focus:border-brand-red focus:ring-1 focus:ring-brand-red transition placeholder-slate-400" placeholder="ornek@sirket.com" required>
                        </div>
                        <div>
                            <label for="subject" class="block text-xs font-bold text-slate-700 uppercase tracking-wide mb-2">Konu</label>
                            <select id="subject" name="subject" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded text-slate-700 focus:outline-none focus:border-brand-red focus:ring-1 focus:ring-brand-red transition">
                                <option value="teklif">Fiyat Teklifi</option>
                                <option value="bilgi">Hizmet Bilgisi</option>
                                <option value="ik">İş Başvurusu</option>
                                <option value="diger">Diğer</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <label for="message" class="block text-xs font-bold text-slate-700 uppercase tracking-wide mb-2">Mesajınız *</label>
                        <textarea id="message" name="message" rows="5" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded text-slate-700 focus:outline-none focus:border-brand-red focus:ring-1 focus:ring-brand-red transition placeholder-slate-400" placeholder="Talebinizi detaylı olarak belirtiniz..." required></textarea>
                    </div>

                    <div class="flex items-center justify-between pt-4">
                        <p class="text-xs text-slate-400">* ile işaretli alanlar zorunludur.</p>
                        <button type="submit" class="px-8 py-3 bg-corporate-navy text-white text-sm font-bold rounded hover:bg-brand-red transition shadow-lg uppercase tracking-wider">
                            Gönder
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
