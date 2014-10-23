<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/*Route::get('/', function()
{
	return View::make('hello');
});*/


View::composer('produtos',function($view){

    $produtos = Produto::with('categoria')->get();
//    $produtos = array("nome" => 'clezer',"sobrenome" => 'aragon ramos');
//    dd($produtos);
    $view->with('produtos', $produtos);
});

Route::resource('categ', 'CategController'); # Acessa os recursos do controller
Route::resource('produto', 'ProdutoController'); # Acessa os recursos do controller
Route::controller('admin', 'Admin\IndexController'); # Acessa os recursos do controller
Route::controller('/', 'HomeController'); # Acessa as funções get do HomeController obs: para acessar as funções precisa ter o  ex: getProduto, getVendas e etc.
