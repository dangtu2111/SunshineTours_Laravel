<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckLogin;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\TourController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\BookingController;
use App\Http\Controllers\Backend\PaymentController;
use App\Http\Controllers\Backend\ContentController;
use App\Http\Controllers\Backend\ReportController;
use App\Http\Controllers\Backend\FeedbackController;
use App\Http\Controllers\Backend\AuthController;
use App\Http\Middleware\AuthenticateMiddleware;

Route::get('/loginAdmin', [AuthController::class,'index'])->name('auth.admin');
Route::get('/logoutAdmin', [AuthController::class,'logout'])->name('auth.logout');
Route::post('/authAdmin', [AuthController::class,'login'])->name('auth.login');
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
Route::group(['prefix' => 'admin', 'middleware' => AuthenticateMiddleware::class], function() {
    Route::get('/', [HomeController::class, 'index'])->name('admin.home');
    
    // Các route con của admin
    Route::get('/Tour', [TourController::class, 'index'])->name('admin.tour');
    Route::get('/user', [UserController::class, 'index'])->name('admin.user');
    
    Route::group(['prefix' => 'user'], function() {
        Route::get('create', [UserController::class, 'create'])->name('admin.user.create');
        Route::get('delete/{id}', [UserController::class, 'delete'])->name('admin.user.delete');
        Route::post('destroy/{id}', [UserController::class, 'destroy'])->name('admin.user.destroy');
        Route::get('edit/{id}', [UserController::class, 'edit'])->where(['id'=>'[0-9]+'])->name('admin.user.edit');
        Route::post('update/{id}', [UserController::class, 'update'])->where(['id'=>'[0-9]+'])->name('admin.user.update');
        Route::post('store', [UserController::class, 'store'])->name('admin.user.store');
    });
    
    Route::get('/Booking', [BookingController::class, 'index'])->name('admin.booking');
    Route::get('/Payment', [PaymentController::class, 'index'])->name('admin.payment');
    Route::get('/Content', [ContentController::class, 'index'])->name('admin.content');
    Route::get('/Report', [ReportController::class, 'index'])->name('admin.report');
    Route::get('/Feedback', [FeedbackController::class, 'index'])->name('admin.feedback');
});
Route::get('/loginAdmin', [AuthController::class,'index'])->name('auth.admin');
Route::group(['prefix' => 'user', 'middleware' => AuthenticateMiddleware::class], function() {
    Route::get('/', [HomeController::class, 'index'])->name('admin.home');
    
    // Các route con của admin
    Route::get('/Tour', [TourController::class, 'index'])->name('admin.tour');
    Route::get('/user', [UserController::class, 'index'])->name('admin.user');
    
    Route::group(['prefix' => 'user'], function() {
        Route::get('create', [UserController::class, 'create'])->name('admin.user.create');
        Route::get('delete/{id}', [UserController::class, 'delete'])->name('admin.user.delete');
        Route::post('destroy/{id}', [UserController::class, 'destroy'])->name('admin.user.destroy');
        Route::get('edit/{id}', [UserController::class, 'edit'])->where(['id'=>'[0-9]+'])->name('admin.user.edit');
        Route::post('update/{id}', [UserController::class, 'update'])->where(['id'=>'[0-9]+'])->name('admin.user.update');
        Route::post('store', [UserController::class, 'store'])->name('admin.user.store');
    });
    
    Route::get('/Booking', [BookingController::class, 'index'])->name('admin.booking');
    Route::get('/Payment', [PaymentController::class, 'index'])->name('admin.payment');
    Route::get('/Content', [ContentController::class, 'index'])->name('admin.content');
    Route::get('/Report', [ReportController::class, 'index'])->name('admin.report');
    Route::get('/Feedback', [FeedbackController::class, 'index'])->name('admin.feedback');
});





Route::get('/', [App\Http\Controllers\Frontend\UserController::class,'index'])->name('index');


