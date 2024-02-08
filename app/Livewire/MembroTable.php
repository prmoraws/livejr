<?php

namespace App\Livewire;

use App\Models\Membro;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use League\CommonMark\Extension\CommonMark\Node\Inline\Link;

class MembroTable extends DataTableComponent
{
    protected $model = Membro::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id')->setTableRowUrl(function($row) {
            return route('show-membro', $row);
        });
        $this->setPaginationEnabled();
        $this->setPaginationVisibilityEnabled();
        $this->setPerPageAccepted([10, 25, 50, 100]);

    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("User id", "user_id")
                ->sortable(),
            Column::make("Nome", "nome")
                ->searchable()
                ->sortable(),
            Column::make("Celular", "celular")
                ->sortable(),
            Column::make("Nascimento", "nascimento")
                ->sortable(),
            Column::make("Batismo", "batismo")
                ->sortable(),
            Column::make("Endereco", "endereco")
                ->sortable(),
            Column::make("E civil", "e_civil")
                ->sortable(),
            Column::make("Profissao", "profissao")
                ->sortable(),
            Column::make("Bairro", "bairro")
                ->sortable(),
            Column::make("Condicao", "condicao")
                ->sortable(),
            Column::make("Grupo", "grupo")
                ->sortable(),
            //Column::make("Foto", "foto")
            //    ->sortable(),
            Column::make("Observacao", "observacao")
                ->sortable(),
           // Column::make("Created at", "created_at")
           //    ->sortable(),
           // Column::make("Updated at", "updated_at")
           //     ->sortable(),
        ];

    }
}
