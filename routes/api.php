<?php
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\StaffController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/departments',[DepartmentController::class, 'index']);
Route::get('/departments/{department}',[DepartmentController::class,'show']);
Route::post('/departments',[DepartmentController::class, 'store']);
Route::put('/departments/{department}', [DepartmentController::class, 'update']);
Route::delete('/departments/{department}',[DepartmentController::class, 'destroy']);

Route::get('/staffs',[StaffController::class, 'index']);
Route::get('/staffs/{staff}',[StaffController::class,'show']);
Route::post('/staffs',[StaffController::class, 'store']);
Route::put('/staffs/{staff}', [StaffController::class, 'update']);
Route::delete('/staffs/{staff}',[StaffController::class, 'destroy']);
