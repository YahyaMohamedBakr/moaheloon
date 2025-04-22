<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\ValidationException;
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
    try {
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        // إرسال الإيميل
        Mail::raw("الاسم: {$validated['name']}\nالبريد: {$validated['email']}\nالموضوع: {$validated['subject']}\nالرسالة: {$validated['message']}", function ($message) use ($validated) {
            $message->to(['info@moaheloon.com', 'y.bakr1010@gmail.com'])
                    ->subject('رسالة جديدة من نموذج الاتصال');
        });

        

        return response()->json(['message' => 'تم الإرسال بنجاح!']);

    } catch (ValidationException $e) {
        return response()->json([
            'message' => 'البيانات غير صالحة',
            'errors' => $e->errors()
        ], 422);
    } catch (\Exception $e) {
        // تسجيل الخطأ في اللوج
        \Log::error($e->getMessage());

        return response()->json([
            'message' => 'حدث خطأ غير متوقع، يرجى المحاولة لاحقًا.'
        ], 500);
    }
})->name('contact');
    


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
