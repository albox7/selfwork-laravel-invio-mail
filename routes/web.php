<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contatti', [PublicController::class, 'Contatti'])->name('contatti');

Route::post('contatti/send', [PublicController::class, 'send_email'])->name('send_email');