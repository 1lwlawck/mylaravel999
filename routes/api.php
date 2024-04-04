<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;

Route::get('/guest', [GuestController::class, 'index']);
Route::post('/guest/insert', [GuestController::class, 'insert']);
Route::put('/guest/update', [GuestController::class, 'update']);
Route::delete('/guest/delete', [GuestController::class, 'delete']);


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
