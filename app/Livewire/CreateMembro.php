<?php

namespace App\Livewire;

use App\Models\Membro;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use App\Livewire\Forms\MembroCreateForm;

class CreateMembro extends Component
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
        $this->form->user_id =  Auth::user()->id;
        Membro::create(
            $this->form->all()
        );
        return redirect()->route('listar-membros');
    }

    public function storeFoto()
    {
        $this->validate([
            'form.foto' => 'required|image|max:5120'
        ]);
        $nameFile = Str::slug($this->form->nome) . '.' . $this->form->foto->getClientOriginalExtension();
        $this->form->foto->storeAs('public/',  $nameFile);
        $this->form->foto =  $nameFile;
    }


    public function render()
    {
        return view('livewire.create-membro');
    }
}
