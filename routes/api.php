<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AcademicStateController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/academic_states', [AcademicStateController::class, 'index']);
Route::post('/academic_states', [AcademicStateController::class, 'store']);
Route::put('/academic_states/{academic_states}', [AcademicStateController::class, 'update']);
Route::delete('/academic_states/{academic_states}', [AcademicStateController::class, 'destroy']);