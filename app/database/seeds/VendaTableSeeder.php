<?php
/**
 * Created by PhpStorm.
 * User: Ramos
 * Date: 16/10/2014
 * Time: 14:35
 */

class VendaTableSeeder extends Seeder {


    public function run(){

        $dados = array(
            'nome_cliente' => 'john Deve'
        );
        DB::table('venda')->insert($dados);

        $dados = array(
            'venda_id' => 7,
            'produto_id' => 2,
            'qtde' => 8

        );
        DB::table('venda_item')->insert($dados);
    }

}