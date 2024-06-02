<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/*
HTTP Method
1. Get untuk menampilkan data
2. Post untuk menambahkan data
3. Put untuk mengubah data
4. Delete untuk menghapus data
});

*/

Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');

Route::get('/tasks/{id}', [TaskController::class, 'show'])->name('tasks.show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');