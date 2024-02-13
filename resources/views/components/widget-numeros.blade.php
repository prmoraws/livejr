<div class="bg-white py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <dl class="grid grid-cols-1 gap-x-8 gap-y-16 text-center lg:grid-cols-3">
            <div class="mx-auto flex max-w-xs flex-col gap-y-4">
                <dt class="text-2xl leading-7 text-gray-600"> {{ App\Models\Membro::count() }} Membros</dt>
                <dd class="order-first text-3xl font-bold tracking-tight text-gray-900 sm:text-5xl">
                    Membros cadastrados
                </dd>
            </div>
            <div class="mx-auto flex max-w-xs flex-col gap-y-4">
                <dt class="text-2xl leading-7 text-gray-600">Batizados
                    {{ App\Models\Membro::where('condicao', 'Batizado nas Águas')->count() }}</dt>
                <dd class="order-first text-3xl font-bold tracking-tight text-gray-900 sm:text-5xl">
                    Batizados nas ásguas
                </dd>
            </div>
            <div class="mx-auto flex max-w-xs flex-col gap-y-4">
                <dt class="text-2xl leading-7 text-gray-600">Em algum grupo
                    {{ App\Models\Membro::where('grupo', '<>', 'Não está em um grupo')->count() }}</dt>
                <dd class="order-first text-3xl font-bold tracking-tight text-gray-900 sm:text-5xl">
                    Membros em algum grupo
                <dd>
            </div>
        </dl>
    </div>
</div>
