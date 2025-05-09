<?php

use App\Http\Controllers\TarefaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TarefaController::class, 'index'])->name('home.index');
Route::post('/adicionar', [TarefaController::class, 'store'])->name('adicionar');
route::delete('/deletar/{tarefa}', [TarefaController::class, 'destroy'])->name('deletar');
Route::get('/editar/{tarefa}', [TarefaController::class, 'edit'])->name('editar');
Route::put('/editar/{tarefa}/salvar', [TarefaController::class, 'update'])->name('atualizar');
Route::patch('/status/{tarefa}', [TarefaController::class, 'statusUpdate'])->name('status.update');
