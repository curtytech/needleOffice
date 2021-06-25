<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicos extends Model
{
    use HasFactory;
    // protected $fillable = ['isbn', 'nome', 'autor', 'preco'];
    protected $fillable = [
        'nomeCliente',
        'telefoneCliente',
        'dataPedido',
        'dateEntrega',
        'servico',
        'qtdServico',
        'descServico',
        'valServico',
        'valTotalServico',
        'material',
        'qtdMaterial',
        'valUnitarioMaterial',
        'valTotalMaterial',
        'valTotalTodosMateriais',
        'sinal',
        'restante',
        'frete',
        'valTotalServicoEMaterial'
    ];
}
