<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="canonical" href="#"/>
	<meta name="description" property="og:description" content="Bem vindo ao portal Universal-JR, o novo portal da Igreja Universal de José Rodrigues, aqui você encontrará informações sobre comportamento cristão, estudos bíblicos, a folha universal, diversão, dicas e muito mais.">
	<meta name="author" content="Pastor Moraes">
	<meta itemprop="url" content="#"/>
	<meta itemprop="name" content="JR-Universal - Portal da Universal de José Rodrigues">
	<meta itemprop="description" content="Bem vindo ao portal Universal.org, o novo portal da Igreja Universal, aqui você encontrará informações sobre comportamento cristão, estudos bíblicos, a folha universal, diversão, dicas e muito mais."/>
	<meta itemprop="image" content="https://www.universal.org/wp-content/themes/portaluniversal-child/resources/assets/images/default-universal.png"/>

    <title>JR | @yield('title')</title>
    <meta property="og:site_name" content="Universal.org - Portal Oficial da Igreja Universal do Reino de Deus">
	<meta property="og:url" content="#"/>	<meta property="og:description" content="Bem vindo ao portal JR-Universal, o novo portal da Igreja Universal de José Rodrigues, aqui você encontrará informações sobre comportamento cristão, estudos bíblicos, a folha universal, diversão, dicas e muito mais.">
	<meta property="og:type" content="website"/>
    <meta property="og:locale" content="pt-BR"/>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="icon" href="https://portalwp.s3.amazonaws.com/wp-content/uploads/2023/07/12170812/icon-logo-universal.png" type="image/png" />
    <link rel="apple-touch-icon" href="https://portalwp.s3.amazonaws.com/wp-content/uploads/2023/07/12170817/apple-touch-icon-180x180-precomposed.png" />
    <link rel="icon" href="https://portalwp.s3.amazonaws.com/wp-content/uploads/2023/07/12170821/apple-touch-icon-precomposed.png" type="image/gif" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
    @stack('styles')
</head>

<body class="font-sans antialiased">
    <x-banner />

    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        @livewire('navigation-menu')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white dark:bg-gray-800 shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>

    @stack('modals')

    @livewireScripts
    @stack('scripts')
</body>

</html>
