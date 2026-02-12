<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // E-posta gönderilecek adres (.env dosyasından alınabilir veya sabit yazılabilir)
        // Burada admin maili örnek olarak 'admin@example.com' verilmiştir.
        // Gerçek kullanımda config('mail.from.address') veya özel bir admin maili kullanılabilir.
        $adminEmail = 'info@abozelguvenlik.com'; // Veya config('mail.from.address')

        try {
            Mail::to($adminEmail)->send(new ContactFormMail($validatedData));
            return back()->with('success', 'Mesajınız başarıyla gönderildi. En kısa sürede size dönüş yapacağız.');
        } catch (\Exception $e) {
            // Loglama yapılabilir: \Log::error($e->getMessage());
            return back()->with('error', 'Mesaj gönderilirken bir hata oluştu. Lütfen daha sonra tekrar deneyiniz.');
        }
    }
}
