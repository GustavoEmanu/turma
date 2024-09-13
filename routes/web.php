<?php

use App\Http\Controllers\AlunosController;
use App\Http\Controllers\DisciplinasController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',function(){
    return view ('home');
});

route::get('/alunos', [AlunosController::class, 'index']);
route::get('/disciplinas', [DisciplinasController::class, 'index']);
