<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VagaVoluntario extends Model
{
    use HasFactory;

    protected $fillable = [
        'Nomearea',
        'Telefone',
        'Email',
        'Cidade',
        'Sobre',
        'Dias',
        'Horario',
        'Id_Ong'
    ];

    public function ong()
    {
        return $this->belongsTo(Ong::class, 'Id_Ong', 'Id_Vaga');
    }
}
