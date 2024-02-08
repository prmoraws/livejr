<?php

namespace App\Livewire;

use App\Models\Membro;
use Livewire\Component;

class Index extends Component
{
    public $membros;
    public function mount()
    {
        $this->membros = Membro::all();
    }




    public function render()
    {
        return view('livewire.index');
    }
}
