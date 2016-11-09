<?php

/*
  |--------------------------------------------------------------------------
  | Routes File
  |--------------------------------------------------------------------------
  |
  | Here is where you will register all of the routes in an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */
Route::group(['middleware' => 'cors', 'prefix' => 'api/v1'], function() {
    Route::resource('authenticate', 'AuthenticateController', ['only' => ['index']]);
    Route::post('authenticate', 'AuthenticateController@authenticate');
    Route::get('authenticate/user', 'AuthenticateController@getAuthenticatedUser');
});


Route::group(['middleware' => 'cors'/* cors artinya bisa dipakai beberapa sistem */, 'prefix'/* untuk linksistem */ => 'api/v1'], function() {
    Route::resource('programstudi', 'prodiControler', ['only' => ['index']]);
      Route::resource('progdi', 'prodiAdminControler');
    Route::resource('fakult','fakultasController',['only'=>['index']]);
      Route::resource('fakultampil','fakultastampilController',['only'=>['index']]);
    Route::resource('beasiswa', 'beasiswaController',['only'=>['index']]);
    Route::resource('berita', 'beritaController',['only'=>['index']]);
    Route::resource('kabupaten', 'kabupatenController', ['only' => ['index']]);
    Route::resource('propinsi', 'propinsiController', ['only' => ['index']]);
    Route::resource('pendidikan', 'pendidikanController', ['only' => ['index']]);
    Route::resource('penghasilan', 'penghasilanController', ['only' => ['index']]);
    Route::resource('agama', 'agamaController', ['only' => ['index']]);
    Route::resource('pendaftaran', 'PendaftaranController');
    Route::resource('negara', 'negaraController', ['only' => ['index']]);
    Route::resource('informasiUKT', 'informasiUKTController', ['only' => ['index']]);
    Route::resource('calonmahasiswa','calonmahasiswaController');
    Route::resource('pen','PenmabaController');
    Route::resource('snm','snmptnController');
    Route::resource('sbm','sbmptnController');
    Route::resource('pendaftar', 'pesertaController',['only' => ['store','update']]);
    Route::resource('pendaftarpen', 'penmabauserController',['only' => ['store','update','show']]);
});
