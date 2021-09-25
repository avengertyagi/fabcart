<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\APIStudentController;

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
/*
--------------------[Api insert the data]-----------------------
*/
Route::get("data",[dummy::class,'getData']);
Route::get('list','App\Http\Controllers\dummy@list');

Route::post('product',[App\Http\Controllers\ProductController::class,'store']);

Route::get('products',[ProductController::class,'index']);

Route::put('productupdate',[ProductController::class,'update']);

/*
----------------[React insert the data]----------------
*/
Route::post('/add-student',[APIStudentController::class,'store']);
Route::get('students',[APIStudentController::class,'index']);
