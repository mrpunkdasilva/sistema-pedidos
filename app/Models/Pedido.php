<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $date = [
        'data_atual',
        'data_entrega'
    ];

    protected $fillable = [
        'cliente',
        'data_atual',
        'data_entrega',
        'descricao_servico'
    ];

    use HasFactory;
}
