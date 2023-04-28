<?php
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\userController;
use App\Http\Controllers\IdeaController;
use App\Http\Controllers\cloudinaryController;
use App\Http\Controllers\PurchaseController;
use App\Models\idea;
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

Route::post('/register',[userController::class,'register']);
Route::post('/login',[userController::class,'login']);
Route::get('/cat',[CategoryController::class,'index']);
Route::get('/idea',[IdeaController::class,'index']);
Route::post('/Fidea',[IdeaController::class,'filterIdea']);
Route::post('/purchases',[userController::class,'purchases']);
Route::post('/editpurchases/{id}',[PurchaseController::class,'edit']);
Route::get('/purchases',[PurchaseController::class,'index']);
Route::post('/oneidea',[IdeaController::class,'search']);

Route::group(['middleware'=>['auth:sanctum']] , function () {


    Route::post('/idea',[IdeaController::class,'create']);
    Route::post('/logout',[userController::class,'logout']);
    Route::post('/edit',[userController::class,'edit']);
    Route::post('/delete',[IdeaController::class,'destroy']);
    Route::post('/myides',[userController::class,'ides']);


    Route::post('/addpurchases',[PurchaseController::class,'create']);
    Route::post('/purchasesSponsor',[PurchaseController::class,'purchases_Sp']);
    Route::post('/deletepurchase',[PurchaseController::class,'destroy']);





}); 
