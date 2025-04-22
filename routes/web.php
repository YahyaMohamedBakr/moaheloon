<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Request as HttpFoundationRequest;

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/about', function () {
    return view('about');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/contact', function () {
    return view('contact');
});
Route::post('/contact', function (Request $request) {
    $validated =  $request->validate([
        'name' => 'required|string',
        'email' => 'required|email',
        'subject' => 'required|string',
        'message' => 'required|string',
    ]);

   // dd($validated);
   Mail::raw("الاسم: {$validated['name']}\nالبريد: {$validated['email']}\nالموضوع: {$validated['subject']}\nالرسالة: {$validated['message']}", function ($message) use ($validated) {
    // إرسال إلى أكثر من عنوان
    $message->to(['info@moaheloon.com', 'y.bakr1010@gmail.com'])
            ->subject('رسالة من موقع مؤهلون');
});

    return response()->json(['message' => 'تم الإرسال بنجاح!']);
})->name('contact');
    


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
