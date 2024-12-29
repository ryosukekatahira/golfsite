<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TopController;

Route::group(['prefix' => 'usr', 'as' => 'usr.'], function() {
    Route::get('/', [TopController::class, 'index'])->name('index');
});
