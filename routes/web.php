<?php

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActividadesController;
use App\Http\Controllers\SociosController;
use App\Http\Controllers\IngresosClubController;
use App\Http\Controllers\ActividadesSociosController;


/*Peticiones sin loguearse*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('/home', function () {
    return view('home'); // 
})->middleware(['auth', 'verified'])
  ->name('home');

Route::get('/homesocios', [ActividadesSociosController::class, 'index'])
    ->middleware(['auth'])
    ->name('homesocios');




Route::middleware('auth')->group(function () {

    Route::get('/socios/buscar', [SociosController::class, 'buscar'])->name('socios.buscar');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('/socios', SociosController::class);
    Route::resource('/actividades', ActividadesController::class);
    Route::resource('/ingresos', IngresosClubController::class);
   

});



require __DIR__.'/auth.php';
