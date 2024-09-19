<?php

use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TicketController::class, 'index']) -> name('index');
Route::get('/create', [TicketController::class, 'create']) -> name('create');
Route::post('/store', [TicketController::class, 'store']) -> name('store');
Route::get('/show{id}', [TicketController::class, 'show'])->name('show');
Route::get('/edit{id}', [TicketController::class, 'edit'])->name('edit');
Route::put('/update{id}', [TicketController::class, 'update'])->name('update');
Route::delete('/destroy{id}', [TicketController::class, 'destroy'])->name('destroy');