<?php

namespace App\Http\Controllers;

use App\Models\Ong;
use App\Models\Aluno;

use App\Models\Curso;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class Admin extends Controller
{
    public function getOng()
    {
        // Obtendo todas as ONGs do banco de dados
        $ongs = Ong::all();
        $countOngs = Ong::all()->count();
        $countAlunos = Aluno::all()->count();

        $countCursos = Curso::all()->count();

        // Passando as ONGs para a view
        return view('admin.adminPage', compact('ongs', 'countOngs', 'countAlunos', 'countCursos'));
    }

    public function deleteOng($id_ong)
    {
        $ong = Ong::where('Id_Ong', $id_ong);

        if ($ong) {
            $ong->delete();
            return redirect()->back();
        } else {
            echo "erro";
        }
    }
    public function searchOngs(Request $request)
    {
        $email = $request->input('email');
        $countOngs = Ong::all()->count();
        $countAlunos = Aluno::all()->count();

        $countCursos = Curso::all()->count();
        // Filtra ONGs pelo email fornecido
        $ongs = Ong::where('Email', 'LIKE', '%' . $email . '%')->get();

        return view('admin.adminPage', ['ongs' => $ongs], compact('countOngs', 'countAlunos', 'countCursos'));
    }

    // Arrumar
    public function showOng($Id_Ong)
    {
        $ong = Ong::where('Id_Ong', $Id_Ong)->first();

        session()->put('ong', $ong);
        return redirect()->route('ongaccount');
    }
}
