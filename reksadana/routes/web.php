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

/*situs korporat*/
Route::get('/', 'ProdukController@index');
Route::get('/informasi/{any}', 'ProdukController@informasi');
Route::get('/ulasan-investasi/{any}', 'ProdukController@ulasan');

/* adminweb */
Route::get('/adminweb', 'ProdukController@adminweb');
Route::get('/adminweb/dashboard', 'ProdukController@dashboard_index');
Route::get('/adminweb/dashboard/konten', 'ProdukController@konten');
Route::get('/adminweb/dashboard/edit-konten/{any}', 'ProdukController@');
Route::post('/adminweb/dashboard/edit-konten/{any}', 'ProdukController@');
Route::get('/adminweb/dashboard/edit-konten-produk/{any}', 'ProdukController@');
Route::post('/adminweb/dashboard/edit-konten-produk/{any}', 'ProdukController@');
Route::post('/adminweb/dashboard/delete-konten/{any}', 'ProdukController@');
Route::post('/adminweb/dashboard/delete-konten-produk/{any}', 'ProdukController@');
Route::get('/adminweb/dashboard/manajemen-user', 'ProdukController@manajemen_user');
Route::get('/adminweb/dashboard/edit-user/{any}', 'ProdukController@');
Route::post('/adminweb/dashboard/edit-user/{any}', 'ProdukController@');
Route::post('/adminweb/dashboard/delete-user/{any}', 'ProdukController@');
Route::get('/adminweb/dashboard/produk', 'ProdukController@produk');
Route::get('/adminweb/dashboard/{page}', 'ProdukController@dashboard_page');
Route::post('/adminweb/dashboard/logout', 'ProdukController@dashboard_logout');
Route::post('/adminweb', array('uses' => 'ProdukController@adminwebLogin'));

/*reksadanaonline*/
Route::get('/reksadanaonline/dashboard', 'NasabahController@reksadanaonline_dashboardindex');
Route::get('/reksadanaonline/dashboard/{page}', 'NasabahController@reksadanaonline_dashboard');
Route::get('/reksadanaonline/dashboard-operation', 'NasabahController@reksadanaonline_dashboardoperation_index');
Route::get('/reksadanaonline/dashboard-operation/{page}', 'NasabahController@reksadanaonline_dashboardoperation');
Route::get('/reksadanaonline', 'NasabahController@reksadanaonline');
Route::get('/reksadanaonline#promo', 'ProdukController@promo');
Route::get('/reksadanaonline/{page}', 'NasabahController@reksadanaonline_page');
Route::post('/reksadanaonline/daftar', 'NasabahController@reksadanaonlineDaftar');
Route::post('/reksadanaonline/daftaronline', 'NasabahController@reksadanaonlineDaftarOnline');
Route::post('/reksadanaonline', 'NasabahController@reksadanaonlineLogin');
Route::post('/reksadanaonline/{page}', 'NasabahController@reksadanaonlineLogin');