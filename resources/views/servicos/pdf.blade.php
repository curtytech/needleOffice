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




        t {}
    </style>
</head>

<body>

    <h1> Nota do Serviço </h1>


    @foreach ($servicos as $servico)


    <h3> Dados do Cliente </h3>
    <div style="display: inline;">
        <label>Nome do Cliente: </label>
        <t>{{ $servico->nomeCliente}}</t>
        <div class="text-right">
            <label>Telefone: </label>
            <t>{{ $servico->telefoneCliente}}</t>
        </div>
    </div>
    <div class="mt-3  ">
        <label class="text-right">Nome do Cliente: </label>
        <t class="text-right">{{ $servico->nomeCliente}}</t>
        <label style=" text-align: right;">Telefone: </label>
        <t style=" text-align: right;">{{ $servico->telefoneCliente}}</t>
        <table>
            <tr>
                <th>
                    <label>Data do Pedido: </label>
                    <t>{{ $servico->dataPedido}}</t>
                    <label>Data da Entrega: </label>
                    <t>{{ $servico->dateEntrega}}</t>
                </th>
            </tr>
        </table>
    </div>
    <div class="mt-3">

    </div>

    <hr class="mt-3 ">

    <h3> Dados do Serviços </h3>

    <div class="mt-3  ">
        <table class="border" style="width: 100%;">
            <tr>
                <th class="border"><label>Serviço: </label></th>
                <th class="border"><label>Quantidade: </label></th>
                <th class="border"><label>Descrição: </label></th>
                <th class="border"><label>Valor: </label></th>
            </tr>
            <tr>
                <th class="border">{{ $servico->servico}} </th>
                <th class="border">{{ $servico->qtdServico}} </th>
                <th class="border">{{ $servico->descServico}} </th>
                <th class="border">{{ $servico->valServico}} </th>
            </tr>
        </table>
    </div>

    <div class="mt-3">
        <table class="border" style="width: 100%;">
            <tr>
                <th><label>Total: </label></th>
                <th class="border">{{ $servico->valTotalServico}}</th>
            </tr>
        </table>
    </div>
    <!-- <p>{{ $servico->material}}</p>
    <p>{{ $servico->qtdMaterial}}</p>
    <p>{{ $servico->valUnitarioMaterial}}</p>
    <p>{{ $servico->valTotalMaterial}}</p>
    <p>{{ $servico->valTotalTodosMateriais}}</p> -->

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
                <th class="border">{{ $servico->sinal}}</th>
                <th class="border">{{ $servico->restante}}</th>
                <th class="border">{{ $servico->frete}}</th>
                <th class="border">{{ $servico->valTotalServicoEMaterial}}</th>
            </tr>
        </table>
    </div>


    @endforeach

</body>

</html>