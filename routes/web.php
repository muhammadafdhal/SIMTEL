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
    return view('template/app');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::get('/dashboard', 'DashboardController@index');
Route::get('/', 'FrontController@index');

Route::get('/jenis/{kamar}', 'FrontController@kamar');

Route::get('/booking/{ik_id}', 'FrontController@booking');
Route::post('/booking/{ik_id}/save', 'FrontController@pesan');
Route::get('/faktur/{res_id}', 'FrontController@faktur');
Route::get('/faktur/faktur_pdf/{res_id}', 'FrontController@faktur_pdf');

Route::get('/login_tamu', 'FrontController@login_tamu');

Route::post('/login_tamu/save', 'LoginTamuController@login');

// Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
// Route::post('login', 'Auth\LoginController@login');
// Route::post('logout', 'Auth\LoginController@logout')->name('logout');

//Data user
Route::get('/user', 'UserController@index');
Route::get('/user/tambah', 'UserController@create');
Route::post('/user/tambah/save', 'UserController@store');
Route::get('/user/edit/{id}', 'UserController@edit');
Route::patch('/user/edit/{id}/save', 'UserController@update');
Route::delete('/user/delete/{id}', 'UserController@destroy');

//Data reservation
Route::get('/reservation', 'ReservationController@index');
Route::get('/reservation/tambah', 'ReservationController@create');
Route::post('/reservation/tambah/save', 'ReservationController@store');
Route::get('/reservation/edit/{res_id}', 'ReservationController@edit');
Route::patch('/reservation/edit/{res_id}/save', 'ReservationController@update');
Route::delete('/reservation/delete/{res_id}', 'ReservationController@destroy');
Route::get('/reservation/save/{res_id}', 'ReservationController@verified');
Route::get('/reservation/batal/{res_id}', 'ReservationController@notverified');
Route::get('/reservation/kosongkan/{ik_id}', 'ReservationController@status_kamar');
Route::get('/reservation/cetak_pdf', 'ReservationController@cetak_pdf');
Route::get('/reservation/laporan', 'ReservationController@laporan');
Route::post('/reservation/laporan/pilih_hari', 'ReservationController@pilih');
Route::post('/reservation/laporan/pilih_bulan', 'ReservationController@pilih2');
Route::post('/reservation/laporan/pilih_tahun', 'ReservationController@pilih3');


//Data pembayaran
Route::get('/pembayaran', 'PembayaranController@index');
Route::get('/pembayaran/tambah', 'PembayaranController@create');
Route::post('/pembayaran/tambah/save', 'PembayaranController@store');
Route::get('/pembayaran/edit/{pb_id}', 'PembayaranController@edit');
Route::patch('/pembayaran/edit/{pb_id}/save', 'PembayaranController@update');
Route::delete('/pembayaran/delete/{pb_id}', 'PembayaranController@destroy');
Route::get('/pembayaran/cetak_pdf', 'PembayaranController@cetak_pdf');
Route::get('/pembayaran/laporan', 'PembayaranController@laporan');
Route::post('/pembayaran/laporan/pilih_hari', 'PembayaranController@pilih');
Route::post('/pembayaran/laporan/pilih_bulan', 'PembayaranController@pilih2');
Route::post('/pembayaran/laporan/pilih_tahun', 'PembayaranController@pilih3');


//Data info kamar
Route::get('/info_kamar', 'KamarController@index');
Route::get('/info_kamar/tambah', 'KamarController@create');
Route::post('/info_kamar/tambah/save', 'KamarController@store');
Route::get('/info_kamar/edit/{ik_id}', 'KamarController@edit');
Route::patch('/info_kamar/edit/{ik_id}/save', 'KamarController@update');
Route::delete('/info_kamar/delete/{ik_id}', 'KamarController@destroy');

//Data info kategori kamar
Route::get('/harga_jeka', 'HargaJekaController@index');
Route::get('/harga_jeka/tambah', 'HargaJekaController@create');
Route::post('/harga_jeka/tambah/save', 'HargaJekaController@store');
Route::get('/harga_jeka/edit/{hj_id}', 'HargaJekaController@edit');
Route::patch('/harga_jeka/edit/{hj_id}/save', 'HargaJekaController@update');
Route::delete('/harga_jeka/delete/{hj_id}', 'HargaJekaController@destroy');

//Data info promo
Route::get('/info_promo', 'InfoPromoController@index');
Route::get('/info_promo/tambah', 'InfoPromoController@create');
Route::post('/info_promo/tambah/save', 'InfoPromoController@store');
Route::get('/info_promo/edit/{ip_id}', 'InfoPromoController@edit');
Route::patch('/info_promo/edit/{ip_id}/save', 'InfoPromoController@update');
Route::delete('/info_promo/delete/{ip_id}', 'InfoPromoController@destroy');

// //Data front
// Route::get('/front', 'FrontController@index');
// Route::get('/front/tambah', 'FrontController@create');
// Route::post('/front/tambah/save', 'FrontController@store');
// Route::get('/front/edit/{ip_id}', 'FrontController@edit');
// Route::patch('/front/edit/{ip_id}/save', 'FrontController@update');
// Route::delete('/front/delete/{ip_id}', 'FrontController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
