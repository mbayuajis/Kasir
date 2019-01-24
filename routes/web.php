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
    return view('index');
});

Route::get('/login', function (){
	return view('login');
});

// Route::get('/user', 'UserController@index');
// Route::post('/user/store', 'UserController@store');


Route::resource('user', 'UserController')->only([
    'index', 'show', 'store', 'update', 'destroy'
]);

Route::resource('user', 'UserController')->except([
    'create'
]);

Route::get('/barang', 'BarangController@index');

Route::get('/kasir', 'KasirController@index');
Route::get('/kasir/belanjaan', 'KasirController@belanjaan');

Route::get('/report', 'ReportController@index');

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