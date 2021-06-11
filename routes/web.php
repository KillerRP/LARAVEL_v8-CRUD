<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;

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


Route::get('/',[CrudController::class, 'index'])->name('product-list');
Route::view('/product-create','add')->name('product-create');
Route::post('/add',[CrudController::class, 'add']);
Route::get('/product-edit/{pid}',[CrudController::class, 'showdata'])->name('product-edit');
Route::post('edit',[CrudController::class, 'update']);
Route::get('/product-delete/{pid}',[CrudController::class, 'delete'])->name('product-delete');

