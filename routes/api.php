<?php

use App\Http\Controllers\EarningController;
use App\Http\Controllers\VariablesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::prefix('compiler')->group(function (){
    Route::post('run', function(){
        $helper = new Parameters();

        return eval(request()->post('code'));
    });
});

Route::prefix('formula')->group(function (){
    Route::resource('variables', VariablesController::class);
    Route::resource('earning', EarningController::class);
});
