<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membro extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nome',
        'celular',
        'nascimento',
        'batismo',
        'endereco',
        'e_civil',
        'profissao',
        'bairro',
        'condicao',
        'grupo',
        'foto',
        'observacao'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
