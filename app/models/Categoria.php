<?php
/**
 * Created by PhpStorm.
 * User: Ramos
 * Date: 21/10/2014
 * Time: 13:31
 */
class Categoria extends Eloquent{

//    protected  $guarded = array('id');

    public function produtos(){
        // hasOne : ele vai retornar o primeiro registro que encontrar
        // hasMany : ele vai retornar todos os registros

        return $this->hasMany('Produto','categorias_id');
    }


}