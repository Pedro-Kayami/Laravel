<?php


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


Route::group(['middleware' => 'auth'], function () {

    Route::get(
        '/',
        ['as' => 'site.home', 'uses' => 'App\Http\Controllers\Site\HomeController@index']
    );

    Route::get(
        '/admin/cursos',
        ['as' => 'admin.cursos', 'uses' => 'App\Http\Controllers\Admin\CursoController@index']
    );

    Route::get(
        '/admin/cursos/adicionar',
        ['as' => 'admin.cursos.adicionar', 'uses' => 'App\Http\Controllers\Admin\CursoController@adicionar']
    );

    Route::post(
        '/admin/cursos/salvar',
        ['as' => 'admin.cursos.salvar', 'uses' => 'App\Http\Controllers\Admin\CursoController@salvar']
    );

    Route::get(
        '/admin/cursos/editar/{id}',
        ['as' => 'admin.cursos.editar', 'uses' => 'App\Http\Controllers\Admin\CursoController@editar']
    );

    Route::put(
        '/admin/cursos/atualizar/{id}',
        ['as' => 'admin.cursos.atualizar', 'uses' => 'App\Http\Controllers\Admin\CursoController@atualizar']
    );

    Route::get(
        '/admin/cursos/excluir/{id}',
        ['as' => 'admin.cursos.excluir', 'uses' => 'App\Http\Controllers\Admin\CursoController@excluir']
    );


    Route::get(
        '/alunos',
        ['as' => 'alunos', 'uses' => 'App\Http\Controllers\AlunoController@index']
    );

    Route::get(
        '/alunos/adicionar',
        ['as' => 'alunos.adicionar', 'uses' => 'App\Http\Controllers\AlunoController@adicionar']
    );

    Route::post(
        '/alunos/salvar',
        ['as' => 'alunos.salvar', 'uses' => 'App\Http\Controllers\AlunoController@salvar']
    );

    Route::get(
        '/alunos/editar/{id}',
        ['as' => 'alunos.editar', 'uses' => 'App\Http\Controllers\AlunoController@editar']
    );

    Route::put(
        '/alunos/atualizar/{id}',
        ['as' => 'alunos.atualizar', 'uses' => 'App\Http\Controllers\AlunoController@atualizar']
    );

    Route::get(
        '/alunos/excluir/{id}',
        ['as' => 'alunos.excluir', 'uses' => 'App\Http\Controllers\AlunoController@excluir']
    );
});

//Login
Route::get('/login', [
    'as' => 'site.login',
    'uses' => 'App\Http\Controllers\Site\LoginController@index'
]);
Route::get('/login/sair', [
    'as' => 'site.login.sair',
    'uses' => 'App\Http\Controllers\Site\LoginController@sair'
]);
Route::post('/login/entrar', [
    'as' => 'site.login.entrar',
    'uses' => 'App\Http\Controllers\Site\LoginController@entrar'
]);
