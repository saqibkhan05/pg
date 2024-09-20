<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AmenityController;
use App\Http\Controllers\BookingQuery;
use App\Http\Controllers\BookingRequest;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\KycController;
use App\Http\Controllers\MealController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\OtpVerificationController;
use App\Http\Controllers\PgController;
use App\Http\Controllers\PopupQueryController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\WalletController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//-------------------------------------------------------------------------------------|
//                                         Website                                     | 
//-------------------------------------------------------------------------------------|

Route::get('/', [WebsiteController::class, 'home'])->name('home');
Route::get('/about', [WebsiteController::class, 'about'])->name('about');
Route::get('/gallery', [WebsiteController::class, 'gallery'])->name('gallery');
Route::get('/faq', [WebsiteController::class, 'faq'])->name('faq');
Route::get('/contact', [WebsiteController::class, 'contact'])->name('contact');
Route::get('/termsandconditions', [WebsiteController::class, 'termsandconditions'])->name('termsandconditions');
Route::get('/feedback', [WebsiteController::class, 'feedback'])->name('feedback');
Route::get('/room-types', [WebsiteController::class, 'room_types'])->name('room_types');
Route::get('/meals', [WebsiteController::class, 'meals'])->name('meals');
// Signup - Signin Page
Route::get('/signup', [WebsiteController::class, 'signup'])->name('signup');
Route::get('/signin', [WebsiteController::class, 'signin'])->name('signin');
// Popup and Thankyou page
Route::post('/popup_ad_Register', [PopupQueryController::class, 'popup_ad_Register'])->name('popup_ad_Register');
Route::get('/thanks', [WebsiteController::class, 'thanks'])->name('thanks');


//-------------------------------------------------------------------------------------|
//                                         Customer                                    | 
//-------------------------------------------------------------------------------------|

Route::prefix('/customer')->name('customer.')->group(function () {
    //  Signup
    Route::post('/create', [CustomerController::class, 'create'])->name('create');
    // OTP Verify
    Route::get('/verify', [OtpVerificationController::class, 'verify_p'])->name('verify_p');
    Route::post('/verify', [OtpVerificationController::class, 'verify'])->name('verify');
    Route::get('/sendotp', [OtpVerificationController::class, 'sendotp'])->name('sendotp');
    // Login
    Route::post('/login', [CustomerController::class, 'login'])->name('login');
    // (Secure routes)
    Route::middleware('customer.auth')->group(function () {
        // dashboard
        Route::get('/dashboard', [CustomerController::class, 'dashboard'])->name('dashboard');
        // kyc
        Route::get('/kyc', [KycController::class, 'my_kyc'])->name('my_kyc');
        Route::post('/upload_my_kyc', [KycController::class, 'upload_my_kyc'])->name('upload_my_kyc');
        // wallet
        Route::get('/wallet', [WalletController::class, 'balance'])->name('balance');
        Route::get('/wallet/statement', [WalletController::class, 'my_statement'])->name('my_statement');
        // pg
        Route::get('/pg', [PgController::class, 'c_search'])->name('c_search');
        Route::post('/pg', [PgController::class, 'c_search'])->name('c_search');
        Route::get('/pg/{id}', [PgController::class, 'show'])->name('show');

        // Booking Request
        Route::get('bookingquery/{id}', [BookingQuery::class, 'create_booking_request'])->name('bookingquery');

        // logout
        Route::get('/logout', [CustomerController::class, 'logout'])->name('logout');
    });

});

//-------------------------------------------------------------------------------------|
//                                         Admin                                       | 
//-------------------------------------------------------------------------------------|

