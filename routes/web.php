<?php

use App\Http\Controllers\AsignarController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\PermisoController;
use App\Http\Controllers\verEventosController;

/*
|--------------------------------------------------------------------------
| RUTAS DE NAVEGACION 
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('eventos', [verEventosController::class, 'vereventos'])->name('vereventos');
Route::get('/eventos/comprar/{id}', [TicketController::class, 'compras'])->name('compras');


Route::get('nosotros', function () {
    return view('nosotros');
});

Route::get('contacto', function () {
    return view('contacto');
});





Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/profile', [UsuarioController::class, 'profile']);
    Route::resource('/client', ClienteController::class)->names('cliente');
    Route::resource('/ticket', TicketController::class)->names('ticket');
    Route::resource('/roles', RoleController::class)->names('roles');
    Route::resource('/permisos', PermisoController::class)->names('permisos');
    Route::resource('/usuarios', AsignarController::class)->names('asignar');
});

Route::get('/auth/redirect', [AuthController::class, 'redirect']);
Route::get('/auth/callback', [AuthController::class, 'callback']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
