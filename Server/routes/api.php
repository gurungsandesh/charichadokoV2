<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/*-------------Category (public)-----------------*/
Route::controller(CategoryController::class)->group(function () {
    Route::post('category', 'store');           // add category
    Route::get('category/{id}', 'show');        // search category 
    Route::get('category', 'index');            // show all category
    Route::delete('category/{id}', 'destroy');  // delete category
    Route::put('category/{id}', 'update');      // update category
});
/*----------------End-------------------*/
