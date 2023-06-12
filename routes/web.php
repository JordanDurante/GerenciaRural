<?php

use App\Http\Controllers\SafrasController;
use App\Http\Controllers\CulturasController;

use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Return_;

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

Route::prefix('safras')->group(function(){
    Route::get('/',[SafrasController::class,'index'])->name('safras-index');
    Route::get('/create',[SafrasController::class,'create'])->name('safras-create');
    Route::post('/',[SafrasController::class,'store'])->name('safras-store');
    Route::get('/{id}/edit',[SafrasController::class,'edit'])->where('id','[0-9]+')->name('safras-edit');
    Route::put('/{id}',[SafrasController::class,'update'])->where('id','[0-9]+')->name('safras-update');
    Route::delete('/{id}',[SafrasController::class,'destroy'])->where('id','[0-9]+')->name('safras-destroy');
});

Route::prefix('culturas')->group(function(){
    Route::get('/',[CulturasController::class,'index'])->name('culturas-index');
    Route::get('/create',[CulturasController::class,'create'])->name('culturas-create');
    Route::post('/',[CulturasController::class,'store'])->name('culturas-store');
    Route::get('/{id}/edit',[CulturasController::class,'edit'])->where('id','[0-9]+')->name('culturas-edit');
    Route::put('/{id}',[CulturasController::class,'update'])->where('id','[0-9]+')->name('culturas-update');
    Route::delete('/{id}',[CulturasController::class,'destroy'])->where('id','[0-9]+')->name('culturas-destroy');
});

