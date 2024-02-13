<div
    class="p-6 lg:p-8 bg-white dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700">
    <div class="flex -space-x-2 overflow-hidden">
        @foreach (App\Models\Membro::all()->take(5) as $membro)
            <img class="inline-block h-10 w-9 rounded-full ring-2 ring-white" src="{{ url("storage/{$membro->foto}") }}"
                alt="{{ $membro->nome }}">
        @endforeach
    </div>
    <h1 class="mt-8 text-2xl font-medium text-gray-900 dark:text-white">
        Últimos Membros cadastrados!
    </h1>
    <ul role="list" class="divide-y divide-gray-100">
        @foreach (App\Models\Membro::all()->sortDesc()->take(3) as $membro)
            <li class="flex justify-between gap-x-6 py-5">
                <div class="flex min-w-0 gap-x-4">
                    <img class="h-12 w-10 flex-none rounded-full bg-gray-50" src="{{ url("storage/{$membro->foto}") }}"
                        alt="">
                    <div class="min-w-0 flex-auto justify-start">
                        <p class="text-sm font-semibold leading-6 text-gray-900"> {{ $membro->nome }}</p>
                        <p class="mt-1 truncate text-xs leading-5 text-gray-500"> {{ $membro->grupo }}</p>
                    </div>
                </div>
                {{-- <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                    <p class="text-sm leading-6 text-gray-900">{{ $membro->profissao }} </p>
                    <p class="mt-1 text-xs leading-5 text-gray-500">Criado/Atualizado <time
                            datetime="2023-01-23T13:23Z">{{ $membro->updated_at ?? $membro->created_at }}</time></p>
                </div> --}}
            </li>
        @endforeach
    </ul>
</div>
