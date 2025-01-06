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
use App\Http\Controllers\Frontend\PayPalController;
use App\Http\Controllers\MailController;

Route::get('create-transaction', [PayPalController::class, 'createTransaction'])->name('createTransaction');
Route::get('process-transaction', [PayPalController::class, 'processTransaction'])->name('processTransaction');
Route::get('success-transaction', [PayPalController::class, 'successTransaction'])->name('successTransaction');
Route::get('cancel-transaction', [PayPalController::class, 'cancelTransaction'])->name('cancelTransaction');
Route::get('process-paypal', [PayPalController::class, 'processPaypPal'])->name('processPaypal');
Route::get('paymentSuccess', [App\Http\Controllers\Frontend\BookingController::class, 'paymentSuccess'])->name('paymentSuccess');

Route::get('/loginAdmin', [AuthController::class, 'index'])->name('auth.admin');
Route::get('/logoutAdmin', [AuthController::class, 'logout'])->name('auth.logout');
Route::post('/authAdmin', [AuthController::class, 'login'])->name('auth.login');
// Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
//     \UniSharp\LaravelFilemanager\Lfm::routes();
// });
Route::group(['prefix' => 'admin', 'middleware' => AuthenticateMiddleware::class], function () {
    Route::get('/', [HomeController::class, 'index'])->name('admin.home');

    // Các route con của admin
    Route::group(['prefix' => 'Tour'], function () {
        Route::get('/', [TourController::class, 'index'])->name('admin.tour');
        Route::get('/addTour', [TourController::class, 'addTour'])->name('admin.tour.addTour');
        Route::post('/create', [TourController::class, 'create'])->name('admin.tour.create');
        Route::get('/edit/{id}', [TourController::class, 'edit'])->name('admin.tour.edit');
        Route::post('/update/{id}', [TourController::class, 'update'])->name('admin.tour.update');
        Route::post('/delete/{id}', [TourController::class, 'delete'])->name('admin.tour.delete');
    });

    Route::get('/user', [UserController::class, 'index'])->name('admin.user');

    Route::group(['prefix' => 'user'], function () {
        Route::get('create', [UserController::class, 'create'])->name('admin.user.create');
        Route::get('delete/{id}', [UserController::class, 'delete'])->name('admin.user.delete');
        Route::post('destroy/{id}', [UserController::class, 'destroy'])->name('admin.user.destroy');
        Route::get('edit/{id}', [UserController::class, 'edit'])->where(['id' => '[0-9]+'])->name('admin.user.edit');
        Route::post('update/{id}', [UserController::class, 'update'])->where(['id' => '[0-9]+'])->name('admin.user.update');
        Route::post('store', [UserController::class, 'store'])->name('admin.user.store');
    });
    Route::group(['prefix' => 'Content'], function () {
        Route::get('/', [ContentController::class, 'index'])->name('admin.content');
        Route::post('/addCategory', [ContentController::class, 'addCategory'])->name('admin.content.addCategory');
        Route::get('/addNewPost', [ContentController::class, 'addNewPost'])->name('admin.content.addNewPost');
        Route::get('/editPost/{id}', [ContentController::class, 'editPost'])->name('admin.content.editPost');
        Route::post('/updatePost/{id}', [ContentController::class, 'updatePost'])->name('admin.content.updatePost');
        Route::post('/deletePost/{id}', [ContentController::class, 'deletePost'])->name('admin.content.deletePost');
        Route::post('/formNewPost', [ContentController::class, 'formNewPost'])->name('admin.content.formNewPost');
        Route::post('/updateNameCategory', [ContentController::class, 'updateNameCategory'])->name('admin.content.updateNameCategory');
        Route::post('/deleteCategory', [ContentController::class, 'deleteCategory'])->name('admin.content.deleteCategory');
    });
    Route::get('/Booking', [BookingController::class, 'index'])->name('admin.booking');
    Route::get('/Payment', [PaymentController::class, 'index'])->name('admin.payment');
    Route::get('/Report', [ReportController::class, 'index'])->name('admin.report');

    Route::get('/Feedback', [FeedbackController::class, 'index'])->name('admin.feedback');
});

Route::get('/', [App\Http\Controllers\Frontend\UserController::class, 'index'])->name('index');
Route::get('/about', [App\Http\Controllers\Frontend\AboutUsController::class, 'index'])->name('about');
Route::get('/gallery', [App\Http\Controllers\Frontend\GalleryController::class, 'index'])->name('gallery');
Route::get('/FAQ', [App\Http\Controllers\Frontend\FAQController::class, 'index'])->name('FAQ');
Route::group(['prefix' => 'blog'], function () {
    Route::get('/', [App\Http\Controllers\Frontend\BlogController::class, 'index'])->name('blog');
    Route::get('/blog_dentail/{id}', [App\Http\Controllers\Frontend\BlogController::class, 'blog_dentail'])->name('blog.blog_dentail');
});
Route::group(['prefix' => 'booking'], function () {
    Route::get('/order/{id}', [App\Http\Controllers\Frontend\BookingController::class, 'order'])->name('order');
    Route::post('/checkout/{id}', [App\Http\Controllers\Frontend\BookingController::class, 'checkout'])->name('checkout');
    Route::get('/', [App\Http\Controllers\Frontend\BookingController::class, 'index'])->name('booking');
});
Route::get('/tour_detail/{id}', [App\Http\Controllers\Frontend\BookingController::class, 'tour_detail'])->name('tour_detail');
Route::get('/testMail', [MailController::class, 'index'])->name('testMail');
