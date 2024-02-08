@section('title', 'Início')

<div class="py-6">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">

            <div
                class="p-6 lg:p-8 bg-white dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700">
                <div class="flex -space-x-2 overflow-hidden">
                    @foreach ($membros->take(5) as $membro)
                        <img class="inline-block h-10 w-9 rounded-full ring-2 ring-white"
                            src="{{ url("storage/{$membro->foto}") }}" alt="{{ $membro->nome }}">
                    @endforeach
                </div>
                <h1 class="mt-8 text-2xl font-medium text-gray-900 dark:text-white">
                    Últimos Membros cadastrados!
                </h1>
                <ul role="list" class="divide-y divide-gray-100">
                    @foreach ($membros->sortDesc()->take(3) as $membro)
                        <li class="flex justify-between gap-x-6 py-5">
                            <div class="flex min-w-0 gap-x-4">
                                <img class="h-12 w-10 flex-none rounded-full bg-gray-50"
                                    src="{{ url("storage/{$membro->foto}") }}" alt="">
                                <div class="min-w-0 flex-auto">
                                    <p class="text-sm font-semibold leading-6 text-gray-900">{{ $membro->nome }}</p>
                                    <p class="mt-1 truncate text-xs leading-5 text-gray-500">{{ $membro->grupo }}</p>
                                </div>
                            </div>
                            <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                                <p class="text-sm leading-6 text-gray-900">{{ $membro->profissao }}</p>
                                <p class="mt-1 text-xs leading-5 text-gray-500">Criado/Atualizado <time
                                        datetime="20-12-1914">{{ $membro->updated_at ?? $membro->created_at }}</time>
                                </p>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="bg-gray-200 dark:bg-gray-800 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">
                <div>
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-6 h-6 stroke-gray-400">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                        </svg>
                        <h2 class="ms-3 text-xl font-semibold text-gray-900 dark:text-white">
                            <a href="https://laravel.com/docs">Política de Privacidade</a>
                        </h2>
                    </div>

                    <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                        IGREJA UNIVERSAL DO REINO DE DEUS, com sede na cidade de São Paulo, Estado de São Paulo, na Avenida Celso Garcia, nº 499, Brás, CEP 03015-000, inscrita no CNPJ/ME sob o nº 29744778/0001-97 (“INSTITUIÇÃO”).
                    </p>

                    <p class="mt-4 text-sm">
                        <a href="{{ route('documento') }}" class="inline-flex items-center font-semibold text-indigo-700 dark:text-indigo-300">
                            Explorar documentos

                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="ms-1 w-5 h-5 fill-indigo-500 dark:fill-indigo-200">
                                <path fill-rule="evenodd" d="M5 10a.75.75 0 01.75-.75h6.638L10.23 7.29a.75.75 0 111.04-1.08l3.5 3.25a.75.75 0 010 1.08l-3.5 3.25a.75.75 0 11-1.04-1.08l2.158-1.96H5.75A.75.75 0 015 10z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </p>
                </div>

                <div>
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-6 h-6 stroke-gray-400">
                            <path stroke-linecap="round" d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
                        </svg>
                        <h2 class="ms-3 text-xl font-semibold text-gray-900 dark:text-white">
                            <a href="https://laracasts.com">Videoteca</a>
                        </h2>
                    </div>

                    <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                        Nesse espaço estão disponíveis vídeos sobre eventos, testemunhais e todo acervo da Universal JR.
                    </p>

                    <p class="mt-4 text-sm">
                        <a href="#" class="inline-flex items-center font-semibold text-indigo-700 dark:text-indigo-300">
                            Começar assistir JR-Vídeos

                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="ms-1 w-5 h-5 fill-indigo-500 dark:fill-indigo-200">
                                <path fill-rule="evenodd" d="M5 10a.75.75 0 01.75-.75h6.638L10.23 7.29a.75.75 0 111.04-1.08l3.5 3.25a.75.75 0 010 1.08l-3.5 3.25a.75.75 0 11-1.04-1.08l2.158-1.96H5.75A.75.75 0 015 10z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </p>
                </div>

                <div>
                    <div class="flex items-center">
                        <svg xmlns="#" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-6 h-6 stroke-gray-400">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                        </svg>
                        <h2 class="ms-3 text-xl font-semibold text-gray-900 dark:text-white">
                            <a href="#">Galeria de Fotos</a>
                        </h2>
                    </div>

                    <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                        Veja as galerias de fotos dos eventos realizados pela Universal de Dom José Rodrigues. Sua foto pode estar por lá! Momentos eternizados.
                    </p>
                </div>

                <div>
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-6 h-6 stroke-gray-400">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                        </svg>
                        <h2 class="ms-3 text-xl font-semibold text-gray-900 dark:text-white">
                            Conteúdo senssível
                        </h2>
                    </div>

                    <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                        Conteúdo dedicado a gestão do trabalho evangelístico, cordenação de grupos, liderança, direções, comunicação e ações.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
