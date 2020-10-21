<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\ChocolateController;

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

Route::redirect('/', '/admin/chocolates');

Route::prefix('admin')->name('admin.')->group(function(){

    Route::resource('chocolates', ChocolateController::class)->except(['show']);
    Route::resource('tipos', TipoController::class);
});

Route::get('/sobre', function (){
    return '<h1>Sobre</h1>';
});
