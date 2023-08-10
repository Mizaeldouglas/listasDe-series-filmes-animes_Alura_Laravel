<?php

namespace App\Http\Controllers;

use App\Models\ListasDeSeries;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = ListasDeSeries::query()->orderByDesc('updated_at')->get();

        return view('series.index', compact('series'));
    }

    public function create()
    {
        return view('series.create');
    }

    public function post (Request $request)
    {
        $series = new ListasDeSeries();
        $series->nome = $request->input('nome');
        $series->save();
        return redirect('/series');
    }
    public function destroy(Request $request)
    {
        ListasDeSeries::destroy($request->id);
        return redirect('/series');
    }
}
