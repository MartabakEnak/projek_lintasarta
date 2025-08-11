<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

// Route::get('/', function () {
//     return view('sites.index');
// });

Route::get('/', [SiteController::class, 'index']);
Route::resource('sites', SiteController::class);
