<?php
/**
 * Created by PhpStorm.
 * User: Ramos
 * Date: 21/10/2014
 * Time: 16:17
 */

class Venda extends Eloquent {


    protected $table = 'venda';
    protected $guarded = array('id'); // guarded -> campos que não podem receber dados do usuario verificar http://laravel.com/docs/4.2/eloquent#mass-assignment


public function produto () {
    // Especifica qual campo pegar na tabela pivo  :  '->withPivot('qtde');'

    return  $this->belongsToMany('Produto', 'venda_item')->withPivot('qtde');

}
}