<?php

use App\Http\Controllers\DealerController;
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
    return view('master');
});

Route::prefix('dealers')->group(function(){
    Route::get('index',[DealerController::class,'index'])->name('dealers.index');
    Route::get('create',[DealerController::class,'create'])->name('dealers.showFormCreate');
    Route::post('create',[DealerController::class,'store'])->name('dealers.create');
    Route::get('update',[DealerController::class,'index'])->name('dealers.index');
    Route::get('update',[DealerController::class,'index'])->name('dealers.index');
});
