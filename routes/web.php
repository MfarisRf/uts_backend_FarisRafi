<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Agama63Controller;
use App\Http\Controllers\User63Controller;
use App\Http\Controllers\Detail_data63Controller;
use Illuminate\Support\Facades\Auth;

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

    if (Auth::check()) {
        $role = Auth::user()->role;
    } else {
        $role = null;
    }

    return view('dashboard', [
        'role'=>$role
    ]);
})->name('index63');

Route::middleware(['auth', 'hakakses:role'])->group(function () {

    // User
    Route::get('/users63', [User63Controller::class, 'users63'])->name('users63');
    Route::get('/detailUser63/{id}', [User63Controller::class, 'detailUser63'])->name('detailUser63');
    Route::get('/profile63', [User63Controller::class, 'profile63'])->name('profile63');


    Route::get('/updatePassword63', [User63Controller::class, 'updatePassword63'])->name('updatePassword63');
    Route::post('/updatePasswordProses63/{id}', [User63Controller::class, 'updatePasswordProses63'])->name('updatePasswordProses63');


    Route::get('/register63', [User63Controller::class, 'register63'])->name('register63');
    Route::post('/registerProses63', [User63Controller::class, 'registerProses63'])->name('registerProses63');

    Route::get('/logout63', [User63Controller::class, 'logout63'])->name('logout63');

    // Detail data
    Route::get('/detailData63', [Detail_data63Controller::class, 'detailData63'])->name('detailData63');

    Route::get('/createData63', [Detail_data63Controller::class, 'createData63'])->name('createData63');
    Route::post('/createDataProses63', [Detail_data63Controller::class, 'createDataProses63'])->name('createDataProses63');

    Route::get('/updateData63', [Detail_data63Controller::class, 'updateData63'])->name('updateData63');
    Route::post('/updateDataProses63', [Detail_data63Controller::class, 'updateDataProses63'])->name('updateDataProses63');
});

Route::middleware(['auth', 'hakadmin:role'])->group(function () {
    // agama
    Route::get('/agama63', [Agama63Controller::class, 'agama63'])->name('agama63');

    Route::get('/createAgama63', [Agama63Controller::class, 'createAgama63'])->name('createAgama63');
    Route::post('/createAgama63Proses', [Agama63Controller::class, 'createAgama63Proses'])->name('createAgama63Proses');

    Route::get('/deleteAgama63Proses/{id}', [Agama63Controller::class, 'deleteAgama63Proses'])->name('deleteAgama63Proses');

    Route::get('/updateAgama63/{id}', [Agama63Controller::class, 'updateAgama63'])->name('updateAgama63');
    Route::post('/updateAgama63Proses/{id}', [Agama63Controller::class, 'updateAgama63Proses'])->name('updateAgama63Proses');

    // user
    Route::get('/deleteUser63/{id}', [User63Controller::class, 'deleteUser63'])->name('deleteUser63');
    Route::get('/approveUser63/{id}', [User63Controller::class, 'approveUser63'])->name('approveUser63');
});

Route::get('/login63', [User63Controller::class, 'login63'])->name('login63');
Route::post('/loginProses63', [User63Controller::class, 'loginProses63'])->name('loginProses63');


