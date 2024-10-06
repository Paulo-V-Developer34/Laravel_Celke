<?php

use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//criando a rota dos cursos
// Route::get('/nomerota',[nomecontroller::class, nomemetodo])
Route::get('/index-course', [CourseController::class, 'index']);
