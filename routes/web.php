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
Route::get('/', 'UserController@index');
Route::get('/login', 'UserController@login');
Route::get('/user', 'UserController@user');
Route::post('/loginPost', 'UserController@loginPost');
Route::get('/register', 'UserController@register');
Route::post('/registerPost', 'UserController@registerPost');
Route::post('/ibadahraya1', 'updateibadahController@proses');
Route::post('/ibadahraya2', 'updateibadahController@proses2');
Route::get('/logout', 'UserController@logout');
Route::get('/buat', 'UserController@buat');
Route::get('/updateibadah', 'UserController@upp');
Route::get('/table', 'UserController@table');
Route::get('/table_up', 'updateibadahController@tbl');
Route::get('/check', 'UserController@check');
Route::get('/check2', 'UserController@check2');
Route::get('/cari', 'UserController@cari');
Route::get('/cari2', 'UserController@cari2');
Route::get('/tabel1', 'UserController@tabel1');
Route::get('/table2', 'UserController@table2');
Route::get('/menu_hadir', 'UserController@hadir');
Route::get('/absensi/{id}', 'UserController@absen');
Route::get('/absensi2/{id}', 'UserController@absensi2');
// user


Route::get('/loginuser', 'UserController@loginuser');

Route::get('/daftaribadah', 'UserController@daftaribadah');

Route::get('/daftaribadah2', 'UserController@daftaribadah2');

Route::get('/userpilih', 'UserController@userpilih');
Route::get('/m_dokumen', 'UserController@menu_dokumen');
Route::get('/kehadiran1', 'UserController@kehadiran1');
Route::get('/kehadiran2', 'UserController@kehadiran2');

Route::get('/admin/hapus/{id}','UserController@hapus');
Route::get('/admin/hapustable/{id}','UserController@hapustable');
Route::get('/admin/hapustable2/{id}','UserController@hapustable2');

Route::get('/berhasil','UserController@berhasil');
Route::get('/berhasil2','UserController@berhasil2');

Route::get('/gagal','UserController@gagal');

Route::post('/daftaribadah/input', 'updateibadahController@prosesinput1');
Route::post('/daftaribadah/input2', 'updateibadahController@prosesinput2');

Route::get('/daftaribadah/total', 'updateibadahController@total');

Route::get('pdf','PDFMaker@gen');

Route::get('qr-code-g', function () {
	
	\QrCode::size(500)
	->format('png')
	->generate('ItSolutionStuff.com', public_path('images/qrcode.png'));
	
	return view('qrCode');
	

// pesan

	Route::get('/pesan','UserController@buat');
	Route::get('/pesan/sukses','UserController@sukses');
	Route::get('/pesan/peringatan','UserController@peringatan');
	Route::get('/pesan/gagal','UserController@gagal1');

});
