<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicos;


class servicosController extends Controller
{
    public function create()
    {
        return view('servicos.create');
    }

    public function store(Request $request)
    {
        $servico = new Servicos;

        $servico->nomeCliente = $request->nomeCliente;
        $servico->telefoneCliente = $request->telefoneCliente;
        $servico->dataPedido = $request->dataPedido;
        $servico->dataEntrega = $request->dataEntrega;
        $servico->servico = $request->servico;
        $servico->qtdServico = $request->qtdServico;
        $servico->descServico = $request->descServico;
        $servico->valServico = $request->valServico;
        $servico->valTotalServico = $request->valTotalServico;
        $servico->material = $request->material;
        $servico->qtdMaterial = $request->qtdMaterial;
        $servico->valUnitarioMaterial = $request->valUnitarioMaterial;
        $servico->valTotalMaterial = $request->valTotalMaterial;
        $servico->valTotalTodosMateriais = $request->valTotalTodosMateriais;
        $servico->sinal = $request->sinal;
        $servico->restante = $request->restante;
        $servico->frete = $request->frete;
        $servico->valTotalServicoEMaterial = $request->valTotalServicoEMaterial;

        // $user = auth()->user();
        // $servico->user_id = $user->id;

        $servico->save();

        return redirect('/servicos/show')->with('msg', 'Serviço salvo com sucesso');
    }

    public function show()
    {
        $servicos = Servicos::all();
        return view('servicos.show', ['servicos' => $servicos]);
    }

    public function destroy($id)
    {
        $servicos = Servicos::findOrFail($id);
        $servicos->delete();
        return redirect('/servicos/show')->with('msg', 'Serviço excluido com sucesso');
    }

    public function see($id)
    {
        $servicos = Servicos::findOrFail($id);
        return view('servicos.see', ['servicos' => $servicos]);
    }

    public function edit($id)
    {
        $servicos = Servicos::findOrFail($id);
        return view('servicos.edit', ['servicos' => $servicos]);
    }

    public function update(Request $request, $id)
    {
        $servicos = Servicos::findOrFail($id);
        $servicos->update([
            'nomeCliente' => $request->nomeCliente,
            'telefoneCliente' => $request->telefoneCliente,
            'dataPedido' => $request->dataPedido,
            'dataEntrega' => $request->dataEntrega,
            'servico' => $request->servico,
            'qtdServico' => $request->qtdServico,
            'descServico' => $request->descServico,
            'valServico' => $request->valServico,
            'valTotalServico' => $request->valTotalServico,
            'material' => $request->material,
            'qtdMaterial' => $request->qtdMaterial,
            'valUnitarioMaterial' => $request->valUnitarioMaterial,
            'valTotalMaterial' => $request->valTotalMaterial,
            'valTotalTodosMateriais' => $request->valTotalTodosMateriais,
            'sinal' => $request->sinal,
            'restante' => $request->restante,
            'frete' => $request->frete,
            'valTotalServicoEMaterial' => $request->valTotalServicoEMaterial,
        ]);
        return redirect('/servicos/show')->with('msg', 'Serviço atualizado com sucesso');
    }
}
