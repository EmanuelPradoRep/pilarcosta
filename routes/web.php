<?php

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActividadesController;
use App\Http\Controllers\SociosController;
use App\Http\Controllers\IngresosClubController;
use App\Http\Controllers\ActividadesSociosController;
use App\Http\Controllers\ActividadDocenteController;
use App\Http\Controllers\ActividadAlumnoController;
use App\Http\Controllers\PersonasController;


/*Peticiones sin loguearse*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('/home', function () {
    return view('home'); // 
})->middleware(['auth', 'verified'])
  ->name('home');

Route::get('/homepersonas', [ActividadAlumnoController::class, 'index'])
    ->middleware(['auth'])
    ->name('homepersonas');




Route::middleware('auth')->group(function () {

    Route::get('/socios/buscar', [SociosController::class, 'buscar'])->name('socios.buscar');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('/socios', SociosController::class);
    Route::resource('/personas', PersonasController::class);
    Route::resource('/actividades', ActividadesController::class);
    Route::resource('/ingresos', IngresosClubController::class);
    Route::resource('/actividadesdocente', ActividadDocenteController::class);
    Route::resource('/actividadesalumno', ActividadAlumnoController::class);
    Route::get('/actividadespanel', [ActividadAlumnoController::class, 'adminIndex'])->name('actividadespanel');
   

});



require __DIR__.'/auth.php';
