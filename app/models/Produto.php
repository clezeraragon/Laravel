<?php
/**
 * Created by PhpStorm.
 * User: Ramos
 * Date: 15/10/2014
 * Time: 16:35
 */
/*
    |--------------------------------------------------------------------------
    | mass-assignment
    |--------------------------------------------------------------------------
    |
    | Usado para definir quais campos serão protegidos ou inseridos e
    | passados para a model , muito utilizado para formulários.
    |
    |
    |	campos protegidos -> protected $guarded = array('id', 'password');
    |   campos especifcos que podem ser alterados -> protected $fillable = array('first_name', 'last_name', 'email');
   |--------------------------------------------------------------------------
    | mass-assignment  $produto = new Produto($dados);
    |--------------------------------------------------------------------------
       protected $fillable = array('nome','descrisao','valor');
    |--------------------------------------------------------------------------
     //quando se é passado os dados por $dados = array('nome ' => 'Fernado aragon ', 'descrisao' => 'cadeira de madeira', 'valor' => 500);
       caso os campos sejam setados dinamicamnete exemplo : $produto->nome, $produto->descrisao e etc. não precisamos do '$fillable'
     |--------------------------------------------------------------------------

 |--------------------------------------------------------------------------
  | Eloquente usando o Soft Deleting
  |--------------------------------------------------------------------------
    # caso seja necessario deletar um registro e manter seu registro a solução é usar 'Soft Deleting'
      para adicionar esse novo campo na tabela é necessario fazer um migrate:make + nome do arquivo referenciando a tabela que vai ter o novo campo + --table = nome da tabela.
      EX: php artisan migrate:make add_deleted_column_to_produto_table --table=produto
      ao criar o migrate colocar na função up() { $table->softDeletes(); } e no dow() { $table->dropColumn('deleted_at');} , não esquecer tambem de colocar no model :

      *   use SoftDeletingTrait;
          protected $dates = ['deleted_at'];
      *

    */

class Produto extends Eloquent
{


    protected $table = 'produto';
    protected $guarded = array('id'); // guarded -> campos que não podem receber dados do usuario verificar http://laravel.com/docs/4.2/eloquent#mass-assignment
//    protected $fillable = array('nome', 'descrisao', 'valor');
    use SoftDeletingTrait;
//    protected $dates = ['deleted_at'];

    public function categoria(){
//          echo 'teste  ';
        # Para pegarmos os valores devemos passar o segundo parametro que é a chave estrangeira ex : 'categoria_id', isso vai ser exibido na HomeController
          return $this->belongsTo('categoria', 'categorias_id');
//           return $this->belongsTo('categoria');
    }
}