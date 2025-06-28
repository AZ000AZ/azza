<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KirtasiyeController;
use App\Http\Controllers\ProfileController;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth'])->group(function () {

    Route::get('/getir', [KirtasiyeController::class, 'create'])->name('kirtasiye.create');
    Route::post('/getir', [KirtasiyeController::class, 'store'])->name('kirtasiye.store');
    Route::get('/urunler', [KirtasiyeController::class, 'index'])->name('urunler.index');
    Route::delete('/urunler/{id}', [KirtasiyeController::class, 'destroy'])->name('kirtasiye.destroy');
    Route::get('/urunler/{id}/edit', [KirtasiyeController::class, 'edit'])->name('kirtasiye.edit');
    Route::put('/urunler/{id}', [KirtasiyeController::class, 'update'])->name('kirtasiye.update');


    Route::get('/hakkimizda', fn () => view('hakkimizda'));
    Route::get('/iletisimBilgileri', fn () => view('iletisimBilgileri'));
    Route::get('/anasayfa', fn () => view('anaSayfa'));
    Route::get('/sepetim', fn () => view('sepetim'));
    Route::get('/test', fn () => view('test'));


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
