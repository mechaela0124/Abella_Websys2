
<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::resource('students', StudentController::class);
Route::get('/', [StudentController::class, 'index']);

Route::get('/students/{id}/delete', [StudentController::class, 'confirmDelete'])->name('students.confirmDelete');
