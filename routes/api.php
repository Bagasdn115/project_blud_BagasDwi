<?php

use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\PoliController;
use App\Http\Controllers\PasienController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('pendaftaran', PendaftaranController::class);
Route::post('pendaftaran', PendaftaranController::class);

Route::resource('poli', PoliController::class);
Route::post('poli', PoliController::class);

Route::resource('pasien', PasienController::class);
Route::post('pasien', PasienController::class);