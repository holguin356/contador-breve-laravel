<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContadorController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return "Bienvenido a la pagina principal";
// });
// Route::get('/curso', function () {
//     return "Bienvenido a la pagina del curso";
// });
// // mediante la URl se envia el parametro $curso por medio de inyeccion
// Route::get('/curso/{Curso}', function ($curso) {
//     return "Bienvenido a la pagina del curso ".$curso;
// });
//llama a la clase contador controlller 
Route::get('/',[ContadorController::class,'index']);
Route::post('/incrementar',[ContadorController::class, 'incrementar']);
Route::post('/decrementar',[ContadorController::class, 'decrementar']);

