<?php

namespace App\Http\Controllers;

use App\Models\Professor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class ProfessorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $req)
    {
        $senha = $req->input('Senha');
        $c_senha = $req->input('C_Senha');
        $validator = Validator::make($req->all(), [
            'Nome' => 'required|string|max:255',
            'CPF' => 'required|string|size:14|unique:professores,cpf',
            'Nascimento' => 'required|date',
            'Telefone' => 'nullable|string|max:15',
            'Formacao' => 'nullable|string|max:255',
            'Email' => 'required|email|unique:professores,email',
            'Senha' => 'required|string|min:8',
            'C_Senha' => 'required|string|same:Senha',
        ], [
            'Nome.required' => 'O campo nome deve ser preenchido',
            'CPF.required' => 'O campo CPF deve ser preenchido',
            'CPF.size' => 'O campo CPF deve ter exatamente :size caracteres',
            'Nascimento.required' => 'O campo data de nascimento deve ser preenchido',
            'Email.required' => 'O campo email deve ser preenchido',
            'Email.email' => 'O campo email deve ser um endereço de e-mail válido',
            'Email.unique' => 'O e-mail informado já está em uso',
            'Senha.required' => 'O campo senha deve ser preenchido',
            'Senha.min' => 'A senha deve ter pelo menos :min caracteres',
            'C_Senha.required' => 'O campo confirmação de senha deve ser preenchido',
            'C_Senha.same' => 'A confirmação da senha não coincide com a senha',
        ]);

        if ($validator->fails()) return redirect()->back()->withErrors($validator)->withInput();


        $professor = new Professor();
        $professor->Nome = $req->input('Nome');
        $professor->CPF = $req->input('CPF');
        $professor->Nascimento = $req->input('Nascimento');
        $professor->Telefone = $req->input('Telefone');
        $professor->Formacao = $req->input('Formacao');
        $professor->Email = $req->input('Email');
        $professor->Senha = Hash::make($req->input('Senha'));

        if ($c_senha !== $senha) return redirect()->back()->withInput()->withErrors(['senha' => 'senhas não coincidem']);


        $professor->save();
        session()->put('professor', $professor);
        return redirect()->route('profaccount');
    }
    public function edit($id)
    {
        $id = Session::get('professor')->Id_Professor;
        $professor = Professor::findOrFail($id);
        return view('user.prof.account', compact('professor'));
    }

    public function update(Request $request, $id)
    {
        // Validação dos dados
        $validated = $request->validate([
            'Nome' => 'required|string|max:255',
            'Email' => 'required|email|max:255',
            'Telefone' => 'required|string|max:15',
            'Formacao' => 'required|string|max:255',
            'Nascimento' => 'required|date',
            'Foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'FotoBack' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Encontre o professor usando a chave primária correta
        $professor = Professor::findOrFail($id);

        // Atualize os dados do professor
        $professor->update($validated);

        // Verifique se uma nova foto foi enviada e atualize-a
        if ($request->hasFile('Foto')) {
            if ($professor->Foto) {
                Storage::disk('public')->delete($professor->Foto);
            }
            $path = $request->file('Foto')->store('fotos_professores', 'public');
            $professor->Foto = $path;
        }

        if ($request->hasFile('FotoBack')) {
            if ($professor->FotoBack) {
                Storage::disk('public')->delete($professor->FotoBack);
            }
            $path = $request->file('FotoBack')->store('fotos_professores', 'public');
            $professor->FotoBack = $path;
        }

        // Salve as mudanças
        $professor->save();

        // Atualize a sessão com os novos dados
        session()->put('professor', $professor);

        // Redirecione para a página de edição do professor
        return redirect('/prof/account');
    }
}
