<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', function () {
    return view('welcome');
});

/**
 * ================== ROUTES ARTICLES
 */

//  index (get)
Route::get('/articles', function(){});
//  create (get)
Route::get('/articles/create', function(){});
//  store (post)
Route::post('/articles', function(){});
//  show (get)
Route::get('/articles/{id}', function(){});
//  edit (get)
Route::get('/articles/{articles}/edit', function(){});
/** update (put) */  
// put mise à jour complète
// patch mise à jour partielle
Route::put('/articles/{id}', function(){});
//  destroy (delete)
Route::get('/articles/{id}', function(){});

