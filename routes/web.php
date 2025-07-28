<?php

use App\Http\Controllers\KelasController;
use App\Http\Controllers\SiswaController;
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
    // return view('welcome'); before
    return view('layouts.master'); // setelah before
});

Route::get('/students', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/classes', [KelasController::class, 'index'])->name('kelas.index');

Route::get('/hello', function () {
    return view('hello', ['nama' => 'Asep Koswara']);
});