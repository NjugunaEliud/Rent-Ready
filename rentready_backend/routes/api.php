<?php
use App\Http\Controllers\LandlordController;
use App\Http\Controllers\TenantController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\ImageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['prefix'=>'rentready'], function(){
    Route::apiResource('landlord', LandlordController::class);
});

Route::group(['prefix'=>'rentready'], function(){
    Route::apiResource('tenant', TenantController::class);
});

Route::group(['prefix'=>'rentready'], function(){
    Route::apiResource('property', PropertyController::class);
});

Route::group(['prefix' => 'rentready'], function () {
    Route::apiResource('images', ImageController::class);
});

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
