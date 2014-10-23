<?php
/**
 * Created by PhpStorm.
 * User: Ramos
 * Date: 16/10/2014
 * Time: 14:21
 */

class ProdutoTableSeeder extends Seeder {

    public function run(){

        $dados = array(
            'nome' => 'cleber araogn ramos',
            'descrisao' => 'xbox one',
            'valor' => '2000'
        );

        $produto = new produto($dados);
//        dd($produto);
        $produto->save();
    }
}