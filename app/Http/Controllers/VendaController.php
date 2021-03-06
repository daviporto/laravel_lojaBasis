<?php

namespace App\Http\Controllers;

use App\Models\Venda;
use Illuminate\Http\Request;

class VendaController extends Controller
{
    function __construct(Venda $venda)
    {
        $this->vendaModel = $venda;
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->vendaModel->getPedidos();
    }

    public function meusPedidos()
    {
        return Venda::getPedidos();
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
        return Venda::finalizarCompra($request->all());
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
