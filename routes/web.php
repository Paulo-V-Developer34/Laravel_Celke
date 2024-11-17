<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//criando a rota dos cursos
// Route::get('/nomerota',[nomecontroller::class, nomemetodo])
Route::get('/', [UserController::class, 'index'])->name('user.index');
Route::post('user-import', [UserController::class], 'import')->name('user.import');
