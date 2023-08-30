<?php

namespace App\Http\Controllers;

use App\Models\ListasDeSeries;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index (Request $request)
    {
        $series = ListasDeSeries::query()->orderByDesc('updated_at')->get();
        $mensagem = $request->session()->get('sucesso');
        $mensagemDelete = $request->session()->get('delete');
        $mensagemUpdate = $request->session()->get('update');

        return view('series.index', compact('series','mensagemUpdate'), compact('mensagem', 'mensagemDelete'));
    }

    public function create ()
    {
        return view('series.create');
    }

    public function post (Request $request)
    {
        $data = $request->only(['nome', 'categoria_id', 'imagem']);

        // Mapear os valores de categoria para nomes
        $categorias = [
            '1' => 'Série',
            '2' => 'Filme',
            '3' => 'Anime',
        ];

        // Verificar se a categoria existe no mapeamento e atribuir o nome correspondente
        if (isset($categorias[$data['categoria_id']])) {
            $data['categoria_id'] = $categorias[$data['categoria_id']];
        }

        ListasDeSeries::create($data);

        return redirect('/series')->with('sucesso', "{$data['categoria_id']}: {$data['nome']} criada com sucesso!");
    }


    public function destroy (ListasDeSeries $series, Request $request)
    {

        $series->delete();

        return redirect('/series')->with('delete', "{$series->nome} removido com sucesso!");
    }

    public function update (Request $request)
    {
        $serie = ListasDeSeries::find($request->id);
        $serie->nome = $request->nome;
        $serie->categoria_id = $request->categoria_id;
        $serie->imagem = $request->imagem;
        $serie->save();

        return redirect('/series')->with('update', "{$serie->nome} atualizado com sucesso!");
    }

    public function edit ($id)
    {
        $serie = ListasDeSeries::find($id);
        return view('series.update', compact('serie'));
    }


}
