<?php

use App\Http\Controllers\HomeController;
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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

//ROTAS
Route::get('/',[HomeController::class,'index'])->name('user');
Route::get('/adicionar',[HomeController::class,'create'])->name('user.create');
Route::post('/adicionar',[HomeController::class,'store'])->name('user.store');
Route::get('/usuarios/{id}',[HomeController::class,'show'])->name('user.show');
Route::get('/usuario/editar/{id}',[HomeController::class,'edit'])->name('user.edit');
Route::post('/usuario/update/{id}',[HomeController::class,'update'])->name('user.update');
Route::delete('/usuario/delete/{id}',[HomeController::class,'destroy'])->name('user.destroy');