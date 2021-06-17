<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;
use App\Models\Produto;
use App\Models\Venda;
use App\Models\Status;


class ProdutoVenda extends Model
{
    use HasFactory;
    protected $table = 'venda_produtos';
    protected $fillable = [
        'produto_id',
        'venda_id'
    ];

     /**
     *
     * @return HasMany
     * @var array
     */
    public function getPedidos()
    {
        return DB::table('venda_produtos as pv')
            ->join('produtos as p', 'pv.produto_id', '=', 'p.id')
            ->join('vendas as v', 'pv.produto_id', '=', 'v.id')
            ->get();

        // return $this->belongsToMany(Produto::class, ProdutoVenda::class, 'deleted_at')
        //                         ->wherePivotNull('deleted_at')
        //                         ->get();
    
        // return $this->belongsToMany(Venda::class, ProdutoVenda::class, 'deleted_at')->get();

    }
}
