<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venda_produto extends Model
{
    use HasFactory;
    // protected $table = nome correto da tabela no banco

    protected $fillable = [
        'user_id',
        'status_id',
    ];
}
