<?php

namespace App\Http\Functions;

use Illuminate\Http\Request;
use App\Models\Servicos;


class Functions {

// Muda a data do formato Americano para o Brasileiro
function dataBrasileira($entrada)
{
    $data = explode('-', $entrada);
    $data = array_reverse($data);
    $data = implode('/', $data);

    return $data;
}

// Muda a data do formato Brasileiro para o Americano
function dataAmericana($entrada)
{
    $data = explode('/', $entrada);
    $data = array_reverse($data);
    $data = implode('-', $data);

    return $data;
}


// Troca todos os pontos por virgula
function moedaFront($entrada)
{
    $saida = str_replace(".", ",", "R$: " . $entrada);

    return $saida;
}


// Troca todos os pontos por virgula e excluir R$: 
function moedaBack($entrada) 
{
    $saida = str_replace(',', '.', $entrada);

    return $saida;
}

}