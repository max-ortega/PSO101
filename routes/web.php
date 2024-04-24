<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\OrderController;

//use App\Http\Controllers\InventoryController;
//use Illuminate\Routing\Router;
//use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
| 
*/

Route::get('/orders', [OrderController::class, 'index']);
Route::get('/download-orders', [OrderController::class, 'downloadPdf']);


Route::get('/', function() {
    return  view('welcome');
});



Route::view('/', 'test');
Route::get('/asset', function () {
    return view('asset');
});
Route::get('/supply', function () {
    return view('supply');
});
Route::get('/test', function () {
    return view('test');
});
Route::get('/dbsupply', function () {
    return view('dbsupply');
});
Route::get('/dbasset', function () {
    return view('dbasset');
});
Route::get('/dbdelivered', function () {
    return view('dbdelivered');
});
Route::get('/dbissued', function () {
    return view('dbissued');
});
Route::get('/dbair', function () {
    return view('dbair');
});
Route::get('/dbaccountable', function () {
    return view('dbaccountable');
});
Route::get('/dbdeployment', function () {
    return view('dbdeployment');
});
Route::get('/dbreturn', function () {
    return view('dbreturn');
});
Route::get('/dbtransfer', function () {
    return view('dbtransfer');
});


Route::get('/index', function () {
    return view('index');
});

Route::get('/print', function () {
    return view('print');
});


Route::post('/', function() {
    return  view('welcome');
});



/////
Route::group(['middleware'=> 'guest'], function (){
Route::get('/registers', [AuthController::class, 'registers'])->name('registers');  
Route::post('/registers', [AuthController::class, 'registersPost'])->name('registers');  
Route::get('/loginn', [AuthController::class, 'loginn'])->name('loginn');
Route::post('/loginn', [AuthController::class, 'loginnPost'])->name('loginn');
});

Route::group(['middleware'=> 'auth'], function (){
Route::get('/home', [HomeController::class, 'index']);
Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
});

