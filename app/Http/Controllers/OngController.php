<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Ong;
use App\Models\Professor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;;

class OngController
{


    public function index()
    {
        $ongs = Ong::all();

        return view('user.index', compact('ongs'));
    }

    public function index2()
    {
        $ongs = Ong::all();

        return view('user.ongs', compact('ongs'));
    }



    public function create(Request $req)
    {
        $senha = $req->input('senha');
        $c_senha = $req->input('c_senha');
        $validator = Validator::make($req->all(), [
            'nome_ong' => 'required|string|max:255',
            'cnpj_ong' => 'nullable|string|size:18|unique:ongs,CNPJ',
            'resp_ong' => 'nullable|string|max:255',
            'cep' => 'nullable|string|max:10',
            'compro_endereco' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'estado' => 'nullable|string|size:2',
            'cidade' => 'nullable|string|max:50',
            'zona' => 'nullable|string|max:20',
            'complemento' => 'nullable|string|max:255',
            'telefone' => 'nullable|string|max:15',
            'linkdoacao' => 'nullable|url',
            'sobre' => 'nullable|string',
            'email' => 'nullable|email|unique:ongs,Email',
            'senha' => 'nullable|string|min:8'
        ], [
            'nome_ong.required' => 'O campo nome deve ser preenchido',
            'nome_ong.string' => 'O campo nome deve ser uma string',
            'nome_ong.max' => 'O campo nome deve ter no máximo :max caracteres',
            'cnpj_ong.size' => 'O CNPJ deve ter exatamente :size caracteres',
            'cnpj_ong.unique' => 'O CNPJ informado já está em uso',
            'resp_ong.string' => 'O campo responsável deve ser uma string',
            'resp_ong.max' => 'O campo responsável deve ter no máximo :max caracteres',
            'cep.max' => 'O campo CEP deve ter no máximo :max caracteres',
            'estado.size' => 'O estado deve ter exatamente :size caracteres',
            'cidade.max' => 'O campo cidade deve ter no máximo :max caracteres',
            'zona.max' => 'O campo zona deve ter no máximo :max caracteres',
            'complemento.max' => 'O campo complemento deve ter no máximo :max caracteres',
            'telefone.max' => 'O campo telefone deve ter no máximo :max caracteres',
            'linkdoacao.url' => 'O campo link de doação deve ser uma URL válida',
            'email.email' => 'O campo e-mail deve ser um endereço de e-mail válido',
            'email.unique' => 'O e-mail informado já está em uso',
            'senha.min' => 'A senha deve ter pelo menos :min caracteres',
            'compro_endereco.image' => 'A Foto deve ser uma imagem válida',
            'compro_endereco.mimes' => 'A Foto deve estar em um dos formatos: jpeg, png, jpg, gif',
            'compro_endereco.max' => 'A Foto não pode ter mais que 2MB',
        ]);

        if ($validator->fails()) return redirect()->back()->withErrors($validator)->withInput();


        $ong = new Ong();
        $ong->Nome = $req->input('nome_ong');
        $ong->CNPJ = $req->input('cnpj_ong');
        $ong->Responsavel = $req->input('resp_ong');
        $ong->CEP = $req->input('cep');
        $ong->Estado = $req->input('estado');
        $ong->Endereco = $req->input('endereco');
        $ong->Cidade = $req->input('cidade');
        $ong->Zona = $req->input('zona');
        $ong->Complemento = $req->input('complemento');
        $ong->Telefone = $req->input('telefone');
        $ong->Linkdoacao = $req->input('link_doacao');
        $ong->Sobre = $req->input('ativ_ong');
        $ong->Email = $req->input('email');
        $ong->Senha = Hash::make($req->input('senha'));

        if ($c_senha !== $senha) return redirect()->back()->withInput()->withErrors(['senha' => 'senhas não coincidem']);

        if ($req->hasFile('compro_endereco')) {
            // Verifica se o arquivo é recebido


            $file = $req->file('compro_endereco');

            // Se o arquivo for válido, armazena
            if ($file->isValid()) {
                // Armazenar o arquivo e obter o caminho
                $path = $file->store('comprovantes', 'public'); // 'public' é a disco onde o arquivo será armazenado
                $ong->ComprovanteEndereco = $path; // Salvar o caminho no banco de dados
            }
        } else {
            // Para depuração, se não foi enviado
            dd('Arquivo não enviado');
        }


        $ong->save();
        session()->put('ong', $ong);
        return redirect('/ong/account');
    }
  
    public function show($Id_Ong)
    {
        $ong = Ong::where('Id_Ong', $Id_Ong)->firstOrFail();
    
        return view('ongs.show', compact('ong'));
    }
    
    public function getOng()
    {
        $countOngs = Ong::all()->count();
        $countAlunos = Aluno::all()->count();
        $countCursos = Curso::all()->count();
    
        return view('user.index', compact('ongs','countOngs', 'countAlunos', 'countCursos'));
    }
    
    public function account()
    {
        $ongs = Ong::all(); // Puxe todas as ONGs ou adicione filtros conforme necessário
        return view('user.aluno.account', compact('ongs'));
    }
    




    public function edit($Id_Ong)
    {
        $ong = Ong::findOrFail($Id_Ong);
        return view('user.ong.account', compact('ong'));
    }


    public function update(Request $request, $id)
    {


        // Encontre a ONG usando a chave primária correta
        $ong = Ong::findOrFail($id);

        // Atualize os dados da ONG


        // Verifique se uma nova foto do Comprovante de Endereço foi enviada e atualize-a
        if ($request->hasFile('ComprovanteEndereco')) {
            if ($ong->ComprovanteEndereco) {
                Storage::disk('public')->delete($ong->ComprovanteEndereco);
            }
            $path = $request->file('ComprovanteEndereco')->store('comprovantes_endereco', 'public');
            $ong->ComprovanteEndereco = $path;
        }

        // Verifique se uma nova Foto de Papel de Parede foi enviada e atualize-a
        if ($request->hasFile('FotoBackOn')) {
            if ($ong->FotoBackOn) {
                Storage::disk('public')->delete($ong->FotoBackOn);
            }
            $path = $request->file('FotoBackOn')->store('fotos_backon', 'public');
            $ong->FotoBackOn = $path;
        }

        // Salve as mudanças
        $ong->update();

        // Atualize a sessão com os novos dados
        session()->put('ong', $ong);

        // Redirecione para a página de edição da ONG
        return redirect()->route('ongs.edit', ['Id_Ong' => $ong->Id_Ong])
            ->with('success', 'Dados da ONG atualizados com sucesso.');
    }
}
