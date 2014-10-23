<?php

class ProdutoController extends \BaseController
{

    /*
     * Para criarmos uma classe nova de  controller devemos executar : php artisan controller:make ProdutoController
     *
     *
     *
     * */



    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        /*
         * Exibir os produtos
         * */
        $produto = Produto::all();
        return $produto;
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        /*
         * salvar os produtos pegando todos os inputs menos os reservados no : protected $fillable
         * */
        $produto = new Produto(Input::all());
        $produto->save();
        return $produto;

    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        /*
         * exibir o produto especifico passando o seu parametro id
         * */
        $produto = Produto::find($id);
        return $produto;
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        /*
         * Atualizar os produtos passando o id
         * Em seguida ele vai utilizar o metodo fill() para preencher os campos dos inputs
         * */
//        dd(Input::all());
        $produto = Produto::find($id);
        $produto->fill(Input::all());
        $produto->save();
        return $produto;
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        $produto = Produto::find($id);
        $produto->delete();
    }


}
