<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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
    return view('admin/layout/login');
});

Route::get('/', [AuthController::class, 'login'])->name('login');
Route::post('/', [AuthController::class, 'login_action'])->name('login_action');;


Route::get('/dashboard', function () {
    return view('admin/layout/dashboard');
})->middleware('auth:admins');

Route::get('/kategori', function () {
    return view('admin/layout/kategori');
});

Route::get('/add-kategori', function () {
    return view('admin/layout/add-kategori');
});

Route::get('/kegiatan', function () {
    return view('admin/layout/kegiatan');
});

Route::get('/detail-kegiatan', function () {
    return view('admin/layout/detail-kegiatan');
});

Route::get('/add-kegiatan', function () {
    return view('admin/layout/add-kegiatan');
});

Route::get('/edit-kegiatan', function () {
    return view('admin/layout/edit-kegiatan');
});

Route::get('/pendaftar', function () {
    return view('admin/layout/pendaftar');
});

Route::get('/detail-pendaftar', function () {
    return view('admin/layout/detail-pendaftar');
});

Route::get('/user', function () {
    return view('admin/layout/user');
});

Route::get('/detail-user', function () {
    return view('admin/layout/detail-user');
});

Route::get('/setting', function () {
    return view('admin/layout/setting');
});