<?php

use App\Http\Controllers\CardController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::controller(CardController::class)->group(function(){
    Route::get('/cards', 'index');
    Route::post('/cards', 'store');
    Route::put('/cards/{id}', 'update');
    Route::get('/cards/{id}', 'show');
    Route::delete('/cards/{id}', 'destroy');
});
