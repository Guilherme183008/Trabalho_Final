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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('tipo_ingrediente', Tipo_ingredienteController::class);

// Route::get('/tipo_ingrediente/create', [Tipo_ingredienteController::class, 'create'])->name('tipo_ingrediente.create');

// GET /tipo_ingrediente: Listagem de tipo_ingrediente (index)
// GET /tipo_ingrediente/create: Formulário para criar um novo tipo_ingrediente (create)
// POST /tipo_ingrediente: Salvar um novo tipo_ingrediente no banco de dados (store)
// GET /tipo_ingrediente/{id}: Exibir detalhes de um tipo_ingrediente específico (show)
// GET /tipo_ingrediente/{id}/edit: Formulário para editar um tipo_ingrediente (edit)
// PUT/PATCH /tipo_ingrediente/{id}: Atualizar os dados de um tipo_ingrediente no banco de dados (update)
// DELETE /tipo_ingrediente/{id}: Excluir um tipo_ingrediente do banco de dados (destroy)

Route::resource('ingredientes', IngredientesController::class);

Route::resource('receitas', ReceitasController::class);

Route::resource('pedidos', PedidosController::class);

Route::resource('compras', ComprasController::class);

require __DIR__.'/auth.php';
