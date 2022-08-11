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
    return "test";
});

Route::get('/', function () {
    $dbconn3 = pg_connect("host=172.16.238.3 port=5432 dbname=postgres user=postgres password=admin"); 
    return 9;
    # return dd($dbconn3); 
});
 Route::get('/login', function () {
     return view('welcome');
 });

 ?>