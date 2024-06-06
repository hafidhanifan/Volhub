<?php

use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\Admin;

Route::get('/', function () {
    return view('admin.layout.login');
});


Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('login');
Route::post('/admin/login', [AdminAuthController::class, 'login']);
Route::get('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

Route::middleware('auth:admin')->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.layout.dashboard');
    });
});

// Route untuk Kelola Kategori
Route::get('/admin/kategori', [Admin::class, 'showKategoriPage'])->name('admin.kategori');
Route::get('/admin/add-kategori', [Admin::class, 'showAddKategoriPage'])->name('admin.add-kategori-page');
Route::post('/admin/add-kategori', [Admin::class, 'addKategoriAction'])->name('admin.add-kategori-action');
Route::get('/admin/edit-kategori/{id}', [Admin::class, 'showEditKategoriPage'])->name('admin.edit-kategori-page');
Route::put('admin/edit-kategori/{id}', [Admin::class, 'editKategoriAction'])->name('admin.edit-kategori-action');
Route::delete('admin/delete-kategori/{id}', [Admin::class, 'deleteKategoriAction'])->name('admin.delete-kategori-action');