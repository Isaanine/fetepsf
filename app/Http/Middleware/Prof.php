<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Prof
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {   
        $request->validate([
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
        return $next($request);
    }
}
