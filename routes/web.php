<?php

use App\Http\Controllers\PostagensController;
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

Route::get('/', [PostagensController::class, 'listagemEditais'])
->name('postagens.editais');


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
})->middleware('auth');

Route::get('/listagem', [PostagensController::class, 'listagem'])
->name('registro.listagem')
->middleware('auth');

Route::get('/editais', [PostagensController::class, 'listagemEditais'])
->name('postagens.editais');

Route::get('/desativados', function () {
    return view('desativados');
})->middleware('auth');

Route::get('/single/{id}',[PostagensController::class, 'paginaSimples'])
->name('postagens.simples');

//testes areas
Route::get('/desativados', [PostagensController::class, 'editaisDesativados'])
    ->middleware('auth')
    ->name('postagens.desativados');
//fim de testes


Route::get('/anexos', function () {
    return view('anexos');
});

Route::get('/links', function () {
    return view('links');
});

Route::get('/registro', [RegistroController::class, 'create'])
    ->name('registro.index');

Route::get('/login', [SessaoController::class, 'create'])
    ->name('login.index');

Route::post('/login', [SessaoController::class, 'store'])
    ->name('login.store');

Route::post('/registro', [RegistroController::class, 'store'])
    ->name('registro.store');

Route::get('/logout', [SessaoController::class, 'destroy'])
    ->middleware('auth')
    ->name('login.destroy');

Route::post('/inserir-postagem', [PostagensController::class, 'inserirPostagem'])
->name('postagem.inserirPostagem')
->middleware('auth');
