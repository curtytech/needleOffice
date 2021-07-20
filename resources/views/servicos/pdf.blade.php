<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nota do Serviço</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

    <style>
        label {
            font-weight: bold
        }

        .mt-3 {
            margin-top: 20px;
        }

        .meio {
            margin-left: 200px;
        }

        .border {
            border: 2px solid black;
            border-collapse: collapse;
        }

        .text-right {
            text-align: right;
            margin-right: 200px;
        }

        #conteudo-left {
            width: 350px;
            height: auto;
            float: left;
        }

        #conteudo-right {
            width: 350px;
            height: auto;
            float: left;
        }
    </style>
</head>

<body>

    <h1> Nota do Serviço </h1>

    <h3> Dados do Cliente </h3>

    <div>
        <div id="conteudo-left">
            <p> <strong> Nome do Cliente: </strong> {{ $servicos->nomeCliente}}</p>
            <p> <strong> Data de Pedido: </strong> {{ $servicos->dataPedido}}</p>
            <hr>
        </div>

        <div id="conteudo-right">
            <p> <strong> Telefone: </strong> {{ $servicos->telefoneCliente}}</p>
            <p> <strong> Data de Entrega: </strong> {{ $servicos->dataEntrega}}</p>
            <hr>
        </div>
    </div>
    
    <br>
    <div class="mt-3  ">
    
        <h3> Dados do Serviços </h3>
        <table class="border" style="width: 100%;">
            <tr>
                <th class="border"><label>Serviço: </label></th>
                <th class="border"><label>Quantidade: </label></th>
                <th class="border"><label>Descrição: </label></th>
                <th class="border"><label>Valor: </label></th>
            </tr>
            <tr>
                <th class="border">{{ $servicos->servico[0]}} </th>
                <th class="border">{{ $servicos->qtdServico[0]}} </th>
                <th class="border">{{ $servicos->descServico[0]}} </th>
                <th class="border">{{ $servicos->valServico[0]}} </th>
            </tr>
            
        </table>
    </div>

    <div class="mt-3">
        <table class="border" style="width: 100%;">
            <tr>
                <th><label>Total: </label></th>
                <th class="border">{{ $servicos->valTotalServico}}</th>
            </tr>
        </table>
    </div>

    <hr class="mt-3 ">

    <h3> Dados do Financeiros </h3>

    <div class="mt-3 ">
        <table class="border" style="width: 100%;">
            <tr>
                <th class="border"><label>Sinal: </label></th>
                <th class="border"><label>Restante: </label></th>
                <th class="border"><label>Frete: </label></th>
                <th class="border"><label>Valor Total: </label></th>
            </tr>
            <tr>
                <th class="border">{{ $servicos->sinal}}</th>
                <th class="border">{{ $servicos->restante}}</th>
                <th class="border">{{ $servicos->frete}}</th>
                <th class="border">{{ $servicos->valTotalServicoEMaterial}}</th>
            </tr>
        </table>
    </div>

</body>

</html>