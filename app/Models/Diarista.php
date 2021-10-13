<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diarista extends Model
{
    use HasFactory;
    /**
     * Defini os campos que podem ser gravados
     *
     * @var array
     */
    protected $fillable = ['nome_completo', 'cpf', 'email', 'telefone', 'logradouro', 'numero', 'complemento', 'bairro', 'cidade', 'estado', 'cep', 'codigo_ibge', 'foto_usuario'];
}
