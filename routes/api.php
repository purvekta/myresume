<?php

namespace App\Http\Resources;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\UserDetailController;
use App\Http\Resources\UserDetailController;
use App\Models\UserDetail;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Controllers\API\PhotoController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\PassportAuthController;
use App\Http\Controllers\API\EducationController;
use App\Http\Controllers\API\SkillController;

//use App\Http\Controllers\API\ProductController;
//use App\Http\Resources\BookController;
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
/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/

/*

    Route::post('books/{book}/ratings', 'RatingController@store');

    Route::resource('user-detail', [UserDetailController::class]);
    */
    /*
    Route::post('register', [PassportAuthController::class, 'register']);
    Route::post('login', [PassportAuthController::class, 'login']);
      
    Route::middleware('auth:api')->group(function () {
        Route::get('get-user', [PassportAuthController::class, 'userInfo']);
     
     Route::resource('products', [ProductController::class]);
     
    });
    */
    Route::post('register', [PassportAuthController::class, 'register']);
    Route::post('login', [PassportAuthController::class, 'login']);
//    Route::apiResource('/education', EducationController::class)->middleware('auth:api');
    Route::apiResource('/education', EducationController::class)->middleware('auth:api');
    Route::apiResource('/skill', SkillController::class)->middleware('auth:api');