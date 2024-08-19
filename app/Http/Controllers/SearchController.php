<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ong; // Assumindo que você tem um modelo Ong

class SearchController extends Controller
{
    public function search(Request $request)
    {
        // Validação dos inputs
        $validated = $request->validate([
            'estado' => 'required',
            'zona' => 'required',
        ]);

        $estado = $validated['estado'];
        $zona = $validated['zona'];

        // Filtrar ONGs baseado no estado e zona
        $ong = Ong::where('estado', $estado)
                    ->where('zona', $zona)
                    ->get();

        // Retornar a view com os resultados
        return view('results', compact('ong'));
    }
}
