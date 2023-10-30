<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\FeedbackController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Frontend\FrontendController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/', [FrontendController::class,'index']);

###################### Admin Routes ############################
Route::middleware(['auth', 'user-access:admin'])->group(function () {
Route::get('admin/dashboard',[AdminController::class,'index']);
Route::get('users', [AdminController::class,'users']);
Route::resource('categories', CategoryController::class);
Route::get('feedbacks', [FeedbackController::class,'index']);
Route::get('feedback/{id}/edit', [FeedbackController::class,'edit']);
Route::post('feedback/update/{id}', [FeedbackController::class,'update']);
Route::get('feedback/delete/{id}', [FeedbackController::class,'delete']);
Route::get('chats', [AdminController::class, 'chats']);
Route::get('chat/{id}', [AdminController::class,'messageDetail']);
Route::post('chat_reply', [AdminController::class, 'message_reply']);
});

################### End Admin Routes ##########################


######################## Frontend Routes ############################
Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::post('feedback/store', [FrontendController::class, 'store'])->name('feedback.store');
    Route::get('feedback_detail/{id}', [FrontendController::class,'feedback_detail']);
    Route::post('comment_store', [FrontendController::class,'comment_store']);
    Route::post('add_vote', [FrontendController::class,'add_vote']);
    Route::get('my_profile', [FrontendController::class,'my_profile']);
    Route::get('messages', [FrontendController::class, 'chat']);
    Route::post('chat_store', [FrontendController::class, 'chat_store']);
    Route::get('message/{id}', [FrontendController::class,'messageDetail']);
    Route::post('message_reply', [FrontendController::class, 'message_reply']);
});
####################### End Frontend Routes ########################