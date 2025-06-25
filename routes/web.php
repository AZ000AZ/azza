<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KirtasiyeController;

Route::get('/getir', [KirtasiyeController::class, 'create'])->name('kirtasiye.create');
Route::post('/getir', [KirtasiyeController::class, 'store'])->name('kirtasiye.store');
Route::get('/urunler', [KirtasiyeController::class, 'index'])->name('urunler.index');
Route::delete('/urunler/{id}', [KirtasiyeController::class, 'destroy'])->name('kirtasiye.destroy');
Route::get('/urunler/{id}/edit', [KirtasiyeController::class, 'edit'])->name('kirtasiye.edit');
Route::put('/urunler/{id}', [KirtasiyeController::class, 'update'])->name('kirtasiye.update');

// Sayfalar
Route::get('/giris', fn () => view('giris'));
Route::get('/hakkimizda', fn () => view('hakkimizda'));
Route::get('/iletisimBilgileri', fn () => view('iletisimBilgileri'));
Route::get('/sepetim', fn () => view('sepetim'));
Route::get('/test', fn () => view('test'));
Route::get('/anasayfa', fn () => view('anasayfa'));


