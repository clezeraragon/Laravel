<?php
/**
 * Created by PhpStorm.
 * User: Ramos
 * Date: 15/10/2014
 * Time: 16:45
 */
class EdukeeController extends BaseController{

    public function edukee()
    {

        $dados = array(
            'nome' => 'cleber araogn ramos',
            'descrisao' => 'xbox one',
            'valor' => '2000'
        );

        $produto = new produto($dados);
//        dd($produto);
        $produto->save();

        /*$produto = new produto();
        $produto->nome = 'clezer';
        $produto->descrisao = 'bicicleta';
        $produto->valor = 5000;
        $produto->save();*/
    }

}