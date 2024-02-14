@php
    $url = route('register');
    $button_ = "<a href='{$url}' class='ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500'>Registre-se</a>";

@endphp

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body class="antialiased">
    <div
        class="absolute inset-0 -z-10 bg-[radial-gradient(45rem_50rem_at_top,theme(colors.indigo.100),white)] opacity-20">

        @if (Route::has('login'))
            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                @auth
                    <a href="{{ url('/index') }}"
                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Início</a>
                @else
                    <a href="{{ route('login') }}"
                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Entrar</a>

                    @if (Route::has('register'))
                        <button
                            class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400  focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                            onclick="myFunction()">Clique aqui</button>
                        <p id="btn_reg"></p>
                    @endif
                @endauth
            </div>
        @endif

        <div class="max-w-7xl mx-auto p-6 lg:p-8 ">
            <div class="mt-16">
                <section class="rounded-lg  relative isolate overflow-hidden bg-white px-6 py-24 sm:py-32 lg:px-8">
                    <div class="mx-auto max-w-2xl lg:max-w-4xl">
                        <img class="mx-auto h-12" src="{{ url('storage/profile-photos/logo-domjr.svg') }}"
                            alt="">
                        <figure class="mt-10">
                            <blockquote
                                class="text-center text-xl font-semibold leading-8 text-gray-900 sm:text-2xl sm:leading-9">
                                <p>“Disseram-lhe, pois: Que faremos para executarmos as obras de Deus? Jesus respondeu,
                                    e disse-lhes: A obra de Deus é esta: Que creiais Naquele que Ele enviou.” João
                                    6.28,29</p>
                            </blockquote>
                            <figcaption class="mt-10">
                                <img class="mx-auto h-48 w-48 rounded-full"
                                    src="{{ url('storage/profile-photos/iurd-logo-256.jpg') }}" alt="">
                                <div class="mt-4 flex items-center justify-center space-x-3 text-base">
                                    <div class="font-semibold text-gray-900"> Universal </div>
                                    <svg viewBox="0 0 2 2" width="7" height="7" aria-hidden="true"
                                        class="fill-gray-900">
                                        <circle cx="1" cy="1" r="1" />
                                    </svg>
                                    <div class="text-gray-600"> Dom José Rodrigues/BA</div>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </section>
            </div>
        </div>
    </div>
    @livewireScripts
    <script>
        function myFunction() {
            var x;
            var token = prompt("Digite seu token");
            if (token == 2024) {
                x = "<?php print $button_; ?>";
                document.getElementById("btn_reg").innerHTML = x;
            } else if (token == '' || token == null) {

            } else{
                x = "Token incorreto";
                document.getElementById("btn_reg").innerHTML = x;
            }
        }
    </script>
</body>

</html>
