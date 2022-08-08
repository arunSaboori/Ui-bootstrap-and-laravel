<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\RedLandController;
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

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/index', function () {
//     return view('redland.index');
// });


Route::get('/index', [RedLandController::class, 'index'])->name('redland.index');

Route::get('/redland/{id}/edit', [RedLandController::class, 'edit'])->name('redland.edit');
Route::post('/redland/{id}/update', [RedLandController::class, 'update'])->name('redland.update');


Route::get('redland/create', [RedLandController::class, 'create'])->name('redland.create');
Route::post('redland/store', [RedLandController::class, 'store'])->name('redland.store');


Route::post('redland/{id}/delete', [RedLandController::class, 'delete'])->name('redland.delete');


Route::get('redland/updated/{id}', [RedLandController::class, 'updated'])->name('redland.updated');
Route::post('redland/updatedfinal/{id}', [RedLandController::class, 'updatedfinal'])->name('redland.updatedfinal');

//category
Route::prefix('category')->group(function () {
    Route::get('index', [CategoriesController::class, 'index'])->name('category.index');
    Route::get('create', [CategoriesController::class, 'create'])->name('category.create');
    Route::post('store', [CategoriesController::class, 'store'])->name('category.store');
    Route::get('edit/{id}', [CategoriesController::class, 'edit'])->name('category.edit');
    Route::post('update/{id}', [CategoriesController::class, 'update'])->name('category.update');
    Route::post('delete/{id}', [CategoriesController::class, 'delete'])->name('category.delete');
    Route::get('updated/{id}',[CategoriesController::class,'updated'])->name('category.updated');
    Route::post('updatedfinal/{id}',[CategoriesController::class,'updatedfinal'])->name('category.updatedfinal');
});

//welcome
Route::get('/welcome',function(){
return view('welcome');
});
