<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\ClientesController;
use App\Http\Controllers\Admin\CitasController;
use App\Http\Controllers\Admin\ComprasController;
use App\Http\Controllers\Admin\DetalleComprasController;
use App\Http\Controllers\Admin\EmpleadosController;
use App\Http\Controllers\Admin\VentasController;
use App\Http\Controllers\Admin\InventariosController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\RegisterController;

use App\Http\Controllers\User\CitasUController;
use App\Http\Controllers\User\ClientesUController;
use App\Http\Controllers\User\VentasUController;
use App\Http\Controllers\Admin\PagosController;



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

Route::get('home',[HomeController::class, 'index']);
Route::get('', [ClientesController::class, 'pdf'])->name('pdf');
Route::get('admin/citas/cpdf', [CitasController::class, 'cpdf'])->name('cpdf');
Route::get('admin/compras/copdf', [ComprasController::class, 'copdf'])->name('copdf');
Route::get('admin/empleados/epdf', [EmpleadosController::class, 'epdf'])->name('epdf');
Route::get('admin/ventas/vpdf', [VentasController::class, 'vpdf'])->name('vpdf');
//Route::get('admin/ventas/ticketpdf', [VentasController::class, 'ticketpdf'])->name('ticketpdf');
Route::get('admin/inventarios/ipdf', [InventariosController::class, 'ipdf'])->name('ipdf');
Route::resource('clientes', ClientesController::class)->middleware('can:admin.clientes.index')->names('admin.clientes');
Route::resource('citas', CitasController::class)->middleware('can:admin.citas.index')->names('admin.citas');
Route::resource('compras', ComprasController::class)->middleware('can:admin.compras.index')->names('admin.compras');
Route::resource('detallecompras', DetalleComprasController::class)->middleware('can:admin.detallecompras.index')->names('admin.detallecompras');
Route::resource('empleados', EmpleadosController::class)->middleware('can:admin.empleados.index')->names('admin.empleados');
Route::resource('ventas', VentasController::class)->middleware('can:admin.ventas.index')->names('admin.ventas');
Route::resource('inventarios', InventariosController::class)->middleware('can:admin.inventarios.index')->names('admin.inventarios');
Route::resource('registros', RegisterController::class)->middleware('can:admin.registro.index')->names('admin.registro');
Route::resource('users', UserController::class)->middleware('can:admin.users.index')->names('admin.users');
Route::resource('pagos', PagosController::class)->names('admin.pagos');

/*********************************/
Route::resource('citasU', CitasUController::class)->names('usuario.citasU');
Route::resource('clientesU', ClientesUController::class)->names('usuario.clientesU');
Route::resource('ventasU', VentasUController::class)->names('usuario.ventasU');