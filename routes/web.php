<?php

use Illuminate\Support\Facades\Route;

Route::get('/urunler', [\App\Http\Controllers\KirtasiyeController::class,'index']);








Route::get('/giris', function () {
    return view('giris');
});
Route::get('/hakkimizda', function () {
    return view('hakkimizda');
});
Route::get('/iletisimBilgileri', function () {
    return view('iletisimBilgileri');
});
Route::get('/sepetim', function () {
    return view('sepetim');
});
Route::get('/test', function () {
    return view('test');
});
// routes/web.php
Route::post('/sepete-ekle', function (Illuminate\Http\Request $request) {
    $urun = $request->only(['urun', 'fiyat', 'resim']);
    $sepet = session()->get('sepet', []);
    $sepet[] = $urun;
    session()->put('sepet', $sepet);
    return redirect('/urunler')->with('success', 'Ürün sepete eklendi!');
});

Route::get('/sepet', function () {
    $sepet = session()->get('sepet', []);
    return view('sepet', compact('sepet'));
});


