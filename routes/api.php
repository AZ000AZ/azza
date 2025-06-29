<?php
use App\Http\Controllers\UrunlerController;

use App\Http\Controllers\UrunlerController;

Route::post('/urunler', [UrunlerController::class, 'store']);
Route::put('/urunler/{id}', [UrunlerController::class, 'update']);
Route::delete('/urunler/{id}', [UrunlerController::class, 'destroy']);
