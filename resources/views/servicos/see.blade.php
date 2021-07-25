@extends('layouts.main')

@section('title', 'Ver Serviço')

@section('content')

<div class="container">
    <h3 class="mb-3 mt-3 font">Ver Serviço </h3>
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

        <div class="col-md-3 ">
            @foreach ($servicos->servico as $service)

            <div class=" wrapper mb-2">
                <label class="form-label">Serviço:</label>
                <input type="text" class="form-control" id="servico" name="servico" placeholder="" value="{{$service}}" readonly>
            </div>
            @endforeach
        </div>

        <div class="col-md-3">
            @foreach ($servicos->descServico as $descService)
            <div class=" wrapper mb-2">
                <label class="form-label">Descrição do Serviço:</label>
                <input type="text" class="form-control" id="servico" name="servico" placeholder="" value="{{$descService}}" readonly>
            </div>
            @endforeach
        </div>

        <div class="col-md-3">
            @foreach ($servicos->qtdServico as $qtdService)
            <div class=" wrapper mb-2">
                <label class="form-label">Quantidade do Serviço:</label>
                <input type="number" class="form-control" id="qtdServico" name="qtdServico" placeholder="" value="{{$qtdService}}" readonly>
            </div>
            @endforeach
        </div>

        <div class="col-md-3">
            @foreach ($servicos->valServico as $valService)
            <div class=" wrapper mb-2">
                <label class="form-label">Valor Total:</label>
                <div class="input-group mb-2 col-3">
                    <span class="input-group-text" id="basic-addon1">R$:</span>
                    <input type="text" class="form-control" id="valServico" name="valServico" value="{{$valService}}" readonly>
                </div>
            </div>
            @endforeach
        </div>

    </div>

    <div class="row  mt-3">
        <div class="col-md-3"> </div>
        <div class="col-md-3"> </div>
        <div class="col-md-3"> </div>

        <div class="col-md-3">
            <label class="form-label">Valor Total de Serviços:</label>
            <div class="input-group mb-2 col-3">
                <span class="input-group-text" id="basic-addon1">R$:</span>
                <input type="text" class="form-control" id="valTotalServico" name="valTotalServico" value="{{$servicos->valTotalServico}}" readonly>
            </div>
        </div>
    </div>

    <hr class="my-4">

    <div class="row">
        <h5 class="mb-3 mt-3"> Dados dos Materiais </h5>

        <div class="col-md-3 ">
            @foreach ($servicos->material as $material)
            <div class=" wrapper mb-2">
                <label class="form-label">Material:</label>
                <input class="form-control" id="material" name="material" value="{{$material}}" readonly>
            </div>
            @endforeach
        </div>

        <div class="col-md-3 ">
            @foreach ($servicos->qtdMaterial as $qtdMaterial)
            <div class=" wrapper mb-2">
                <label class="form-label">Quantidade do Material:</label>
                <input type="number" class="form-control" id="qtdMaterial" name="qtdMaterial" value="{{$qtdMaterial}}" readonly>
            </div>
            @endforeach
        </div>

        <div class="col-md-3 ">
            @foreach ($servicos->valUnitarioMaterial as $valUnitarioMaterial)
            <div class=" wrapper mb-2">
                <label class="form-label">Valor Unitario:</label>
                <div class="input-group col-3">
                <span class="input-group-text" id="basic-addon1">R$:</span>
                <input type="text" class="form-control" id="valUnitarioMaterial" name="valUnitarioMaterial" value="{{$valUnitarioMaterial}}" readonly>
            </div>
            </div>

            @endforeach
        </div>

        <div class="col-md-3 ">
            @foreach ($servicos->valTotalMaterial as $valTotalMaterial)
            <div class=" wrapper mb-2">
                <label class="form-label">Valor Total do Material:</label>
                <div class="input-group col-3">
                <span class="input-group-text" id="basic-addon1">R$:</span>
                <input type="text" class="form-control" id="valTotalMaterial" name="valTotalMaterial" value="{{$valTotalMaterial}}" readonly>
            </div>
            </div>

            @endforeach
        </div>

    </div>
    <div class="row  mt-3">
        <div class="col-md-3"> </div>
        <div class="col-md-3"> </div>
        <div class="col-md-3"> </div>

        <div class="col-md-3">
            <label class="form-label">Valor Total de Materiais:</label>
            <div class="input-group col-3">
                <span class="input-group-text" id="basic-addon1">R$:</span>
                <input type="text" class="form-control" id="valTotalTodosMateriais" name="valTotalTodosMateriais" value="{{$servicos->valTotalTodosMateriais}}" readonly>
            </div>
        </div>
    </div>

    <hr class="my-4">

    <div class="row mb-3 ">
        <h5 class="mb-3 mt-3"> Dados do Financeiros </h5>
        <div class="col-md-3">
            <label class="form-label">Sinal:</label>
            <input type="text" class="form-control" id="sinal" name="sinal" value="{{$servicos->sinal}}" readonly>
        </div>

        <div class="col-md-3">
            <label class="form-label">Restante:</label>
            <input type="text" class="form-control" id="restante" name="restante" value="{{$servicos->restante}}" readonly>
        </div>

        <div class="col-md-3">
            <label class="form-label">Frete:</label>
            <input type="text" class="form-control" id="frete" name="frete" value="{{$servicos->frete}}" readonly>
        </div>

        <div class="col-md-3">
            <label class="form-label">Total:</label>
            <input type="text" class="form-control" id="valTotalServicoEMaterial" name="valTotalServicoEMaterial" value="{{$servicos->valTotalServicoEMaterial}}" readonly>
        </div>
    </div>

</div>

@endsection