<?php

use App\Http\Controllers\Admin\{SupportController};
use App\Http\Controllers\Site\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/forum', [SupportController::class, 'index'])->name('supports.index');

Route::get('/contato', [siteController::class, 'contact']);

Route::get('/', function () {
    return view('welcome');
});
