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

//untuk pemanggilan langsung ke fungsi dan controller tertentu
Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/mahasiswa', 'MahasiswaController@index');

// students
// Route::get('/students', 'StudentsController@index');
// Route::get('/students/create', 'StudentsController@create');
// Route::get('/students/{student}', 'StudentsController@show');
// Route::post('/students', 'StudentsController@store');
// Route::delete('/students/{student}', 'StudentsController@destroy');
// Route::get('/students/{student}/edit', 'StudentsController@edit');
// Route::put('/students/{student}', 'StudentsController@update');

// sudah kebuat secara khusus routes default oleh laravel
Route::resource('students', 'StudentsController');


//untuk menggunakan pemanggilan slug
// Route::get('/about/{slug}', 'AuthController@show' );

//pemanggilan biasa tanpa controller
// Route::get('/about', function () {
//     $nama = 'Atika Istiqomah';
//     return view('about', ['namaku' => $nama]);
// });
