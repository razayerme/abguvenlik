<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/hakkimizda', function () {
    return view('about');
})->name('about');

Route::get('/hizmetler', function () {
    return view('services');
})->name('services');

Route::get('/iletisim', function () {
    return view('contact');
})->name('contact');

Route::post('/iletisim', function () {
    // Form submission logic would go here
    return back()->with('success', 'Mesajınız başarıyla gönderildi.');
})->name('contact.submit');
