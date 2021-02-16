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

Route::get('/test', function () {
    return view('test');
})->name('test');


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function() {
    //Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/home', 'DirectorController@index')->name('director.home');
});

Route::group(['prefix' => 'student'], function() {
    Route::get('/home', 'EstudianteController@index')->name('student.home');
    Route::get('/', 'EstudianteController@index');
    Route::get('{asignatura}/encuesta-asignatura', 'EstudianteController@encuestaAsignatura')->name('encuesta.asignatura.view');
    Route::patch('{id_encuesta}/encuesta-asignatura', 'EstudianteController@guardarEncuestaAsignatura')->name('encuesta.asignatura.store');
});

Route::get('/listado-encuestas-asignaturas', 'DirectorController@encuestasAsignaturas')->name('encuestas.asignaturas.view');

Route::resource('director', 'DirectorController');
Route::resource('tutorEntidad', 'EstudianteController');
Route::resource('tutorAcademico', 'EstudianteController');
