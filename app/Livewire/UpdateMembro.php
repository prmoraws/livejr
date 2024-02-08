<?php

namespace App\Livewire;

use App\Models\Membro;
use League\CommonMark\Extension\CommonMark\Node\Inline\Image;
use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use App\Livewire\Forms\MembroCreateForm;
use Illuminate\Validation\Rule;

class UpdateMembro extends Component
{
    use WithFileUploads;
    public MembroCreateForm $form;

    public function save()
    {
        if ($this->form->validate()) {
            $this->submit();
        }
    }

    public function submit()
    {
        $this->storeFoto();
        Membro::where('id', $this->form->id)
            ->update([
                'user_id' =>  Auth::user()->id,
                'nome' => $this->form->nome,
                'celular' => $this->form->celular,
                'nascimento' => $this->form->nascimento,
                'batismo' => $this->form->batismo,
                'e_civil' => $this->form->e_civil,
                'profissao' => $this->form->profissao,
                'endereco' => $this->form->endereco,
                'bairro' => $this->form->bairro,
                'condicao' => $this->form->condicao,
                'grupo' => $this->form->grupo,
                'observacao' => $this->form->observacao
            ]);
        return redirect()->route('listar-membros');
    }

    public function storeFoto()
    {

        if (is_file($this->form->foto)) {
            $this->validate([
                'form.foto' => 'image|max:5120|'
            ]);
            $nameFile = Str::slug($this->form->nome) . '.' . $this->form->foto->getClientOriginalExtension();
            $this->form->foto->storeAs('public/',  $nameFile);
            $this->form->foto =  $nameFile;
            Membro::where('id', $this->form->id)
                ->update([
                    'foto' => $this->form->foto
                ]);
        }
    }
    public function render()
    {
        return view('livewire.update-membro');
    }

    public function mount($id)
    {
        $membro = Membro::find($id);
        $this->form->id = $membro->id;
        $this->form->foto = url('storage/' . $membro->foto);
        $this->form->nome = $membro->nome;
        $this->form->endereco = $membro->endereco;
        $this->form->bairro = $membro->bairro;
        $this->form->celular = $membro->celular;
        $this->form->e_civil = $membro->e_civil;
        $this->form->nascimento = $membro->nascimento;
        $this->form->batismo = $membro->batismo;
        $this->form->profissao = $membro->profissao;
        $this->form->grupo = $membro->grupo;
        $this->form->condicao = $membro->condicao;
        $this->form->observacao = $membro->observacao;
    }
}
