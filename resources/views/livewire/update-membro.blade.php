@section('title', 'Editar')

<x-form-section submit="save">
    <x-slot name="title">
        {{ __('Update registro de membro.') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Revise todos os dados antes de salvar.') }}
    </x-slot>

    <!--Membro Form -->
    @include('components.form-membro')

    <x-slot name="actions">
        <x-action-message class="me-3" on="saved">
            {{ __('Salvo.') }}
        </x-action-message>

        <x-button wire:click='submit'>
            {{ __('Atualizar') }}
        </x-button>
    </x-slot>
</x-form-section>

@push('scripts')
    <script>
        function phoneMaskBrazil() {
            var key = window.event.key;
            var element = window.event.target;
            var isAllowed = /\d|Backspace|Tab/;
            if (!isAllowed.test(key)) window.event.preventDefault();

            var inputValue = element.value;
            inputValue = inputValue.replace(/\D/g, '');
            inputValue = inputValue.replace(/(^\d{2})(\d)/, '($1) $2');
            inputValue = inputValue.replace(/(\d{4,5})(\d{4}$)/, '$1-$2');

            element.value = inputValue;
        }
    </script>
@endpush
