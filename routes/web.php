<?php

use App\Http\Livewire\Productos;
use App\Http\Livewire\Clientes;
use App\Http\Livewire\Compras;
use App\Http\Livewire\Inventarios;
use App\Http\Livewire\Proveedores;
use App\Models\Compra;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    // config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('productos',Productos::class);
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::middleware([
    'auth:sanctum',
    // config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('inventarios',Inventarios::class);
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
     'verified'
])->group(function () {
    Route::get('cliente',Clientes::class);
  
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('proveedor',Proveedores::class);
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('compra',Compras::class);
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