Route::prefix('/admin')->name('admin.')->group(function () {
    // signin
    Route::get('/signin', [AuthController::class, 'signin_p'])->name('signin_p');
    Route::post('/signin', [AuthController::class, 'signin'])->name('signin');

    // dashboard (Secure routes)
    Route::middleware('admin.auth')->group(function () {

        Route::get('/dashboard', [AdminDashboardController::class, 'dashboard'])->name('dashboard');

        // Customers
        Route::prefix('/customer')->name('customer.')->group(function () {
            Route::get('/', [CustomerController::class, 'all_customers'])->name('all_customers');
            Route::get('/{id}', [CustomerController::class, 'show'])->name('show');
        });
        // Wallet
        Route::prefix('/wallet')->name('wallet.')->group(function () {
            Route::get('/add_balance_page/{id}', [WalletController::class, 'add_balance_page'])->name('add_balance_page');
            Route::post('/add_balance/{id}', [WalletController::class, 'add_balance'])->name('add_balance');
            Route::get('/set_security_deposit_page/{id}', [WalletController::class, 'set_security_deposit_page'])->name('set_security_deposit_page');
            Route::post('/set_security_deposit/{id}', [WalletController::class, 'set_security_deposit'])->name('set_security_deposit');
            // statement
            Route::get('/statement/{id}', [WalletController::class, 'statement'])->name('statement');
            // clear_wallet
            Route::get('/clear_wallet/{id}', [WalletController::class, 'clear_wallet_page'])->name('clear_wallet_page');
            Route::post('/clear_wallet/{id}', [WalletController::class, 'clear_wallet'])->name('clear_wallet');

        });
        // Kyc
        Route::prefix('/kyc')->name('kyc.')->group(function () {
            // home page
            Route::get('/showall', [KycController::class, 'showall'])->name('showall');
            // Show clint all KYC doc
            Route::get('/{c_id}', [KycController::class, 'show'])->name('show');
            // Show Doc single
            Route::get('/doc/{id}', [KycController::class, 'showdoc'])->name('showdoc');
            // accept / reject
            Route::get('/doc/accept/{id}', [KycController::class, 'acceptdoc'])->name('acceptdoc');
            Route::get('/doc/reject/{id}', [KycController::class, 'rejectdoc'])->name('rejectdoc');
            // 
            Route::get('/pass/{c_id}', [KycController::class, 'kyc_pass'])->name('kyc_pass');
            // 
            Route::get('/create/{c_id}', [KycController::class, 'create'])->name('create');
            Route::post('/store', [KycController::class, 'store'])->name('store');

        });
        // PG
        Route::prefix('/pg')->name('pg.')->group(function () {
            // C
            Route::get('/create', [PgController::class, 'create'])->name('create');
            Route::post('/create', [PgController::class, 'store'])->name('store');
            // R
            Route::get('/', [PgController::class, 'home'])->name('home');
            // U
            Route::get('/add-images/{id}', [PgController::class, 'edit'])->name('edit');
            Route::post('/update/{id}', [PgController::class, 'update'])->name('update');
            Route::post('/update_img/{id}', [PgController::class, 'update_img'])->name('update_img');
            // D
        });
        // Room
        Route::prefix('/room')->name('room.')->group(function () {
            // C
            Route::get('/create/{id}', [RoomController::class, 'create'])->name('create');
            Route::post('/create', [RoomController::class, 'store'])->name('store');
            // R
            Route::get('/pg/{id}', [RoomController::class, 'home'])->name('home');      // Show rooms
            Route::get('/{id}', [RoomController::class, 'show_bed'])->name('show_bed');      // Show beds
            // U
            Route::get('/edit', [RoomController::class, 'edit'])->name('edit');
        });
        // meal
        Route::prefix('/meal')->name('meal.')->group(function () {
            // R
            Route::get('/', [MealController::class, 'index'])->name('home');
        });
        // amenity
        Route::prefix('/amenity')->name('amenity.')->group(function () {
            // c
            Route::get('/create', [AmenityController::class, 'create'])->name('create');
            Route::post('/store', [AmenityController::class, 'store'])->name('store');
            // R
            Route::get('/', [AmenityController::class, 'index'])->name('home');             // Multiple
            Route::get('/edit/{id}', [AmenityController::class, 'edit'])->name('edit');     // Edit view
            // U
            Route::post('/update/{id}', [AmenityController::class, 'update'])->name('update');
            Route::post('/update_img/{id}', [AmenityController::class, 'update_img'])->name('update_img');
            // D
            Route::get('/destroy/{id}', [AmenityController::class, 'destroy'])->name('destroy');
        });
        // notifications
        Route::prefix('/notifications')->name('notifications.')->group(function () {
            // R
            Route::get('/', [NotificationController::class, 'booking_queries'])->name('booking_queries');
            // D
            Route::get('/destroy/{id}', [NotificationController::class, 'destroy'])->name('destroy');
        });
        // Booking
        Route::prefix('/booking')->name('booking.')->group(function () {
            // Create first booking
            Route::get('/confirm_booking_page/{c_id}', [BookingQuery::class, 'confirm_booking_page'])->name('confirm_booking_page');
            Route::post('/confirm_booking', [BookingQuery::class, 'confirm_booking'])->name('confirm_booking');
            // change_room
            Route::get('/change_room_page/{c_id}', [BookingQuery::class, 'change_room_page'])->name('change_room_page');
            Route::post('/change_room', [BookingQuery::class, 'change_room'])->name('change_room');
            // D
            Route::get('/destroy/{id}', [NotificationController::class, 'destroy'])->name('destroy');
        });

        // All Popup Queries
        Route::get('/all_popup_ad_queries', [PopupQueryController::class, 'all_popup_ad_queries'])->name('all_popup_ad_queries');
        // logout
        Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    });
});





