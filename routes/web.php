<?php

use App\Http\Controllers\PostagensController;
use App\Http\Controllers\AnexosController;
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


Route::get('/equipamentos', function () 
{
    return view('equipamentos');
});

Route::get('/servico', function () 
{
    return view('servico');
});

Route::get('/cefic', function () 
{
    return view('cefic');
});

Route::get('/postagem', function () 
{
    return view('postagem');
})->middleware('auth');

Route::get('/editais', [PostagensController::class, 'listagemEditais'])
->name('postagens.editais');

Route::get('/desativados', function () 
{
    return view('desativados');
})->middleware('auth');

Route::get('/single/{id}',[PostagensController::class, 'paginaSimples'])
->name('postagens.simples');

Route::get('/desativar/{id}',[PostagensController::class, 'desativarEdital'])
->name('postagens.desativados');

Route::get('/ativar/{id}',[PostagensController::class, 'ativarEdital'])
->name('postagens.ativar');

Route::get('/desativados', [PostagensController::class, 'editaisDesativados'])
    ->middleware('auth')
    ->name('postagens.desativados');

Route::get('/anexo', function () 
{
    return view('anexo');
});

Route::get('/links/{id}', [AnexosController::class, 'exibirAnexos'])
->name('anexos.exibir')
->middleware('auth');

Route::get('/anexo', [AnexosController::class, 'getAnexo'])
->name('anexos.mostrarMudanca')
->middleware('auth');

Route::get('/registro', [RegistroController::class, 'create'])
    ->name('registro.index');

Route::get('/login', [SessaoController::class, 'create'])
    ->name('login.index');

Route::post('/login', [SessaoController::class, 'store'])
    ->name('login.store');

Route::post('/registro', [RegistroController::class, 'store'])
    ->name('registro.store')
    ->middleware('auth');

Route::get('/logout', [SessaoController::class, 'destroy'])
    ->middleware('auth')
    ->name('login.destroy');

Route::post('/inserir-postagem', [PostagensController::class, 'inserirPostagem'])
->name('postagem.inserirPostagem')
->middleware('auth');

Route::get('/atualizacao/{id}',[PostagensController::class, 'getDados'])
->name('postagem.editarEdital')
->middleware('auth');

Route::post('/alterar/{id}',[PostagensController::class, 'alterar'])
->name('postagem.alterar')
->middleware('auth');

Route::post('/inserir-links', [AnexosController::class, 'inserirLinks'])
->name('anexos.inserirLinks')
->middleware('auth');

Route::get('/anexo/{id}',[AnexosController::class, 'getAnexo'])
->name('anexo.mudarAnexo')
->middleware('auth');

Route::post('/alterarAnexo/{id}',[AnexosController::class, 'atualizaAnexos'])
->name('anexo.atualizaAnexos')
->middleware('auth');

Route::get('/buscar-postagem', [PostagensController::class, 'buscar'])
->name('postagem.buscar')
->middleware('auth');

 Route::get('/listagem', [PostagensController::class, 'buscar'])
->name('pesquisa.buscar')
->middleware('auth');

Route::get('/listagemDes', [PostagensController::class, 'buscarDesativados'])
->name('pesquisa.desativados')
->middleware('auth'); 


Route::post('/apagaAnexo/{$id}', [AnexosController::class, 'apagaAnexo'])
->name('anexo.apaga')
->middleware('auth'); 
