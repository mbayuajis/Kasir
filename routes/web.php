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

Route::group(['middleware' => 'auth:web'], function () {
    Route::get('/dashboard', 'HomeController@index');
    Route::get('/', 'HomeController@index');
	Route::get('/logout', 'LoginController@logout');

	Route::post('/ganti-password', 'LoginController@gantpass');

	Route::resource('user', 'UserController')->only([
	    'index', 'show', 'store', 'update', 'destroy'
	]);

	Route::resource('user', 'UserController')->except([
	    'create'
	]);

	Route::resource('kasir', 'KasirController')->only([
	    'index', 'show', 'store', 'update', 'destroy'
	]);

	Route::resource('kasir', 'KasirController')->except([
	    'create'
	]);

	Route::resource('barang', 'BarangController')->only([
	    'index', 'show', 'store', 'update', 'destroy'
	]);

	Route::resource('barang', 'BarangController')->except([
	    'create'
	]);
	
	Route::get('/kasir/belanjaan/{id}', 'KasirController@belanjaan');
	Route::get('/kasir/belanjaan/{id}/refrs', 'KasirController@refrsbelanjaan');
	Route::post('/kasir/belanjaan/{id}', 'KasirController@storeBelanjaan');
	Route::post('/kasir/belanjaan/{id}/simpan', 'KasirController@simpanBelanjaan');
	Route::delete('/kasir/belanjaan/{notrans}/{barang}', 'KasirController@destroyBelanjaan');
	Route::delete('/kasir/belanjaan/{notrans}/{barang}/per', 'KasirController@destroyBelanjaanper');

	Route::get('/penjualan', 'KasirController@penjualanHariini');

	Route::get('/report', 'ReportController@index');
});

Route::group(['middleware' => 'guest'], function () {
	Route::get('/login', function (){
		return view('login');
	})->name('login');

	Route::post('/login', 'LoginController@login');
});


Route::get('storage/avatars/{filename}', function ($filename)
{
    $path = storage_path('app/public/avatars/' . $filename);

    if (!File::exists($path)) {
        abort(404);
    }

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});

// Route::get('/user', 'UserController@index');
// Route::post('/user/store', 'UserController@store');

Route::get('storage/avatars/{filename}', function ($filename)
{
    $path = storage_path('app/public/avatars/' . $filename);

    if (!File::exists($path)) {
        abort(404);
    }

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});
