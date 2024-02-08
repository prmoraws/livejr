<?php

use App\Livewire\{
    CreateMembro,
    Documento,
    Index,
    ListarMembros,
    ShowMembro,
    UpdateMembro
};
use Illuminate\Support\Facades\Route;

Route::get('index', Index::class)
    ->name('index')
    ->middleware('auth');
Route::get('documento', Documento::class)
    ->name('documento');
Route::get('listar-membros', ListarMembros::class)
    ->name('listar-membros')
    ->middleware('auth');
Route::get('create-membro', CreateMembro::class)
    ->name('create-membro')
    ->middleware('auth');
Route::get('show-membro/{id}', ShowMembro::class)
    ->name('show-membro')
    ->middleware('auth');
Route::get('update-membro/{id}', UpdateMembro::class)
    ->name('update-membro')
    ->middleware('auth');

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
