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

    // public function store(Request $request) {

    //     $event = new Event;

    //     $event->title = $request->title;
    //     $event->date = $request->date;
    //     $event->city = $request->city;
    //     $event->private = $request->private;
    //     $event->description = $request->description;
    //     $event->items = $request->items;

    //     // Image Upload
    //     if($request->hasFile('image') && $request->file('image')->isValid()) {

    //         $requestImage = $request->image;

    //         $extension = $requestImage->extension();

    //         $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

    //         $requestImage->move(public_path('img/events'), $imageName);

    //         $event->image = $imageName;

    //     }

    //     $user = auth()->user();
    //     $event->user_id = $user->id;

    //     $event->save();

    //     return redirect('/')->with('msg', 'Evento criado com sucesso!');

    // }

    public function store(Request $request)
    {
        Servicos::create([
            'nomeCliente' => $request->nomeCliente,
            'telefoneCliente' => $request->telefoneCliente,
            // 'dataPedido' => dataAmericana($request->dataPedido),
            // 'dataEntrega' => dataAmericana($request->dataEntrega),
            '$dataPedido' => $request->dataPedido,
            '$dataEntrega' => $request->dataEntrega,
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
        return redirect('/servicos/show')->with('msg', 'Serviço salvo com sucesso');
    }

    public function show(){
        $servicos = Servicos::all();
        return view('servicos.show', ['servicos' => $servicos]);
    }

    public function destroy($id){
        $servicos=Servicos::findOrFail($id);
        $servicos->delete();
        return redirect('/servicos/show')->with('msg', 'Serviço excluido com sucesso');

    }

    public function see($id){
        $servicos = Servicos::findOrFail($id);
        return view('servicos.see', ['servicos' => $servicos]);
    }

    public function edit($id){
        $servicos = Servicos::findOrFail($id);
        return view('servicos.edit', ['servicos' => $servicos]);
    }

    public function update(Request $request, $id){
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
