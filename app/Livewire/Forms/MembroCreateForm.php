<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use App\Models\User;
use Livewire\Attributes\Validate;

class MembroCreateForm extends Form
{
    #[Validate([
        'nome' => 'required|min:3|max:255|unique:membros',
        'endereco' => 'required',
        'nascimento' => 'required',
        'bairro' => 'required',
        'condicao' => 'required',
        'grupo' => 'required',

    ])]
    public $id;
    public $user_id;
    public $nome = '';
    public $endereco = '';
    public $bairro = '';
    public $celular = '';
    public $e_civil = '';
    public $nascimento = '';
    public $batismo = '';
    public $profissao = '';
    public $grupo = '';
    public $condicao = '';
    public $observacao = '';
    public $foto;
    public $grupos = [
        'Evangelização',
        'Universal nos Presídios',
        'Calebe',
        'Grupo da Saúde',
        'Arimateia',
        'Força Jovem Universal',
        'Força Teen Universal',
        'Resgate Universal',
        'Terapia do Amor',
        'Universal Socioeducativo',
        'Vício Tem Cura',
        'Depressão Tem Cura',
        'Não está em um grupo'
    ];
    public $condicoes = [
        'Obreiro',
        'Colaborador',
        'CPO',
        'Batizado nas Águas',
        'Frequentador',
        'Convidado',
        'Primeira Vez',
        'Atendimento',
        'Visita',
        'Afastado'
    ];
    public $relacoes = [
        'solteiro(a)',
        'namorando(a)',
        'noivo(a)',
        'amasiado(a)',
        'casado(a)',
        'separado(a)',
        'divorciado(a)',
        'viúvo(a)'
    ];



    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
