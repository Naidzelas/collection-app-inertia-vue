<?php

use App\Http\Controllers\Categories\Sega\SegaCollectionController;
use App\Http\Controllers\Categories\Playstation\PlaystationCollectionController;
use App\Http\Controllers\Categories\CategoryController;
use Inertia\Inertia;


Route::prefix('category')->group(function () {

     Route::resource('/sega', SegaCollectionController::class)->only([
          'index',
          'create',
          'destroy',
          'edit',
          'load',
          'store',
          'update',
     ]);

     Route::resource('/playstation', PlaystationCollectionController::class)->only([
          'index',
          'create',
          'destroy',
          'edit',
          'load',
          'store',
          'update',
     ]);
});

// Route::get('/category', function () {
//     return Inertia::render('Categories');
// });


Route::resource('/category', CategoryController::class)->only([
     'index',
     'create',
     'destroy',
     'edit',
     'load',
     'store',
     'update',
]);