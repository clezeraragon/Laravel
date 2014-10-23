<?php

class HomeController extends BaseController
{

    protected  $layout = 'layouts.padrao'; # Aqui ele seta o layout definido seguindo o primeiro a pasta 'layouts' depois o nome 'padrao' ficando -> layouts.padrao


    /*
    |--------------------------------------------------------------------------
    | Para pradronizar utilizando um template
    |--------------------------------------------------------------------------
     * Para abstrair melhor colocar no basecontroller   ->  protected  $layout = 'layouts.padrao';
     * sendo assim ira ser aplicado em o template em tudo.
     *
     * */
    /*
    |--------------------------------------------------------------------------
    | Default Home Controller
    |--------------------------------------------------------------------------
    |
    | You may wish to use controllers instead of, or in addition to, Closure
    | based routes. That's great! Here is an example controller method to
    | get you started. To route to this controller, just add the route:
    |
    |	Route::get('/', 'HomeController@showWelcome');
    |
    */

    /*
  |--------------------------------------------------------------------------
  | Eloquente formas de inserir dados
  |--------------------------------------------------------------------------

        #  Dessa forma podemos inserir os dados diretamente sem a necessidade do 'NEW' e nem do $produto-save();
     *
        $dados = array('nome ' => 'Fernado aragon ramos', 'descrisao' => 'cadeira de madeira velha', 'valor' => 500);
        $produto = Produto::create($dados);
     *
    |-----------------------------------------------------------------------------------------------------------------
        # Dessa forma : $produto = new Produto()

       **  Podemos setar de uma forma dinamica os valores :
     *
         $produto->nome = 'Fernando';
         $produto->descrisao = 'teste';
         $produto->valor = 3000;
         $produto->save();
     *
    |------------------------------------------------------------------------------------------------------------------
  |--------------------------------------------------------------------------
  | Eloquente formas de atualizar dados
  |--------------------------------------------------------------------------
      *
        $produto = Produto::find(21);
        $produto->nome = 'Fernando aragon ramos';
        $produto->save();
      *
  |--------------------------------------------------------------------------
  | Eloquente formas de deletar
  |--------------------------------------------------------------------------
      *
        $produto = Produto::find(21);
        $produto->nome = 'Fernando aragon ramos';
        $produto->delete();
      *
     # observação para receber a quantidade de registros deletados basta colocar em uma variavel exe: $tesste = $produto->delete();
     # restaurar os deletados  ex: Produto::withTrashed()->where('id', 33)->restore(); o campo deleted_at = null novamente


    ---------------------------------------------------------------------------
    Metodo para exibir a query real
    ---------------------------------------------------------------------------
     $categoria->produtos()->where('valor','=',2000)->get();
     $querys = DB::getQueryLog();
     $last_query = end($querys);
     dd($last_query);
    ----------------------------------------------------------------------------
    para inserir um novo produto com a categoria na função getProduto
    ----------------------------------------------------------------------------
    $categoria = Categoria::find(1);
    $produto = new Produto(array('nome' => 'Nintendo Wii', 'descrisao' => 'Console da Nintendo', 'valor' => 1020));
    $categoria->produtos()->save($produto);
    return ;

  */

    public function getProdutos()
    {
   /*     foreach (Produto::with('categoria')->get() as $produto){ // executa uma query performatica pegando todos os produtos com categoria definida

//            $querys = DB::getQueryLog($produto->categoria);
//
//            dd($querys);
            if (isset($produto->categoria->nome) )
              echo $produto->categoria->nome;


        }*/




////        $produtos = DB::table('produto')->get();
//        $pro = Produto::find(2);
//        dd($pro->categoria->flag);
//
//        foreach ($pro as $produtos) {
//            echo $produtos->categoria; // Aqui ele está apontando para a função categoria executando o metodo belongsTo
//        }
      $this->layout->content  = View::make('produtos');
   #     |---------------------------------------------------------------------------------------------------------------
//        $dados = array('nome' => 'Fernado', 'descrisao' => 'cadeira de madeira velha', 'valor' => 500);
//        $produto = Produto::create($dados);
//        $produto->nome = 'Fernando aragon ramos';
//         $produto->descrisao = 'teste';
//         $produto->valor = 3000;
//        $deleted = $produto->delete();

//        echo 'inserido com sucesso';
//        return;
    }

    public function getVenda(){
                                          // aqui segue a seguencia tabela produto depois tabela venda depois tabela venda_item
        $venda = Venda::find(6);

        $venda->produto()->attach(43, array('qtde'=>30)); // aqui ele insere valores na tabela venda 6 , produto 43 , venda_item qtde 30

//        foreach($venda->produto as $itens){ // pegar valores da tabela pivot
//            dd($itens->pivot->qtde);
//
//        }

    }

    public function getCategoria(){
//        dd(produtos());
        $categoria = Categoria::find(1);


        $categoria->produtos()->where('valor','=',2000)->get();
        $querys = DB::getQueryLog();
        $last_query = end($querys);
        dd($last_query);
       # foreach ($categoria->produtos()->where('valor','=',2000)->get() as $cat) Foreach com condicional clausula WHERE
        foreach ($categoria->produtos as $cat){
            print_r($cat);
        }
    }



    public function getVendas()
    {
//        $vendas = DB::table('venda_item')->where('produto_id', '=', 1)->delete();  // remover dados de uma tabela
//        $vendas = DB::table('venda_item')->insert(array('id'=> 1,'venda_id' => 6,'produto_id' => 1,'qtde' => 10) ); // inserir dados na tabela
        $vendas = DB::table('venda')->join('venda_item','venda_item.venda_id', '=', 'venda.id')->get();
        dd($vendas);
        echo 'cklezer';

    }


}
