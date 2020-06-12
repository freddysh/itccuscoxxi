<?php

use App\Rubro;
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
// rutas para la vista
Route::post('/empresa', [
    'uses' => 'EmpresaController@buscar',
    'as' => 'empresa.buscar.path',
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
