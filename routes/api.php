<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\BookController;

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


/*
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/

Route::get("/books",[BookController::class,'read']);

Route::post("/book",[BookController::class,'create']);

Route::get("/saludo",function(Request $request){
    
    $message=['mensaje'=>"Hola Mundo!"];
    return response()->json($message);
});

Route::post("/libro",function(Request $request){
    
    $message=['book'=>"Cien años de soledad"];
    return response()->json($message);
});

Route::put("/carro",function(Request $request){
    
    $message = ['car'=>"Toyota Land Cruiser",
    'disenio'=> [
        'color'=>'rojo',
        'tamanio'=>'amplio',
        'detalle'=>[1,2,3,4,5]
    ]];

    return response()->json($message);
});

Route::patch("/computador",function(Request $request){
    
    $message=['computer'=>"Compaq"];
    return response()->json($message);
});

Route::delete("/motocicleta",function(Request $request){
    
    $message=['motorbike'=>"Honda Bross 125"];
    return response()->json($message);
});