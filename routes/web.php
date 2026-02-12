<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::prefix('hakkimizda')->group(function () {
    Route::get('/', [App\Http\Controllers\CorporateController::class, 'about'])->name('corporate.index'); // Default to about
    Route::get('/sirket-profili', [App\Http\Controllers\CorporateController::class, 'about'])->name('corporate.profile'); // Alias
    Route::get('/degerlerimiz', [App\Http\Controllers\CorporateController::class, 'values'])->name('corporate.values');
    Route::get('/vizyon-misyon', [App\Http\Controllers\CorporateController::class, 'vision'])->name('corporate.vision');
    Route::get('/bolge-mudurlukleri', [App\Http\Controllers\CorporateController::class, 'regions'])->name('corporate.regions');
    Route::get('/belgeler', [App\Http\Controllers\CorporateController::class, 'documents'])->name('corporate.documents');
});

Route::get('/hizmetler', [App\Http\Controllers\ServiceController::class, 'index'])->name('services');
Route::get('/hizmetler/{slug}', [App\Http\Controllers\ServiceController::class, 'show'])->name('service.show');

Route::get('/iletisim', function () {
    return view('contact');
})->name('contact');

Route::post('/iletisim', [App\Http\Controllers\ContactController::class, 'submit'])->name('contact.submit');

Route::get('/kvkk', [App\Http\Controllers\PageController::class, 'kvkk'])->name('page.kvkk');
Route::get('/yasal-uyari', [App\Http\Controllers\PageController::class, 'terms'])->name('page.terms');
