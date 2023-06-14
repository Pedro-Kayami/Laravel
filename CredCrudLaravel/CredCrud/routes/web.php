<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
});

Route::get(
    '/admin/aluno',
    ['as' => 'admin.aluno', 'uses' => 'App\Http\Controllers\Admin\AlunoController@index']
);
Route::get(
    '/admin/Alunos/adicionar',
    ['as' => 'admin.aluno.adicionar', 'uses' => 'App\Http\Controllers\Admin\AlunoController@adicionar']
);
Route::post(
    '/admin/Alunos/salvar',
    ['as' => 'admin.aluno.salvar', 'uses' => 'App\Http\Controllers\Admin\AlunoController@salvar']
);
Route::get(
    '/admin/Alunos/editar/{id}',
    ['as' => 'admin.aluno.editar', 'uses' => 'App\Http\Controllers\Admin\AlunoController@editar']
);
Route::put(
    '/admin/Alunos/atualizar/{id}',
    ['as' => 'admin.aluno.atualizar', 'uses' => 'App\Http\Controllers\Admin\AlunoController@atualizar']
);
Route::get(
    '/admin/Alunos/excluir/{id}',
    ['as' => 'admin.aluno.excluir', 'uses' => 'App\Http\Controllers\Admin\AlunoController@excluir']
);
