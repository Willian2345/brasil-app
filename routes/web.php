<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JogadorController;
use App\Http\Controllers\TituloController;


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

Route::get('/',[HomeController::class,'MostrarHome'])->name('home');
Route::get('/cadastrar-jogador',[JogadorController::class,'FormularioCadastro'])->name('cadastrar-jogador');
Route::post('/cadastrar-jogador',[JogadorController::class,'SalvarBanco'])->name('salvar-banco');
Route::get('/editar-jogador',[JogadorController::class,'MostrarEditarJogador'])->name('editar-jogador');
Route::delete('/editar-jogador/{registrosJogadores}',[JogadorController::class,'ApagaBanco'])->name('apagar-jogador');
Route::put('/editar-jogador/{registrosJogadores}',[JogadorController::class,'AlterarBancoJogador'])->name('alterar-banco');
Route::get('/alterar-jogador/{registrosJogadores}',[JogadorController::class,'MostrarAlterarJogador'])->name('alterar-jogador');
Route::get('/1958',[TituloController::class,'MostrarTitulo1958'])->name('1958');
Route::get('/1962',[TituloController::class,'MostrarTitulo1962'])->name('1962');
Route::get('/1970',[TituloController::class,'MostrarTitulo1970'])->name('1970');
Route::get('/1994',[TituloController::class,'MostrarTitulo1994'])->name('1994');
Route::get('/2002',[TituloController::class,'MostrarTitulo2002'])->name('2002');
Route::get('/2022',[TituloController::class,'MostrarTitulo2022'])->name('2022');

