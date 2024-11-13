<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;


Route::get('/', function () {
    return response("hellpo");
});

Route::get('/csrf-token', function () {
    return response()->json(['token' => csrf_token()])->header('Access-Control-Allow-Origin', 'http://127.0.0.1:5501')
        ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS')
        ->header('Access-Control-Allow-Headers', 'Content-Type, Authorization, X-Requested-With');;
});


Route::get('items', [ItemController::class, 'index']);
Route::post('items', [ItemController::class, 'store'])->header('Access-Control-Allow-Origin', 'http://127.0.0.1:5501')
    ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS')
    ->header('Access-Control-Allow-Headers', 'Content-Type, Authorization, X-Requested-With');
Route::get('items/{id}', [ItemController::class, 'show']);
Route::put('items/{id}', [ItemController::class, 'update']);
Route::delete('items/{id}', [ItemController::class, 'destroy']);
