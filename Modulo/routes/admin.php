<?php
//artivo donde se empiezan a definir la ruta del administrador

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;

Route::get('',[HomeController::class, 'index']);//asignamos el control de la ruta
Route::get('',[AlumnosController::class, 'bajas']);//asignamos el control de la ruta