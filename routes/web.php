<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Http\Controllers\ClienteController;

use App\Http\Controllers\ServiciosController;

use App\Http\Controllers\PersonalController;

use App\Http\Controllers\AdministradorController;
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

Route::view("/registro-cliente", "registrarCliente");

Route::post("/registrar-cliente", [ClienteController::class, "registrar"]);

Route::get("/mostrar-cliente", [ClienteController::class, "mostrar"]);

Route::post("/eliminar-cliente", [ClienteController::class, "eliminar"]);

Route::post("/actualizar-cliente", [ClienteController::class, "actualizar"]);

Route::view("/registro-servicio", "registrarServicios");

Route::post("/registrar-servicio", [ServiciosController::class, "registrar"]);

Route::get("/mostrar-servicio", [ServiciosController::class, "mostrar"]);

Route::post("/eliminar-servicio", [ServiciosController::class, "eliminar"]);

Route::view("/registro-personal", "registrarPersonal");

Route::post("/registrar-personal", [PersonalController::class, "registrar"]);

Route::get("/mostrar-personal", [PersonalController::class, "mostrar"]);

Route::post("/eliminar-personal", [PersonalController::class, "eliminar"]);

Route::post("/actualizar-personal", [PersonalController::class, "actualizar"]);

Route::view("/registro-administrador", "registrarAdministrador");

Route::post("/registrar-administrador", [AdministradorController::class, "registrar"]);

Route::get("/mostrar-administrador", [AdministradorController::class, "mostrar"]);

Route::post("/eliminar-administrador", [AdministradorController::class, "eliminar"]);

Route::post("/actualizar-administrador", [AdministradorController::class, "actualizar"]);



