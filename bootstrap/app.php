<?php


/*
|--------------------------------------------------------------------------
| Dompdf
|--------------------------------------------------------------------------
|
| Em sua essência, dompdf é (principalmente) um layout HTML compatível com
| CSS 2.1 e um mecanismo de renderização escrito em PHP. É um renderizador
| baseado em estilo: ele baixa e lê folhas de estilo externas, tags de estilo
| embutidas e atributos de estilo de elementos HTML individuais. Ele também
| oferece suporte à maioria dos atributos HTML de apresentação.
|
*/

//$app->register(\Barryvdh\DomPDF\ServiceProvider::class);

/*
|--------------------------------------------------------------------------
| Create The Application
|--------------------------------------------------------------------------
|
| The first thing we will do is create a new Laravel application instance
| which serves as the "glue" for all the components of Laravel, and is
| the IoC container for the system binding all of the various parts.
|
*/

$app = new Illuminate\Foundation\Application(
    $_ENV['APP_BASE_PATH'] ?? dirname(__DIR__)
);

/*
|--------------------------------------------------------------------------
| Bind Important Interfaces
|--------------------------------------------------------------------------
|
| Next, we need to bind some important interfaces into the container so
| we will be able to resolve them when needed. The kernels serve the
| incoming requests to this application from both the web and CLI.
|
*/

$app->singleton(
    Illuminate\Contracts\Http\Kernel::class,
    App\Http\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Console\Kernel::class,
    App\Console\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Debug\ExceptionHandler::class,
    App\Exceptions\Handler::class
);

/*
|--------------------------------------------------------------------------
| Return The Application
|--------------------------------------------------------------------------
|
| This script returns the application instance. The instance is given to
| the calling script so we can separate the building of the instances
| from the actual running of the application and sending responses.
|
*/

return $app;
