<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicos extends Model
{
    use HasFactory;
    // protected $fillable = ['isbn', 'nome', 'autor', 'preco'];
    // fillable = Campos preenchiveis pelo usuario
    protected $fillable = [
        'nomeCliente',
        'telefoneCliente',
        // 'dataPedido',
        'dataEntrega',
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
