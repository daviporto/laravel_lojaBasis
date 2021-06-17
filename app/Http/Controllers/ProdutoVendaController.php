<?php

namespace App\Http\Controllers;

use App\Models\ProdutoVenda;
use Illuminate\Http\Request;

class ProdutoVendaController extends Controller
{
    function __construct(ProdutoVenda $produto)
    {
        $this->ProdutoVendaModel = $produto;
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->ProdutoVendaModel->getPedidos();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Venda  $Venda
     * @return \Illuminate\Http\Response
     */
    public function show(Venda $Venda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Venda  $Venda
     * @return \Illuminate\Http\Response
     */
    public function edit(Venda $Venda)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Venda  $Venda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Venda $Venda)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Venda  $Venda
     * @return \Illuminate\Http\Response
     */
    public function destroy(Venda $Venda)
    {
        //
    }
}
