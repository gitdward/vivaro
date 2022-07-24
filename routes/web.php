<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\MessageController;

Route::get('/', function () {
    return view('form');
});

Route::post('/message/send', [MessageController::class, 'send'])->name('message.send');
// Route::get('/message/response', [MessageController::class, 'response'])->name('message.response');
Route::get('/response')->name('response');
