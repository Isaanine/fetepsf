<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ong extends Model
{
    use HasFactory;
    protected $table = 'ongs'; // Nome da tabela no banco de dados
    protected $primaryKey = 'Id_Ong';
    protected $fillable = [
        'Id_Ong',
        'Nome',
        'CNPJ',
        'Responsavel',
        'Endereco',
        'CEP',
        'Estado',
        'Cidade',
        'Zona',
        'Complemento',
        'Telefone',
        'Linkdoacao',
        'Sobre',
        'Email',
        'Senha',
    ];
    // Model Ong.php
    public function cursos()
    {
        return $this->hasMany(Curso::class);
    }

    public function professores()
    {
        return $this->hasMany(Professor::class);
    }
}
