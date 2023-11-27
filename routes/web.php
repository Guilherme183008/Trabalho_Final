<?php

use App\Http\Controllers\IngredientesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Tipo_ingredienteController;
use App\Http\Controllers\ReceitasController;
use App\Http\Controllers\PedidosController;
use App\Http\Controllers\ComprasController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/receitas', function () {
    return view('receitas');
})->middleware(['auth', 'verified'])->name('receitas');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('tipo_ingrediente', Tipo_ingredienteController::class);

Route::resource('ingredientes', IngredientesController::class);

Route::resource('receitas', ReceitasController::class);

Route::resource('pedidos', PedidosController::class);

Route::resource('compras', ComprasController::class);

require __DIR__.'/auth.php';
