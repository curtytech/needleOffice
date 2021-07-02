@extends('layouts.main')

@section('title', 'Welcome')

@section('content')
<div class="container mt-4 ">
    <h1 class="mb-3 font">Home</h1>
</div>

<!-- <div class="form-row"> Copia do Siseduc
    <div class="form-group col-md-4">
        <span class="btn btn-outline-secondary btn-lg btn-block editrow" data-id="" data-inscricao="" title="SISEDUC" data-href="http://siseducmage.com.br/siseduc/Home"><i class="fa fa-graduation-cap fa-5x"></i><br>SISEDUC</span>
    </div>
    <div class="form-group col-md-4">
        <span class="btn btn-outline-secondary btn-lg btn-block editrow" data-id="" data-inscricao="" title="GED" data-href="http://siseducmage.com.br/siseduc/Ged_home"><i class="fa fa-inbox fa-5x"></i><br>GED</span>
    </div>
    <div class="form-group col-md-4">
        <span class="btn btn-outline-secondary btn-lg btn-block editrow" data-id="" data-inscricao="" title="Configuração" data-href="http://siseducmage.com.br/siseduc/Conf_home"><i class="fa fa-gears fa-5x"></i><br>Configuração</span>
    </div>
</div> -->

<div class="container">
    <div class="row">
        <div class="form-group col-md-4">
                <a class=" btn btn-outline-dark btn-block editrow" href="/servicos/show"><i class="mx-5 my-2 fas fa-cut fa-5x"></i><br><h5>Serviços</h5></a>
        </div>
    </div>
</div>

<div class="container">
    {{ $a = 5 }}
    {{ $b = 7 }}

    {{  $c = $a + $b }}

    {{ $c }}

    <input name="a" type="number"> 


</div>
@endsection