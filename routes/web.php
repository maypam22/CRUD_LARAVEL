<?php

use Illuminate\Support\Facades\Route;
use App\Mail\ContactoMailable;
use Illuminate\Support\Facades\Mail;
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

Route::get('tarea/registrar', [App\Http\Controllers\TareaController::class, 'create'])->name('tarea.create');
Route::get('tarea/{tarea}/ver', [App\Http\Controllers\TareaController::class, 'show'])->name('tarea.show');
Route::post('tarea/guardar', [App\Http\Controllers\TareaController::class, 'store'])->name('tarea.store');
Route::get('tarea/listar', [App\Http\Controllers\TareaController::class, 'index'])->name('tarea.index');
Route::get('tarea/{tarea}/editar', [App\Http\Controllers\TareaController::class, 'edit'])->name('tarea.edit');
Route::put('tarea/{tarea}/actualizar', [App\Http\Controllers\TareaController::class, 'update'])->name('tarea.update');
Route::delete('tarea/{tarea}/eliminar', [App\Http\Controllers\TareaController::class, 'destroy'])->name('tarea.destroy');
Route::get('contacto', [App\Http\Controllers\ContactoController::class, 'index'])->name('contacto.index');
Route::post('contacto', [App\Http\Controllers\ContactoController::class, 'store'])->name('contacto.store');