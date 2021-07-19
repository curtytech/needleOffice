@extends('layouts.main')

@section('title', 'Serviços Create')

@section('content')

<div class="container">
    <h2 class="font mb-3 mt-4">Adicionar Pedido </h2>

    <form action="{{ route('salvarServico') }}" method="post">
        @csrf
        <div class="row">
            <h5 class="font mb-3 mt-2"> Dados do Cliente </h5>
            <div class="col-9">
                <label class="form-label">Nome do Cliente:</label>
                <input type="text" class="form-control" id="nomeCliente" name="nomeCliente" placeholder="" value="" required>
            </div>
            <div class="col-3">
                <label class="form-label ">Telefone:</label>
                <input type="text" class="cel form-control" id="telefoneCliente" name="telefoneCliente" placeholder="" value="">
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-sm-6 ">
                <label class="form-label">Data do Pedido</label>
                <input type="date" class="form-control" id="dataPedido" name="dataPedido" placeholder="" value="">
            </div>

            <div class="col-sm-6">
                <label class="form-label">Data da Entrega</label>
                <input type="date" class="form-control" id="dataEntrega" name="dataEntrega" placeholder="" value="">
            </div>
        </div>

        <hr class="my-4">

        <div id="dadosDoServico" class="row">
            <h5 class="font mb-3 "> Dados dos Serviços </h5>

            <div class="col-md-3">
                <label class="form-label">Serviço:</label>
                <input type="text" class="form-control" id="servico" name="servico" placeholder="">
            </div>

            <div class="col-md-3">
                <label class="form-label">Descrição do Serviço:</label>
                <input type="text" class="form-control" id="descServico" name="descServico" placeholder="">
            </div>

            <div class="col-md-3">
                <label class="form-label">Quantidade do Serviço:</label>
                <input type="number" class="form-control" id="qtdServico" name="qtdServico" placeholder="">
            </div>

            <div class="col-md-3">
                <label class="form-label">Valor do Serviço:</label>
                <div class="input-group col-3">
                    <span class="input-group-text" id="basic-addon1">R$:</span>
                    <input type="text" class="moeda form-control" id="valServico" name="valServico" placeholder="">
                </div>
            </div>
        </div>

        <!-- <div class="row mt-4">
            <div class="col-4"> </div>
            <div class="col-4 d-grid gap-2"> <input type="button" id="addServico" class=" btn btn-primary btn-sm" value="Adicionar mais serviços " > </div>
            <div class="col-4 d-grid gap-2"> <input type="button" id="removeServico" class=" btn btn-primary btn-sm" value="Remover serviços " > </div>

        </div> -->

        <div class="row  mt-3">
            <div class="col-6 d-grid gap-2">
                <label class="form-label"></label>
                <input type="button" id="addServico" class=" btn btn-primary btn-sm" value="Adicionar mais serviços ">
            </div>
            <div class="col-3 d-grid gap-2"> <label class="form-label"></label>
                <input type="button" id="removeServico" class=" btn btn-danger btn-sm" value="Remover serviços ">
            </div>
            <div class="col-md-3">
                <label class="form-label">Valor Total de Serviços:</label>

                <div class="input-group col-3">
                    <span class="input-group-text" id="basic-addon1">R$:</span>
                    <input type="text" class="form-control" id="valTotalServico" name="valTotalServico" placeholder="">
                </div>

            </div>
        </div>

        <hr class="my-4">

        <div class="row" id="dadosDoMaterial">
            <h5 class="font mb-3"> Dados dos Materiais </h5>

            <div class="col-md-3">
                <label class="form-label">Material:</label>
                <input type="text" class="form-control" id="material" name="material" placeholder="">
            </div>

            <div class="col-md-3">
                <label class="form-label">Quantidade do Material:</label>
                <input type="number" class="form-control" id="qtdMaterial" name="qtdMaterial" placeholder="">
            </div>

            <div class="col-md-3">
                <label class="form-label">Valor Unitario:</label>

                <div class="input-group col-3">
                    <span class="input-group-text" id="basic-addon1">R$:</span>
                    <input type="text" class="moeda form-control" id="valUnitarioMaterial" name="valUnitarioMaterial" placeholder="">
                </div>
            </div>

            <div class="col-md-3">
                <label class="form-label">Valor Total do Material:</label>

                <div class="input-group col-3">
                    <span class="input-group-text" id="basic-addon1">R$:</span>
                    <input type="text" class="moeda form-control" id="valTotalMaterial" name="valTotalMaterial" placeholder="">
                </div>
            </div>
        </div>

        <div class="row  mt-3">
            <div class="col-6 d-grid gap-2">
                <label class="form-label"></label>
                <input type="button" id="addMaterial" class=" btn btn-primary btn-sm" value="Adicionar mais material ">
            </div>
            <div class="col-3 d-grid gap-2">
                <label class="form-label"></label>
                <input type="button" id="removeMaterial" class=" btn btn-danger btn-sm" value="Remover material">
            </div>

            <div class="col-md-3">
                <label class="form-label">Valor Total dos Materiais:</label>

                <div class="input-group col-3">
                    <span class="input-group-text" id="basic-addon1">R$:</span>
                    <input type="text" class="form-control" id="valTotalTodosMateriais" name="valTotalTodosMateriais" placeholder="">
                </div>
            </div>
        </div>

        <hr class="my-4">

        <div class="row mb-3 ">
            <h5 class="font mb-3 "> Dados do Financeiros </h5>
            <div class="col-md-3">
                <label class="form-label">Sinal:</label>
                <div class="input-group col-3">
                    <span class="input-group-text" id="basic-addon1">R$:</span>
                    <input type="text" class="moeda form-control" id="sinal" name="sinal" placeholder="">
                </div>
            </div>

            <div class="col-md-3">
                <label class="form-label">Restante:</label>
                <div class="input-group col-3">
                    <span class="input-group-text" id="basic-addon1">R$:</span>
                    <input type="text" class="moeda form-control" id="restante" name="restante" placeholder="">
                </div>
            </div>

            <div class="col-md-3">
                <label class="form-label">Frete:</label>
                <div class="input-group col-3">
                    <span class="input-group-text" id="basic-addon1">R$:</span>
                    <input type="text" class="moeda form-control" id="frete" name="frete" placeholder="">
                </div>
            </div>

            <div class="col-md-3">
                <label class="form-label">Total:</label>
                <div class="input-group col-3">
                    <span class="input-group-text" id="basic-addon1">R$:</span>
                    <input type="text" class="moeda form-control" id="valTotalServicoEMaterial" name="valTotalServicoEMaterial" placeholder="">
                </div>
            </div>
        </div>
        <div class="my-2 row">
            <div class="col-md-3"> </div>
            <div class="col-md-3"> </div>
            <div class="col-md-3"> </div>
            <div class="col-md-3 row">
                <button class="float-right btn btn-primary" type=" submit">Salvar</button>
            </div>
        </div>
    </form>

</div>



@endsection