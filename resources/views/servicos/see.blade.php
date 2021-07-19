@extends('layouts.main')

@section('title', 'Ver Serviço')

@section('content')

<div class="container">
    <h3 class="mb-3 mt-3">Ver Serviço </h3>
        <div class="row">
            <h5 class="mb-3 mt-3"> Dados do Cliente </h5>
            <div class="col-9">
                <label class="form-label">Nome do Cliente:</label>
                <input type="text" class="form-control" id="nomeCliente" name="nomeCliente" placeholder="" value="{{$servicos->nomeCliente}}" readonly>
            </div>
            <div class="col-3">
                <label class="form-label">Telefone:</label>
                <input type="text" class="form-control" id="telefoneCliente" name="telefoneCliente" placeholder="" value="{{$servicos->telefoneCliente}}" readonly>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-sm-6">
                <label class="form-label">Data do Pedido</label>
                <input type="text" class="form-control" id="dataPedido" name="dataPedido" placeholder="" value="{{date('d/m/Y', strtotime($servicos->dataPedido))}}" readonly>
            </div>

            <div class="col-sm-6">
                <label class="form-label">Data da Entrega</label>
                <input type="text" class="form-control" id="dataEntrega" name="dataEntrega" placeholder="" value="{{date('d/m/Y', strtotime($servicos->dataEntrega))}}" readonly>
            </div>
        </div>

        <hr class="my-4">

        <div class="row">
            <h5 class="mb-3 mt-3"> Dados do Serviço </h5>

            <div class="col-md-3">
                <label class="form-label">Serviço:</label>
                <input type="text" class="form-control" id="servico" name="servico" placeholder="" value="{{$servicos->servico}}"readonly>
            </div>

            <div class="col-md-3">
                <label class="form-label">Descrição do Serviço:</label>
                <input type="text" class="form-control" id="descServico" name="descServico" placeholder="" value="{{$servicos->descServico}}"readonly>
            </div>

            <div class="col-md-3">
                <label class="form-label">Quantidade do Serviço:</label>
                <input type="number" class="form-control" id="qtdServico" name="qtdServico" placeholder="" value="{{$servicos->qtdServico}}"readonly>
            </div>

            <div class="col-md-3">
                <label class="form-label">Valor Total:</label>
                <input type="text" class="form-control" id="valServico" name="valServico" value="{{$servicos->valServico}}"readonly>
            </div>
        </div>

        <div class="row  mt-3">
            <div class="col-md-3"> </div>
            <div class="col-md-3"> </div>
            <div class="col-md-3"> </div>

            <div class="col-md-3">
                <label class="form-label">Valor Total de Serviços:</label>
                <input type="text" class="form-control" id="valTotalServico" name="valTotalServico" value="{{$servicos->valTotalServico}}" readonly>
            </div>
        </div>

        <hr class="my-4">

        <div class="row">
            <h5 class="mb-3 mt-3"> Dados dos Materiais </h5>
            
            <div class="col-md-3">
                <label class="form-label">Material:</label>
                <input type="text" class="form-control" id="material" name="material" value="{{$servicos->material}}"  readonly>
            </div>

            <div class="col-md-3">
                <label class="form-label">Quantidade do Material:</label>
                <input type="number" class="form-control" id="qtdMaterial" name="qtdMaterial" value="{{$servicos->qtdMaterial}}"  readonly>
            </div>

            <div class="col-md-3">
                <label class="form-label">Valor Unitario:</label>
                <input type="text" class="form-control" id="valUnitarioMaterial" name="valUnitarioMaterial" value="{{$servicos->valUnitarioMaterial}}"readonly >
            </div>

            <div class="col-md-3">
                <label class="form-label">Valor Total do Material:</label>
                <input type="text" class="form-control" id="valTotalMaterial" name="valTotalMaterial" value="{{$servicos->valUnitarioMaterial}}"readonly >
            </div>
        </div>

        <div class="row  mt-3">
            <div class="col-md-3"> </div>
            <div class="col-md-3"> </div>
            <div class="col-md-3"> </div>

            <div class="col-md-3">
                <label class="form-label">Valor Total de Materiais:</label>
                <input type="text" class="form-control" id="valTotalTodosMateriais" name="valTotalTodosMateriais" value="{{$servicos->valTotalTodosMateriais}}" readonly >
            </div>
        </div>

        <hr class="my-4">

        <div class="row mb-3 ">
            <h5 class="mb-3 mt-3"> Dados do Financeiros </h5>
            <div class="col-md-3">
                <label class="form-label">Sinal:</label>
                <input type="text" class="form-control" id="sinal" name="sinal" value="{{$servicos->sinal}}"  readonly>
            </div>

            <div class="col-md-3">
                <label class="form-label">Restante:</label>
                <input type="text" class="form-control" id="restante" name="restante" value="{{$servicos->restante}}" readonly>
            </div>

            <div class="col-md-3">
                <label class="form-label">Frete:</label>
                <input type="text" class="form-control" id="frete" name="frete" value="{{$servicos->frete}}"readonly >
            </div>

            <div class="col-md-3">
                <label class="form-label">Total:</label>
                <input type="text" class="form-control" id="valTotalServicoEMaterial" name="valTotalServicoEMaterial" value="{{$servicos->valTotalServicoEMaterial}}" readonly>
            </div>
        </div>
        
</div>

@endsection