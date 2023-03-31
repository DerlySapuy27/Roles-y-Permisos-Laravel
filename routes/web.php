<?php

use Illuminate\Support\Facades\Route;

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


Auth::routes();
 
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/prueba', [App\Http\Controllers\HomeController::class, 'prueba'])->name('prueba');
Route::get('/nosotros', [App\Http\Controllers\HomeController::class, 'nosotros'])->name('nosotros');
Route::get('/contacto', [App\Http\Controllers\HomeController::class, 'contacto'])->name('contacto');
Route::get('/adminlite', [App\Http\Controllers\HomeController::class, 'adminlite'])->name('adminlite');
//Rutas de la calculadora//
Route::get('/calculadora', [App\Http\Controllers\Calculatorcontroller::class, 'index'])->name('calculadora');
Route::post('/resultado', [App\Http\Controllers\Calculatorcontroller::class, 'resultado'])->name('resultado');
//Rutas CRUD Aprendices//
Route::get('/aprendices', [App\Http\Controllers\Apprenticecontroller::class, 'index'])->name('aprendices');
Route::get('/aprendices/add', [App\Http\Controllers\Apprenticecontroller::class, 'getaprendicesadd'])->name('aprendices.add');
Route::post('/aprendices/add', [App\Http\Controllers\Apprenticecontroller::class, 'postaprendicesadd'])->name('aprendices.add');
Route::get('/aprendices/edit/{id}', [App\Http\Controllers\Apprenticecontroller::class, 'getaprendicesedit'])->name('aprendices.edit');
Route::post('/aprendices/edit/{id}', [App\Http\Controllers\Apprenticecontroller::class, 'postaprendicesedit'])->name('aprendices.edit');
Route::get('/aprendices/delete/{id}', [App\Http\Controllers\Apprenticecontroller::class, 'getaprendicesdelete'])->name('aprendices.delete');





