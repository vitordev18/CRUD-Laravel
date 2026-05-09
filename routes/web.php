<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CursoController;

Route::get('/', [
    CursoController::class,
    'index']);

Route::get('/admin/cursos', [
    CursoController::class,
    'index'])->name('admin.cursos');

Route::get('/admin/cursos', [
    'as' => 'admin.cursos',
    'uses' => 'App\Http\Controllers\Admin\CursoController@index']);

Route::get('/admin/cursos/adicionar', [
    'as' => 'admin.cursos.adicionar',
    'uses' => 'App\Http\Controllers\Admin\CursoController@adicionar']);

Route::post('/admin/cursos/salvar', [
    'as' => 'admin.cursos.salvar',
    'uses' => 'App\Http\Controllers\Admin\CursoController@salvar']);

Route::post('/admin/cursos/editar/{id}', [
    'as' => 'admin.cursos.editar',
    'uses' => 'App\Http\Controllers\Admin\CursoController@editar']);

Route::post('/admin/cursos/atualizar/{id}', [
    'as' => 'admin.cursos.atualizar',
    'uses' => 'App\Http\Controllers\Admin\CursoController@atualizar']);

Route::post('/admin/cursos/excluir/{id}', [
    'as' => 'admin.cursos.excluir',
    'uses' => 'App\Http\Controllers\Admin\CursoController@excluir']);

Route::put('/admin/cursos/atualizar/{id}', [
    'as' => 'admin.cursos.atualizar',
    'uses' => 'App\Http\Controllers\Admin\CursoController@atualizar']);
