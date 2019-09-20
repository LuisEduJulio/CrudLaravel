<?php

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

Route::get('/',['as'=>'site.home','uses'=>'HomeController@index']);
Route::get('/contato', ['uses'=>'ContatoController@index']);
Route::get('/sobre', ['uses'=>'SobreController@index']);


Route::get('/admin/cursos',['as'=>'admin.cursos','uses'=>'AdminCursoController@index']);
Route::get('/admin/cursos/adicionar',['as'=>'admin.cursos.adicionar','uses'=>'AdminCursoController@adicionar']);
Route::post('/admin/cursos/salvar',['as'=>'admin.cursos.salvar','uses'=>'AdminCursoController@salvar']);
Route::get('/admin/cursos/editar/{id}',['as'=>'admin.cursos.editar','uses'=>'AdminCursoController@editar']);
Route::put('/admin/cursos/atualizar/{id}',['as'=>'admin.cursos.atualizar','uses'=>'AdminCursoController@atualizar']);
Route::get('/admin/cursos/deletar/{id}',['as'=>'admin.cursos.deletar','uses'=>'AdminCursoController@deletar']);