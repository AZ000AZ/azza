 <?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UrunlerController;

Route::get('/urunler', [UrunlerController::class, 'index']);
Route::get('/urunler/{id}', [UrunlerController::class, 'show']);
Route::post('/urunler', [UrunlerController::class, 'store']);
Route::put('/urunler/{id}', [UrunlerController::class, 'update']);
Route::delete('/urunler/{id}', [UrunlerController::class, 'destroy']);

 Route::get('/denemeapi', function() {
     return response()->json(['status' => 'api route çalışıyor']);
 });
