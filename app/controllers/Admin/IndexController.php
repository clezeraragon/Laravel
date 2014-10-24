<?php
/**
 * Created by PhpStorm.
 * User: Ramos
 * Date: 23/10/2014
 * Time: 10:03
 */

namespace Admin;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Validator;
use View;
use Whoops\Example\Exception;


class IndexController extends BaseController
{
    function getIndex()
    {

        $this->layout->content = View::make('produtos');
    }

    function getNewproduto()
    {

        $categorias = \Categoria::all();
//        $categorias = $categorias->toArray(); # Aqui ele transforma o Json em um array
        $dadosCategoria = array();
        foreach ($categorias as $categoria) {
            $dadosCategoria[$categoria->id] = $categoria->nome;
        }
        $this->layout->content = View::make('admin.index')->with('categorias', $dadosCategoria);
    }

    function postNewproduto()
    {
        try {
            $produto = new \Produto(\Input::all());

            $validar = \Validator::make(\Input::all(), \Produto::$rules);
            if ($validar->fails()) {
                throw new \Exception("Falha na validação");
            }
            $produto->save();
        } catch (\Exception $e) {
            return Redirect::to('admin/newproduto')->withInput()->withErrors($validar);
        }
//        dd(\Input::all());
        return Redirect::to('admin');
    }

} 