<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\ConversationsController;

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
// Route::middleware('auth:sanctum')->group(function(){
    Route::get('conversation',[ConversationsController::class,'index']);
    Route::get('conversation/{conversation}',[ConversationsController::class,'show']);
    Route::post('conversation/{conversation}/participants',[ConversationsController::class,'addParticipants']);
    Route::delete('conversation/{conversation}/participants',[ConversationsController::class,'removeParticipants']);

    Route::get('conversation/{id}/messages',[MessagesController::class,'index']);
    Route::post('messages/',[MessagesController::class,'store']);
    Route::delete('messages/{id}',[MessagesController::class,'destroy']);

// });