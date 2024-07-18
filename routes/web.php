<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/',[App\Http\Controllers\Frontend\FrontendController:: class, 'index']);

Route::get('category/{category_slug}',[App\Http\Controllers\Frontend\FrontendController:: class, 'viewCategoryPost']);

Route::get('/category/{category_slug}/{post_slug}',[App\Http\Controllers\Frontend\FrontendController::class,'viewPost']);
// Route::get('/posts/{post_slug}',[App\Http\Controllers\Frontend\FrontendController::class,'viewPost']);
Route::get('welcome',[App\Http\Controllers\Frontend\FrontendController::class,'policy']);
Route::get('contactus',[App\Http\Controllers\Frontend\FrontendController::class,'contactus']);
Route::get('about',[App\Http\Controllers\Frontend\FrontendController::class,'about']);
Route::get('viewall',[App\Http\Controllers\Frontend\FrontendController::class,'allcat']);
Route::get('terms_and_condition',[App\Http\Controllers\Frontend\FrontendController::class,'terms']);





//comment System
Route::post('comments',[App\Http\Controllers\Frontend\CommentController::class,'store']);
Route::post('delete-comment',[App\Http\Controllers\Frontend\CommentController::class,'destroy']);

Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function () {
    Route::get('/dashboard',[App\Http\Controllers\Admin\DashboardController::class,'index']);
    Route::get('category',[App\Http\Controllers\Admin\CategoryController::class,'index']);
    Route::get('add-category',[App\Http\Controllers\Admin\CategoryController::class,'create']);
    Route::post('add-category',[App\Http\Controllers\Admin\CategoryController::class,'store']);
    Route::get('edit-category/{category_id}',[App\Http\Controllers\Admin\CategoryController::class,'edit']);
    Route::put('update-category/{category_id}',[App\Http\Controllers\Admin\CategoryController::class,'update']);
    Route::get('delete-category/{category_id}',[App\Http\Controllers\Admin\CategoryController::class,'destroy']);
    // Route::post('delete-category',[App\Http\Controllers\Admin\CategoryController::class,'destroy']);

    Route::get('posts',[App\Http\Controllers\Admin\PostController::class, 'index']);
    Route::get('add-post',[App\Http\Controllers\Admin\PostController::class, 'create']);
    Route::post('add-post',[App\Http\Controllers\Admin\PostController::class, 'store']);
    Route::get('post/{post_id}',[App\Http\Controllers\Admin\PostController::class, 'edit']);
    Route::put('update-post/{post_id}',[App\Http\Controllers\Admin\PostController::class, 'update']);
    Route::get('delete-post/{post_id}',[App\Http\Controllers\Admin\PostController::class, 'destroy']);

    Route::get('users',[App\Http\Controllers\Admin\UserController::class,'index']);
    Route::get('user/{user_id}',[App\Http\Controllers\Admin\UserController::class,'edit']);
    Route::put('update-user/{user_id}',[App\Http\Controllers\Admin\UserController::class,'update']);


});