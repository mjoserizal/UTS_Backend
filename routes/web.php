<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User62Controller;
use Illuminate\Support\Facades\Redirect;

/*
|--------------------------------------------------------------------------
| Routing untuk proses autentikasi
|--------------------------------------------------------------------------
*/

Route::get('/logout62', [User62Controller::class, 'logout62']);
Route::post('/register62', [User62Controller::class, 'register62']);
Route::post('/login62', [User62Controller::class, 'login62']);
Route::put('/lupaPassword62', [User62Controller::class, 'lupaPassword62']);

/*
|--------------------------------------------------------------------------
| Routing untuk display halaman
|--------------------------------------------------------------------------
*/

Route::get('/', [User62Controller::class, 'loginView62'])->middleware('isLogged');
Route::get('/user/profile62', [User62Controller::class, 'userView62'])->middleware('isUser');
Route::get('/register62', [User62Controller::class, 'registerView62']);
Route::get('/admin/dashboard62', [User62Controller::class, 'adminView62'])->middleware('isAdmin');
Route::get('/admin/agama62', [User62Controller::class, 'agamaView62'])->middleware('isAdmin');
Route::get('/user/lupaPassword62', [User62Controller::class, 'lupaPasswordView62']);

/*
|--------------------------------------------------------------------------
| Routing untuk proses CRUD
|--------------------------------------------------------------------------
*/

Route::put('/updateData62', [User62Controller::class, 'updateData62']);
Route::put('/setIsAktif62/{id}', [User62Controller::class, 'setIsAktif62'])->middleware('isAdmin');
Route::get('/detailUser62/{id}', [User62Controller::class, 'detailUser62']);
Route::post('/tambahAgama62', [User62Controller::class, 'tambahAgama62']);
Route::put('/updateAgama62/{id}', [User62Controller::class, 'updateAgama62']);
Route::get('/hapusAgama62/{id}', [User62Controller::class, 'hapusAgama62']);
