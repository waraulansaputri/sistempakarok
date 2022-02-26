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

Route::get('/', 'diagnosaController@front')->name('diagnosa.front');
Route::get('logout', 'diagnosaController@logout')->name('diagnosa.logout');
Route::get('tentang', 'diagnosaController@tentang')->name('diagnosa.tentang');
Route::get('login_pasien', 'diagnosaController@login_pasien')->name('diagnosa.login_pasien');
Route::post('login_pasien', 'diagnosaController@login_post')->name('diagnosa.login_post');
Route::get('registrasi', 'diagnosaController@registrasi')->name('diagnosa.registrasi');
Route::post('registrasi', 'diagnosaController@registrasi_store')->name('diagnosa.registrasi_store');
Route::get('index', 'diagnosaController@index')->name('diagnosa.index');
Route::get('diagnostic','diagnosaController@preDiagnostic')->name('diagnosa.preform');
Route::post('diagnostic','diagnosaController@start')->name('diagnosa.start');
Route::get('diag_penyakit/{id}','diagnosaController@penyakit')->name('detail.penyakit');
Route::get('diag_penyakit/{id}/gejalalist','diagnosaController@gejalaList')->name('detail.penyakit.gejala');


Route::group(['prefix' => 'admin'], function() {
    Route::middleware(['auth'])->group(function() {
    	
    	
        Route::group(['prefix' => 'gejala'], function() {
            Route::get('list','gejalaController@listGejala')->name('gejala.list');
        });
    	Route::resource('gejala','gejalaController');
    	//users
		
    });
});

		Route::get('/users', 'UserController@index');
		Route::get('/users/create', 'UserController@create')->name('users.create');
		Route::post('/users', 'UserController@store')->name('users.store');
		Route::get('/users/edit/{id_users}', 'UserController@edit')->name('users.edit');
		Route::put('/users/update/{id_users}', 'UserController@update')->name('users.update');
		Route::get('/users/destroy/{id_users}', 'UserController@destroy')->name('users.destroy');
		
		Route::get('/pakar', 'PakarController@index');
		Route::get('/pakar/create', 'PakarController@create')->name('pakar.create');
		Route::post('/pakar', 'PakarController@store')->name('pakar.store');
		Route::get('/pakar/edit/{id_pakar}', 'PakarController@edit')->name('pakar.edit');
		Route::put('/pakar/update/{id_pakar}', 'PakarController@update')->name('pakar.update');
		Route::get('/pakar/destroy/{id_pakar}', 'PakarController@destroy')->name('pakar.destroy');
		
		Route::get('/penyakit', 'PenyakitController@index')->name('penyakit.index');
		Route::get('/penyakit/create', 'PenyakitController@create')->name('penyakit.create');
		Route::post('/penyakit', 'PenyakitController@store')->name('penyakit.store');
		Route::get('/penyakit/edit/{id_penyakit}', 'PenyakitController@edit')->name('penyakit.edit');
		Route::put('/penyakit/update/{id_penyakit}', 'PenyakitController@update')->name('penyakit.update');
		Route::get('/penyakit/destroy/{id_penyakit}', 'PenyakitController@destroy')->name('penyakit.destroy');
		
		Route::get('/gejala', 'GejalaController@index');
		Route::get('/gejala/create', 'GejalaController@create')->name('gejala.create');
		Route::post('/gejala', 'GejalaController@store')->name('gejala.store');
		Route::get('/gejala/edit/{id_gejala}', 'GejalaController@edit')->name('gejala.edit');
		Route::put('/gejala/update/{id_gejala}', 'GejalaController@update')->name('gejala.update');
		Route::get('/gejala/destroy/{id_gejala}', 'GejalaController@destroy')->name('gejala.destroy');
		
		Route::get('/gejalapenyakit', 'GejalaPenyakitController@index');
		Route::get('/gejalapenyakit/create', 'GejalaPenyakitController@create')->name('gejalapenyakit.create');
		Route::post('/gejalapenyakit', 'GejalaPenyakitController@store')->name('gejalapenyakit.store');
		Route::get('/gejalapenyakit/edit/{id_gejalapenyakit}', 'GejalaPenyakitController@edit')->name('gejalapenyakit.edit');
		Route::put('/gejalapenyakit/update/{id_gejalapenyakit}', 'GejalaPenyakitController@update')->name('gejalapenyakit.update');
		Route::get('/gejalapenyakit/destroy/{id_gejalapenyakit}', 'GejalaPenyakitController@destroy')->name('gejalapenyakit.destroy');
		
		Route::get('/rekam_medik', 'RekamMedikController@index');
		Route::get('/rekam_medik/destroy/{id_rekam_medik}', 'RekamMedikController@destroy')->name('rekam_medik.destroy');
		
		
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
