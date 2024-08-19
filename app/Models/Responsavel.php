<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Responsavel extends Model
{
    use HasFactory;
    protected $fillable = [
        'Nome',
        'CPF',
        'Nascimento',
        'Telefone',
        'Endereco',
        'CEP',
        'Estado',
        'Cidade',
        'Complemento',
        'Email',
        'Senha',
    ];
}
