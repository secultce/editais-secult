<?php

use App\Http\Controllers\RegistroController;
use App\Http\Controllers\SessaoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('editais');
})->middleware('auth');

Route::get('/editais', function () {
    return view('editais');
});

Route::get('/single', function () {
    return view('single');
});

Route::get('/equipamentos', function () {
    return view('equipamentos');
});

Route::get('/servico', function () {
    return view('servico');
});

Route::get('/cefic', function () {
    return view('cefic');
});

Route::get('/postagem', function () {
    return view('postagem');
});

Route::get('/listagem', function () {
    return view('listagem');
});

Route::get('/desativados', function () {
    return view('desativados');
});

Route::get('/anexos', function () {
    return view('anexos');
});

Route::get('/links', function () {
    return view('links');
});

Route::get('/registro',[RegistroController::class,'create'])
->middleware('guest')
->name('registro.index');

Route::get('/login',[SessaoController::class,'create'])
->middleware('guest')
->name('login.index');

Route::post('/login',[SessaoController::class,'store'])
->name('login.store');

Route::post('/registro',[RegistroController::class,'store'])
->name('registro.store');

Route::get('/logout',[SessaoController::class,'destroy'])
->middleware('auth')
->name('login.destroy');

