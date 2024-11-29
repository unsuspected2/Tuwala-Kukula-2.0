<?php
use App\Http\Controllers\VisitanteController;
use App\Http\Controllers\AdminController;
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
    return redirect()->route('visitantes');
});
Route::get('/visitantes', [VisitanteController::class, 'index'])->name('visitantes');

 Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    //from register
])->group(function () {
    Route::get('/dashboard', function () {
        return redirect()->route('dashboard.index');
    })->name('dashboard');

});
            //from redirect
Route::prefix('dashboard')->group(function () {
    // Rota personalizada para o painel de administração (Dashboard)
Route::get('/admin/index', [AdminController::class, 'index'])->name('dashboard.index');

// Rota para criar um novo recurso (formulário)
Route::get('/admin/create', [AdminController::class, 'create'])->name('admin.create');

// Rota para salvar um novo recurso (armazenamento)
Route::post('/admin', [AdminController::class, 'store'])->name('admin.store');

// Rota para exibir um recurso específico
Route::get('/admin/{id}', [AdminController::class, 'show'])->name('admin.show');

// Rota para editar um recurso existente (formulário)
Route::get('/admin/{id}/edit', [AdminController::class, 'edit'])->name('admin.edit');

// Rota para atualizar um recurso existente (atualização)
Route::put('/admin/{id}', [AdminController::class, 'update'])->name('admin.update');

// Rota para excluir um recurso existente
Route::delete('/admin/{id}', [AdminController::class, 'destroy'])->name('admin.destroy');












});
































































































/*
Route::get('dashboard/admin', [AdminController::class, 'index'])->name('dashboard.index');
 */
