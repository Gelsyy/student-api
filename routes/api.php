<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AcademicStateController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\MunicipalityController;
use App\Http\Controllers\ProvinceController;
use App\Http\Controllers\StudentTypeController;
use App\Http\Controllers\StudentRegimeController;
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



// ruta para sacar estudiantes becados
Route::get('/becado-students', [StudentController::class, 'getEstudianteBecado']);
// ruta para sacar estudiantes por anno y grupo
Route::get('/students/{annio}/{grupo}', [StudentController::class, 'getEstudianteGrupoAnnio']);
// ruta estudiantes nuevo ingreso
Route::get('/nuevo_ingreso', [StudentController::class, 'getNuevoIngreso']);
// ruta que devuleve un estduiante por nombre y apellido
Route::get('/student/{nombre}/{apellido}', [StudentController::class, 'getEstudianteNombreApellido']);

// rutas de student
Route::get('/student', [StudentController::class, 'index']);
Route::post('/student', [StudentController::class, 'store']);
//Route::put('/student/{student}', [CourseController::class, 'update']);
Route::delete('/student/{student}', [StudentController::class, 'destroy']);


//rutas del estado academico
Route::get('/academic_states', [AcademicStateController::class, 'index']);
Route::post('/academic_states', [AcademicStateController::class, 'store']);
Route::put('/academic_states/{academic_states}', [AcademicStateController::class, 'update']);
Route::delete('/academic_states/{academic_states}', [AcademicStateController::class, 'destroy']);


//rutas del curso
Route::get('/course', [CourseController::class, 'index']);
Route::post('/course', [CourseController::class, 'store']);
Route::put('/course/{course}', [CourseController::class, 'update']);
Route::delete('/course/{course}', [CourseController::class, 'destroy']);

//rutas de la facultad
Route::get('/faculty', [FacultyController::class, 'index']);
Route::post('/faculty', [FacultyController::class, 'store']);
Route::put('/faculty/{faculty}', [FacultyController::class, 'update']);
Route::delete('/faculty/{faculty}', [FacultyController::class, 'destroy']);

//rutas de minucipio 
Route::get('/municipality', [MunicipalityController::class, 'index']);
Route::delete('/municipality/{municipality}', [MunicipalityController::class, 'destroy']);

//rutas de provincia
Route::get('/province', [ProvinceController::class, 'index']);
Route::post('/province', [ProvinceController::class, 'store']);
Route::put('/province/{province}', [ProvinceController::class, 'update']);
Route::delete('/province/{province}', [ProvinceController::class, 'destroy']);

//rutas de tipo de estudiante
Route::get('/student_type', [StudentTypeController::class, 'index']);
Route::post('/student_type', [StudentTypeController::class, 'store']);
Route::put('/student_type/{student_type}', [StudentTypeController::class, 'update']);
Route::delete('/student_type/{student_type}', [StudentTypeController::class, 'destroy']);

// rutas de regimen de estudio
Route::get('/study_regimen', [StudyRegimeController::class, 'index']);
Route::post('/study_regimen', [StudyRegimeController::class, 'store']);
Route::put('/study_regimen/{study_regimen}', [StudyRegimeController::class, 'update']);
Route::delete('/study_regimen/{study_regimen}', [StudyRegimeController::class, 'destroy']);