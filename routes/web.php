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

/* Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return redirect()->route('dashboard.index');
    })->name('dashboard');
});

Route::prefix('dashboard')->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('dashboard.index');

}); */

Route::get('dashboard', [AdminController::class, 'index'])->name('dashboard.index');
