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

Route::get('/', function () {
    return view('auths/login');
});

//loginadmin
Route::get('/login', function () {
    return view('auths/login');
})->name('login');
Route::post('/postlogin','AuthController@postlogin');
Route::get('/logout','AuthController@logout');

//loginguru
Route::get('/loginguru', function () {
    return view('auths/loginguru');
})->name('loginguru');
Route::post('/postloginguru','AuthController@postloginguru');
Route::get('/logout','AuthController@logout');

//loginguru
Route::get('/loginsiswa', function () {
    return view('auths/loginsiswa');
})->name('loginsiswa');
Route::post('/postloginsiswa','AuthController@postloginsiswa');
Route::get('/logout','AuthController@logout');


//routeadmin
Route::get('/admin','DashboardController@data');
// Route::get('/admin', function () {
//    	return view('admin/welcome');
// });

//routeadminsiswa
Route::get('/admin/siswa', 'SiswaController@index');
Route::post('/admin/siswa/createsiswa', 'SiswaController@createsiswa');
Route::get('/admin/siswa/{id}/editsiswa', 'SiswaController@editsiswa');
Route::post('/admin/siswa/{id}/updatesiswa', 'SiswaController@updatesiswa');
Route::get('/admin/siswa/{id}/deletesiswa', 'SiswaController@deletesiswa');
Route::get('/admin/siswa/search', 'SiswaController@search');

//routeadminguru
Route::get('/admin/guru', 'GuruController@index');
Route::post('/admin/guru/createguru', 'GuruController@createguru');
Route::get('/admin/guru/{id}/editguru', 'GuruController@editguru');
Route::post('/admin/guru/{id}/updateguru', 'GuruController@updateguru');
Route::get('/admin/guru/{id}/deleteguru', 'GuruController@deleteguru');
Route::get('/admin/guru/search', 'GuruController@search');



//routeguru
Route::get('/guru', function () {
    return view('guru/welcome');
});
Route::get('/guru/dataguru', 'GuruAjarController@index');

//routegurusiswa
Route::get('/guru/siswa', 'GuruSiswaController@index');
Route::post('/guru/siswa/createsiswa', 'GuruSiswaController@creategurusiswa');
Route::get('/guru/siswa/{id}/editsiswa', 'GuruSiswaController@editgurusiswa');
Route::post('/guru/siswa/{id}/updatesiswa', 'GuruSiswaController@updategurusiswa');
Route::get('/guru/siswa/{id}/deletesiswa', 'GuruSiswaController@deletegurusiswa');
Route::get('/guru/siswa/search', 'GuruSiswaController@search');



//routesiswa
Route::get('/siswa', function () {
    return view('siswa/welcome');
});
Route::get('/siswa/datasiswa', 'SiswaAjarController@index');
Route::get('/siswa/{id}/detailsiswa', 'SiswaController@detailsiswa');
Route::get('/siswa/search', 'SiswaAjarController@search');



//routesiswaguru
Route::get('/siswa/dataguru', 'SiswaGuruController@index');


