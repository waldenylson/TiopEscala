<?php

Route::get('/', 'HomeController@index');
Route::get('home', function()
{
    return redirect('/');
});

Route::group(['prefix' => 'graduacoes'], function()
{
    Route::get(''                , ['as' => 'graduacoes.index'  , 'uses' => 'GraduacoesController@index']);
    Route::get('cadastrar'       , ['as' => 'graduacoes.create' , 'uses' => 'GraduacoesController@create']);
    Route::post('salvar'         , ['as' => 'graduacoes.store'  , 'uses' => 'GraduacoesController@store']);
    Route::get('{id}/editar'     , ['as' => 'graduacoes.edit'   , 'uses' => 'GraduacoesController@edit']);
    Route::post('{id}/atualizar' , ['as' => 'graduacoes.update' , 'uses' => 'GraduacoesController@update']);
    Route::get('{id}/remover'    , ['as' => 'graduacoes.delete' , 'uses' => 'GraduacoesController@destroy']);
});
