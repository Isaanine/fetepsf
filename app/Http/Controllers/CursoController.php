<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;

use Illuminate\Support\Facades\Storage;

class CursoController extends Controller
{
    public function index()
    {
        $cursos = Curso::all(); // ou o método que você usa para obter os cursos
        return view('user.ong.courses', compact('cursos'));
    }
    public function index_account()
    {
        $cursos = Curso::all(); // ou o método que você usa para obter os cursos
        return view('user.ong.account', compact('cursos'));
    }
    public function index_shows()
    {
        $cursos = Curso::where('some_condition', $value)->get(); // Isso retorna uma coleção

        $cursos = Curso::all(); // ou o método que você usa para obter os cursos
        return view('ongs.shows', compact('cursos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'Nome' => 'required|string|max:255',
            'Sobre' => 'nullable|string',
            'Horario' => ['required'],
            'Dias' => 'nullable|string',
            'Id_Professor' => 'nullable|integer',
            'Foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'Itens_Aula' => 'nullable|string',
        ]);

        $curso = new Curso();
        $curso->Nome = $request->Nome;
        $curso->Sobre = $request->Sobre;
        $curso->Horario = $request->Horario;
        $curso->Dias = $request->Dias;
        $curso->Id_Professor = $request->Id_Professor;
        $curso->Itens_Aula = $request->Itens_Aula;

        if ($request->hasFile('Foto')) {
            $file = $request->file('Foto');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/cursos', $filename);
            $curso->Foto = $filename;
        }

        $curso->save();

        return redirect()->route('cursos.index');
    }

    public function edit($id)
    {
        $curso = Curso::findOrFail($id);
        return view('user.ong.courses', compact('curso'));
    }




    public function update(Request $request, $id)
    {
        $curso = Curso::findOrFail($id);

        // Validação dos campos
        $validatedData = $request->validate([
            'Nome' => 'required|string|max:255',
            'Sobre' => 'nullable|string|max:255',
            'Horario' => 'required|string|max:255',
            'Dias' => 'nullable|string|max:255',
            'Id_Professor' => 'nullable|string|max:255',
            'Itens_Aula' => 'nullable|string|max:255',
            'Foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Atualização dos campos no modelo Curso
        $curso->Nome = $validatedData['Nome'];
        $curso->Sobre = $validatedData['Sobre'];
        $curso->Horario = $validatedData['Horario'];
        $curso->Dias = $validatedData['Dias'];
        $curso->Id_Professor = $validatedData['Id_Professor'];
        $curso->Itens_Aula = $validatedData['Itens_Aula'];

        // Se uma nova foto foi enviada, processar o upload
        if ($request->hasFile('Foto')) {
            // Deletar a foto antiga, se existir
            if ($curso->Foto) {
                Storage::delete('public/cursos/' . $curso->Foto);
            }

            // Armazenar a nova foto e atualizar o campo
            $path = $request->file('Foto')->store('public/cursos');
            $curso->Foto = basename($path);
        }

        // Salvar as alterações no banco de dados
        $curso->save();

        return redirect()->route('cursos.index')->with('success', 'Curso atualizado com sucesso!');
    }


    public function destroy($id)
    {
        $curso = Curso::findOrFail($id);
        $curso->delete();

        return redirect()->route('cursos.index');
    }
}
