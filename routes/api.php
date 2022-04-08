<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\categoriaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('categoria', [categoriaController::class, 'getCategoria']);

Route::get('categoria/{id}', [categoriaController::class, 'getCategoriaxid']);

Route::post('addCategoria', [categoriaController::class, 'insertCategoria']);

Route::put('updateCategoria/{id}', [categoriaController::class, 'updateCategoria']);

Route::delete('deleteCategoria/{id}', [categoriaController::class, 'deleteCategoria']);