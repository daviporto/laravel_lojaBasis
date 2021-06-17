<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Venda extends Model
{
    use HasFactory;

    protected $fillable = [
        'pedido',
        'user_id',
        'status_id',
    ];

    static public function finalizarCompra($produtos)
    {
        DB::beginTransaction();

        try {

            $venda = Venda::create([
                    'pedido' => auth()->user()->id .  rand(1, 999),
                    'user_id' => auth()->user()->id,
                    'status_id' => 1
                ]);

            foreach($produtos as $produto) {
                ProdutoVenda::create([
                    'produto_id' => $produto['id'],
                    'venda_id' => $venda->id
                ]);
            }

        } catch (\Exception $ex) {
            DB::rollBack();
            return response()->json('Falha!' . $ex->getMessage()) ;
        } 
        
        DB::commit();
        return response()->json('Sucesso!');

    }

    static public function getPedidos()
    {

        return DB::table('venda_produtos as pv')
                    ->join('vendas as v', 'pv.venda_id', '=', 'v.id')
                    ->join('produtos as p', 'pv.produto_id', '=', 'p.id')
                    ->join('users as u', 'v.user_id', '=', 'u.id')
                    ->where('u.id', '=', auth()->user()->id)
                    // ->select(
                    //     'u.name as usuario',
                    //     'p.nome as produto',
                    //     'v.pedido'
                    // )
                    //TODO return just necessary 
                    ->get();
    }
}
