@extends('layouts.main')

@section('title', 'Serviços Show')

@section('content')
<div class="container  mt-5 ">
    <h1 class=" font">Tabela de Serviços</h1>

    <a class="my-2 btn btn-primary" href="{{ route('createServico') }}"> Novo Serviço </a>
</div>
<div class="container mt-3">

    <table class="table table-hover table-striped border border-dark rounded" id="dataTable">
        <thead class="bg-dark text-light">
            <tr>
                <th class="text-center">Cliente:</th>
                <th class="disableMobile text-center">Telefone:</th>
                <th class="text-center">Serviço:</th>
                <th class="disableMobile text-center">Total:</th>
                <th class="text-center">Ações:</th>
            </tr>
        </thead>

        <tbody>
            @foreach($servicos as $servico)
            <tr>
                <td class="text-center">{{$servico->nomeCliente}}</td>
                <td class="text-center">{{$servico->telefoneCliente}}</td>
                <td class="text-center">{{$servico->servico}}</td>
                <td class="text-center">{{$servico->valTotalServicoEMaterial}}</td>
                <td class="text-center">
                    <a class="btn btn-primary" href="{{ route('pdfServico', ['id'=>$servico->id])}}"> <i class="far fa-file-pdf"></i> </a>

                    <a class="btn btn-primary" href="{{ route('verServico', ['id'=>$servico->id])}}"> <i class="fas fa-eye"></i> </a>
                    <a class="btn btn-primary" href="{{ route('editarServico', ['id'=>$servico->id])}}"><i class="fas fa-edit"></i> </a>
                    <a class="btn btn-danger" href="{{ route('excluirServico', ['id'=>$servico->id])}}"><i class="fas fa-trash"></i></a>
                </td>
            </tr>

            @endforeach
    

        </tbody>
    </table>
    <!-- <script src="../../../js/configDataTable.js"></script> -->
    

</div>
@endsection