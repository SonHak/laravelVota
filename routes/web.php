<?php

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
     return view('home');
 });
// Route::get('login', function () {
//     return view('auth.login');
// });
// Route::get('logout', function () {
//     return view('pagina logout');
// });
// Route::get('consultas', function () {
//     return view('consultas.index');
// });
// Route::get('consultas/crear', function () {
//     return view('consultas.crear');
// });
// Route::get('consultas/votar/{id}', function ($id) {
//     return view('consultas.votar', array('id'=> $id));
// });
// Route::get('consultas/editar/{id}', function ($id) {
//     return view('consultas.editar', array('id'=> $id));
// });

Route::resource("consultas","ConsultaController");