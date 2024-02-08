<?php

namespace App\Livewire;

use App\Models\Membro;
use Livewire\Component;
use Illuminate\Http\Request;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use App\Livewire\Forms\MembroCreateForm;

class ShowMembro extends Component
{
    use WithFileUploads;
    public MembroCreateForm $form;
    public function delete()
    {
        Membro::find($this->form->id)->delete();
        Storage::disk('public')->delete($this->form->foto);
        return redirect()->route('listar-membros');
    }
    public function editar()
    {
        return redirect()->route('update-membro', $this->form->id);
    }



    public function render(Request $request)
    {
        $membro = Membro::find($request->id);
        $this->form->id = $membro->id;
        $this->form->foto = $membro->foto;
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


        return view('livewire.show-membro');
    }
}
