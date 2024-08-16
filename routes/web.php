<?php

use App\Http\Controllers\mainController;
use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', [mainController::class, 'index'])->name('home');
Route::get('/faq', [mainController::class, 'faq'])->name('faq');
