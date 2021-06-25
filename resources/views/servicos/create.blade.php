@extends('layouts.main')

@section('title', 'Serviços Create')

@section('content')

<div class="container">
    <h3 class="mb-3 mt-3">Adicionar Pedido </h3>

    <form action="{{ route('salvarServico') }}" method="post">
        @csrf
        <div class="row">
            <h5 class="mb-3 mt-3"> Dados do Cliente </h5>
            <div class="col-9">
                <label class="form-label">Nome do Cliente:</label>
                <input type="text" class="form-control" id="nomeCliente" name="nomeCliente" placeholder="" value="" required>
            </div>
            <div class="col-3">
                <label class="form-label">Telefone:</label>
                <input type="text" class="form-control" id="telefoneCliente" name="telefoneCliente" placeholder="" value="">
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <label class="form-label">Data do Pedido</label>
                <input type="text" class="form-control" id="dataPedido" name="dataPedido" placeholder="" value="">
            </div>

            <div class="col-sm-6">
                <label class="form-label">Data da Entrega</label>
                <input type="text" class="form-control" id="dataEntrega" name="dataEntrega" placeholder="" value="">
            </div>
        </div>

        <hr class="my-4">

        <div class="row">
            <h5 class="mb-3 mt-3"> Dados do Serviço </h5>

            <div class="col-md-3">
                <label class="form-label">Serviço:</label>
                <input type="text" class="form-control" id="servico" name="dataEntrega" placeholder="" >
            </div>

            <div class="col-md-3">
                <label class="form-label">Descrição do Serviço:</label>
                <input type="text" class="form-control" id="descServico" name="descServico" placeholder="" >
            </div>

            <div class="col-md-3">
                <label class="form-label">Quantidade do Serviço:</label>
                <input type="number" class="form-control" id="qtdServico" name="qtdServico" placeholder="" >
            </div>

            <div class="col-md-3">
                <label class="form-label">Valor Total:</label>
                <input type="text" class="form-control" id="valServico" name="valServico" placeholder="" >
            </div>
        </div>

        <div class="row  mt-3">
            <div class="col-md-3"> </div>
            <div class="col-md-3"> </div>
            <div class="col-md-3"> </div>

            <div class="col-md-3">
                <label class="form-label">Valor Total de Serviços:</label>
                <input type="text" class="form-control" id="valTotalServico" name="valTotalServico" placeholder="" >
            </div>
        </div>

        <hr class="my-4">

        <div class="row">
            <h5 class="mb-3 mt-3"> Dados dos Materiais </h5>

            <div class="col-md-3">
                <label class="form-label">Material:</label>
                <input type="text" class="form-control" id="material" name="material" placeholder="" >
            </div>

            <div class="col-md-3">
                <label class="form-label">Quantidade do Material:</label>
                <input type="number" class="form-control" id="qtdMaterial" name="qtdMaterial" placeholder="" >
            </div>

            <div class="col-md-3">
                <label class="form-label">Valor Unitario:</label>
                <input type="text" class="form-control" id="valUnitarioMaterial" name="valUnitarioMaterial" placeholder="" >
            </div>

            <div class="col-md-3">
                <label class="form-label">Valor Total do Material:</label>
                <input type="text" class="form-control" id="valTotalMaterial" name="valTotalMaterial" placeholder="" >
            </div>
        </div>

        <div class="row  mt-3">
            <div class="col-md-3"> </div>
            <div class="col-md-3"> </div>
            <div class="col-md-3"> </div>

            <div class="col-md-3">
                <label class="form-label">Valor Total de Materiais:</label>
                <input type="text" class="form-control" id="valTotalTodosMateriais" name="valTotalTodosMateriais" placeholder="" >
            </div>
        </div>

        <hr class="my-4">

        <div class="row mb-3 ">
            <h5 class="mb-3 mt-3"> Dados do Financeiros </h5>
            <div class="col-md-3">
                <label class="form-label">Sinal:</label>
                <input type="text" class="form-control" id="sinal" name="sinal" placeholder="" >
            </div>

            <div class="col-md-3">
                <label class="form-label">Restante:</label>
                <input type="text" class="form-control" id="restante" name="restante" placeholder="" >
            </div>

            <div class="col-md-3">
                <label class="form-label">Frete:</label>
                <input type="text" class="form-control" id="frete" name="frete" placeholder="" >
            </div>

            <div class="col-md-3">
                <label class="form-label">Total:</label>
                <input type="text" class="form-control" id="valTotalServicoEMaterial" name="valTotalServicoEMaterial" placeholder="" >
            </div>
        </div>
        <button type="submit">Salvar</button>

    </form>

</div>

@endsection