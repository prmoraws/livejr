<x-slot name="form">
    <div x-data="{ fotoName: null, fotoPreview: null }" class="mx-auto  col-span-6 sm:col-span-4">
        <!-- Profile foto File Input -->
        <input type="file" id="foto" class="hidden" wire:model="form.foto" x-ref="foto"
            x-on:change="
                            fotoName = $refs.foto.files[0].name;
                            const reader = new FileReader();
                            reader.onload = (e) => {
                                fotoPreview = e.target.result;
                            };
                            reader.readAsDataURL($refs.foto.files[0]);
                    " />

        <!-- Current Profile foto -->
        <div class="mt-2" x-show="! fotoPreview">
            <img src="{{ $this->form->foto ?? 'https://icon-library.com/images/no-profile-pic-icon/no-profile-pic-icon-10.jpg' }}" alt=""
                class="rounded-full h-20 w-20 object-cover mx-auto">
        </div>

        <!-- New Profile foto Preview -->
        <div class="mt-2" x-show="fotoPreview" style="display: none;">
            <span class="mx-auto block rounded-full w-20 h-20 bg-cover bg-no-repeat bg-center"
                x-bind:style="'background-image: url(\'' + fotoPreview + '\');'">
            </span>
        </div>

        <x-secondary-button class="mt-2 me-2" type="button" x-on:click.prevent="$refs.foto.click()">
            {{ __('Carregar Foto') }}
        </x-secondary-button>
    </div>
    <x-input-error for="form.foto" class="mt-2" />

    <div class="col-span-6 sm:col-span-4">
        <x-label for="nome" value="{{ __('Nome') }}" />
        <x-input id="nome" class="block mt-1 w-full" type="text" wire:model="form.nome" name="nome"
            :value="old('nome')" autofocus autocomplete="nome" placeholder="ex: João Batista" />
        <x-input-error for="form.nome" class="mt-2" />
    </div>
    <div class="col-span-6 sm:col-span-4">
        <x-label for="endereco" value="{{ __('Endereço') }}" />
        <x-input id="endereco" class="block mt-1 w-full" type="text" wire:model="form.endereco" name="endereco"
            :value="old('endereco')" autofocus autocomplete="endereco" placeholder="ex: Av. Universal, 144" />
        <x-input-error for="form.endereco" class="mt-2" />
    </div>
    <div class="col-span-6 sm:col-span-4">
        <x-label for="bairro" value="{{ __('Bairro') }}" />
        <x-input id="bairro" class="block mt-1 w-full" type="text" wire:model="form.bairro" name="bairro"
            :value="old('bairro')" autofocus autocomplete="bairro" placeholder="ex: Jericó" />
        <x-input-error for="form.bairro" class="mt-2" />
    </div>
    <div class="col-span-6 sm:col-span-4">
        <x-label for="celular" value="{{ __('Celular') }}" />
        <x-input onkeydown="phoneMaskBrazil()" maxlength="15" id="celular" class="block mt-1 w-full" type="text"
            wire:model="form.celular" name="celular" :value="old('celular')" autofocus autocomplete="celular"
            placeholder="ex: (74) 9999-8888" />
        <x-input-error for="form.celular" class="mt-2" />
    </div>
    <div class="col-span-6 sm:col-span-4">
        <x-label for="profissao" value="{{ __('Profissão') }}" />
        <x-input id="profissao" class="block mt-1 w-full" type="text" wire:model="form.profissao" name="profissao"
            :value="old('profissao')" autofocus autocomplete="profissao" placeholder="ex: Doméstica" />
        <x-input-error for="form.profissao" class="mt-2" />
    </div>
    <div class="col-span-6 sm:col-span-4">
        <x-label for="e_civil" value="{{ __('Relacionamentos') }}" />
        <select name="e_civil" wire:model.live="form.e_civil"
            class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
            <option value="">Selecione Relacionamento</option>
            @foreach ($this->form->relacoes as $e_civil)
                <option value="{{ $e_civil }}">{{ $e_civil }}</option>
            @endforeach
        </select>
        <x-input-error for="form.e_civil" class="mt-2" />
    </div>
    <div class="col-span-6 sm:col-span-4">
        <x-label for="nascimento" value="{{ __('Data de Nascimento') }}" />
        <x-input id="nascimento" class="block mt-1 w-full" type="date" wire:model="form.nascimento"
            name="nascimento" :value="old('nascimento')" autofocus autocomplete="nascimento" />
        <x-input-error for="form.nascimento" class="mt-2" />
    </div>
    <div class="col-span-6 sm:col-span-4">
        <x-label for="batismo" value="{{ __('Batismo') }}" />
        <x-input id="batismo" class="block mt-1 w-full" type="date" wire:model="form.batismo" name="batismo"
            :value="old('batismo')" autofocus autocomplete="batismo" />
        <x-input-error for="form.batismo" class="mt-2" />
    </div>
    <div class="col-span-6 sm:col-span-4">
        <x-label for="grupo" value="{{ __('Grupos') }}" />
        <select wire:model.live="form.grupo" name="grupo" id="grupo"
            class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
            <option value="">{{ 'Selecione Grupo' }}</option>
            @foreach ($this->form->grupos as $grupo)
                <option value="{{ $grupo }}">{{ $grupo }}</option>
            @endforeach
        </select>
        <x-input-error for="form.grupo" class="mt-2" />
    </div>
    <div class="col-span-6 sm:col-span-4">
        <x-label for="condicao" value="{{ __('Condição') }}" />
        <select name="condicao" wire:model.live="form.condicao"
            class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
            <option value="">Selecione Condição</option>
            @foreach ($this->form->condicoes as $condicao)
                <option value="{{ $condicao }}">{{ $condicao }}</option>
            @endforeach
        </select>
        <x-input-error for="form.condicao" class="mt-2" />
    </div>
    <div class="col-span-6 sm:col-span-4">
        <x-label for="observacao" value="{{ __('Observações') }}" />
        <textarea type="text" wire:model='form.observacao' name="observacao"
            class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" rows="4"
            placeholder="ex:&#10;-Já foi obreira.&#10;-Tem problema de depressão.&#10;-Filhos são pastor. ">{{ old('observacao') }}
            </textarea>
        <x-input-error for="form.observacao" class="mt-2" />
    </div>

</x-slot>
