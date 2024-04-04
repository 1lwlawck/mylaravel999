<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;

Route::get('/guest', [GuestController::class, 'index']);
Route::post('/guest/insert', [GuestController::class, 'insert']);
Route::put('/guest/update', [GuestController::class, 'update']);
Route::delete('/guest/delete', [GuestController::class, 'delete']);


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // you can cal the view here .
    return view('welcome');
});


Route::get('/greeting', function () {
    // you can write your logic
    // however, this is not the best practice
    $str = '';
    for ($i = 1; $i <= 10; $i++) {
        $str .= $i;
    }
    return 'Hello My Name Is $ONDO  ' . $str;
});

use App\Http\Controllers\UserController;

Route::get(
    '/user/{name}/{year}', //THIS IS THE PATH 
    [
        UserController::class, //this is the controller
        'show' //this is the name of the function in controller
    ]
);