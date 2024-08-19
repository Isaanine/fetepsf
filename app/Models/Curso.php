<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $table = 'cursos';
    protected $primaryKey = 'Id_Curso';
    protected $fillable = [
        'Nome',
        'Sobre',
        'Horario',
        'Dias',
        'Id_Professor',
        'Id_Ong',
        'Foto',
        'Itens_Aula'
    ];
    public $timestamps = true;
}
