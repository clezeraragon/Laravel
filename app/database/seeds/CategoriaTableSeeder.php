<?php
/**
 * Created by PhpStorm.
 * User: Ramos
 * Date: 21/10/2014
 * Time: 13:17
 */

class CategoriaTableSeeder extends Seeder {


    public function run(){

        $dados = array(
            'id' => 1,
            'nome' => 'Console',
            'flag' => 'Console'
        );
        DB::table('categorias')->insert($dados);

//        $dados = array(
//            'venda_id' => 7,
//            'produto_id' => 2,
//            'qtde' => 8
//
//        );
//        DB::table('venda_item')->insert($dados);
    }

}