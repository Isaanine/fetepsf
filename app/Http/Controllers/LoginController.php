<?php

namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Cookie\CookieJar;
use App\Models\Professor;
use App\Models\Ong;
use App\Models\Responsavel;
use App\Models\Aluno;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class LoginController
{
    public function login(Request $req)
    {
        $email = $req->input('Email');
        $senha = $req->input('Senha');

        // Verificar se o usuário é um professor, ONG ou aluno
        $professor = Professor::where('Email', $email)->first();
        $ong = Ong::where('Email', $email)->first();
        $responsavel = Responsavel::where('Email', $email)->first();

        if ($professor !== null && Hash::check($senha, $professor->Senha)) {

            // Iniciar sessão para o professor
            session()->put('professor', $professor);
            return redirect()->route('profaccount');
        }

        if ($ong !== null && Hash::check($senha, $ong->Senha)) {

            // Iniciar sessão para a ONG
            session()->put('ong', $ong);
            return redirect()->route('ongaccount');
        }

        if ($responsavel !== null && Hash::check($senha, $responsavel->Senha)) {

            // Iniciar sessão para o responsavel
            $aluno = Aluno::where('Email', $email)->first();

            session()->put('aluno', $aluno);
            session()->put('responsavel', $responsavel);
            return redirect()->route('alunoaccount');
        }

        // Se nenhuma das condições for atendida
        return redirect()->back()->withInput()->withErrors(['email' => 'Credenciais inválidas']);
    }
    public function logout()
    {
        session()->flush();
        Auth::logout();
        // Redirecionar para a página de login ou outra página de sua escolha
        return redirect('/');
    }
}
