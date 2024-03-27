<?php

use App\Http\Controllers\EarningController;
use App\Http\Controllers\VariablesController;
    use App\Models\Earning;
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
    Route::get('run', function(Request $request){

        
        $melk_id = $request->query('melk_id');
        $earning_id = $request->query('earning_id');
        
        $earning = Earning::find($earning_id);

        $helper = new Parameters($melk_id);

        // return $earning->Body;
        return eval($earning->Body);
    });
});

Route::prefix('formula')->group(function (){
    Route::resource('variables', VariablesController::class);
    Route::resource('earning', EarningController::class);
});
