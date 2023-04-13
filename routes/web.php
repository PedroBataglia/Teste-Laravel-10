<?php

use App\Http\Controllers\Admin\SupportController;
use App\Http\Controllers\Site\SiteController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/forum', [SupportController::class, 'index'])->name('supports.index');

Route::get('/contato', [siteController::class, 'contact']);

Route::group(['prefix' => 'painel'], function() {

    Route::group(['prefix' => 'recursos_humanos', 'namespace' => 'Admin'], function() {

        Route::get('/comunicados', [ComunicadosController::class, 'index'])->name('comunicados.index');
        Route::get('/comunicados/{id}/publish', [ComunicadosController::class, 'index'])->name('comunicados.publish');
    });

});

Route::get('/users', [UserController::class, 'index'])->name('users.index');

Route::get('/', function () {
    return view('welcome');
});
