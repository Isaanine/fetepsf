<?php

namespace App\Http\Controllers;

use App\Models\Mural;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class MuralController extends Controller
{
    public function create(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'Nome' => 'required|string|max:255',
            'Email' => 'required|email',
            'Assunto' => 'nullable|string|max:50',
            'Recado' => 'nullable|string|max:255',
        ], [
            'Nome.required' => 'O campo nome deve ser preenchido',
            'Email.required' => 'O campo email deve ser preenchido',
            'Email.email' => 'O campo email deve ser um endereço de e-mail válido',
            'Assunto.required' => 'O campo assunto deve ser preenchido',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $mural = new Mural();
        $mural->Nome = $req->input('Nome');
        $mural->Email = $req->input('Email');
        $mural->Assunto = $req->input('Assunto');
        $mural->Recado = $req->input('Recado');
        $mural->save();

        // Recupera os murais existentes na sessão e adiciona o novo item
        $murals = Session::get('mural', collect());
        $murals->push($mural);
        
        session()->put('mural', $murals);
        return redirect('/ong/mural');
    }
    public function getAll(){
        $mural = Mural::all();
        
        return view('user.aluno.mural', compact('mural'));
    }
    public function getAll2(){
        $mural = Mural::all();
        
        return view('user.prof.mural', compact('mural'));
    }
}
