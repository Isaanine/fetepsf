<?php

namespace App\Http\Controllers;

use App\Models\VagaVoluntario;
use App\Models\Ong;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class VagaVoluntarioController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vagas = new VagaVoluntario();
        $vagas = $vagas->all();

        $ongs = new Ong();
        $ongs = $ongs->all();

        return view('user.volunteer', compact('ongs','vagas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'name-ar' => 'required|string|max:255',
            'tel-cont' => 'required|string|size:15',
            'email' => 'required|email',
            'cidade' => 'required|string|max:50',
            'voluntarios' => 'required|string',
            'day' => 'required|string|max:50',
            'hour' => 'required|string|max:25',
        ], [
            'name-ar.required' => 'O campo nome da área deve ser preenchido',
            'nome-ar.max' => 'O campo nome da área deve ter no máximo :max caracteres',
            'tel-cont.required' => 'O campo telefone para contato deve ser preenchido',
            'tel-cont.size' => 'O campo telefone deve ter exatamente :size caracteres',
            'email.required' => 'O campo email para contato deve ser preenchido',
            'email.email' => 'O campo email para contato deve ser um endereço de e-mail válido',
            'email.max' => 'O campo para contato deve ter no máximo :max caracteres',
            'cidade.required' => 'O campo cidade deve ser preenchido',
            'cidade.max' => 'O campo cidade deve ter no máximo :max caracteres',
            'voluntarios.required' => 'O campo voluntários desejados deve ser preenchido',
            'day.required' => 'O campo dias da semana deve ser preenchido',
            'day.max' => 'O campo dias da semana deve ter no máximo :max caracteres',
            'hour.required' => 'O campo horário deve ser preenchido',
            'hour.max' => 'O campo horário deve ter no máximo :max caracteres',

        ]);

        if ($validator->fails()) return redirect()->back()->withErrors($validator)->withInput();

        $vaga = new VagaVoluntario();

        if(!empty(Session::get('ong')->Id_Ong)){
            $ong_id = Session::get('ong')->Id_Ong;
        }else{
            $ong_id = Session::get('ong')->id;
        }

        $vaga->Nomearea = $req->input('name-ar');
        $vaga->Telefone = $req->input('tel-cont');
        $vaga->Email = $req->input('email');
        $vaga->Cidade = $req->input('cidade');
        $vaga->Sobre = $req->input('voluntarios');
        $vaga->Dias = $req->input('day');
        $vaga->Horario = $req->input('hour');
        $vaga->Id_Ong = $ong_id;

        $vaga->save();

        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(VagaVoluntario $vagaVoluntario)
    {
        if(!empty(Session::get('ong')->Id_Ong)){
            $ong_id = Session::get('ong')->Id_Ong;
        }else{
            $ong_id = Session::get('ong')->id;
        }

        $vagas = $vagaVoluntario->where('Id_Ong', $ong_id)->get();
        $ong = new Ong;

        $ong = $ong->where('Id_Ong', $ong_id)->get();

        return view('user/ong/volunteer', compact('vagas', 'ong'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(VagaVoluntario $vagaVoluntario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, VagaVoluntario $vagaVoluntario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($Id_Vaga)
    {
        $vaga = VagaVoluntario::where('Id_Vaga', $Id_Vaga);
        $vaga->delete();

        return redirect('/ong/volunteer');


    }
}
