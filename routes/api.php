<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\OrderController;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/deliverOrder' ,[DriverController::class,'deliverOrder_ok']);

Route::post('/makeOrder', [OrderController::class,'store']);
