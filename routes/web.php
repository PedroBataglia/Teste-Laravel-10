<?php

use App\Http\Controllers\Admin\SupportController;
use App\Http\Controllers\Admin\Painel\RecursosHumanos\Comunicados\ComunicadosController;
use App\Http\Controllers\Site\SiteController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'projeto-1'], function() {
    Route::get('/forum', [SupportController::class, 'index'])->name('supports.index');
    Route::get('/support/create', [SupportController::class, 'create'])->name('supports.create');

});


Route::get('/contato', [siteController::class, 'contact']);

Route::group(['prefix' => 'painel'], function() {

    Route::group(['prefix' => 'recursos_humanos', 'namespace' => 'Admin'], function() {

        Route::get('/comunicados', [ComunicadosController::class, 'index'])->name('comunicados.index');
        Route::get('/comunicados/{id}/publish', [ComunicadosController::class, 'index'])->name('painel.recursos_humanos.comunicados.publish');
        Route::get('/comunicados/{id}/delete', [ComunicadosController::class, 'destroy'])->name('painel.recursos_humanos.comunicados.delete');
        Route::get('/comunicados/reprove', [ComunicadosController::class, 'reprove'])->name('painel.recursos_humanos.comunicados.reprove');
    });

});

Route::get('/users', [UserController::class, 'index'])->name('users.index');

Route::get('/', function () {
    return view('welcome');
});
