<?php
use App\Http\Controllers\DeliveryOrderController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\OrderController;
use App\Http\Controllers\CausesController;
use App\Http\Controllers\DonateController;
use App\Http\Controllers\IndexxController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DeliveryController;
use App\Http\Controllers\AddProfileController;
use App\Http\Controllers\adminCController;
use App\Http\Controllers\adminDController;
use App\Http\Controllers\adminMController;
use App\Http\Controllers\adminOController;
use App\Http\Controllers\adminPController;
use App\Http\Controllers\AdminSearchController;
use App\Http\Controllers\adminUController;
use App\Http\Controllers\ProductSearchController;
use GuzzleHttp\Promise\Create;

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


// Route::get('/indexx', function () {
//     return view('indexx');

// Route::get('/', function () {
//     return view('contact');
// });
Route::get('/donation', function () {
    return view('donation');
});
// Route::get('/donate', function () {
//     return view('donate');
// });
// Route::get('/delivery', function () {
//     return view('delivery');
// });
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});

// Route::get('/causes', function () {
//     return view('causes');
// });


Route::resource('indexx', IndexxController::class);

Route::middleware('auth')->group(function() {
Route::resource('delivery', DeliveryController::class);});

// Route::resource('donate', DonateController::class);
Route::resource('contact',ContactController::class);
Route::resource('profile',ProfileController::class);
Route::resource('addprofile',AddProfileController::class);

Route::resource('deliveryorders', DeliveryOrderController::class);

Route::get('/causes' , [CausesController::class, 'index']);

Route::get('/causes' , [CausesController::class, 'index']);
Route::get("/causes/{category}", [CausesController::class , 'ShowProductCategory']);

Route::get("/search", [CausesController::class , 'search']);

route::get('/profile-requests' , [ProfileController::class , 'showRequests']);
route::get('/profile-donations' , [ProfileController::class , 'showDonations']);
Route::middleware('auth')->group(function() {
Route::get("/Causes-product/{product}" , [ProductController::class , "index"]);
Route::get("/Causes-product/add/{product}" , [ProductController::class , "add"]);});
Route::delete("delete-donation/{product}", [ProductController::class , "delete"]);
route::delete("delete-request/{order}" , [OrderController::class , "delete"]);


// registration
Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



////
Route::middleware('auth')->group(function() {
Route::get('profile',[App\Http\Controllers\ProfileController::class, 'index']);
});




// admin
Route::get('/dashboard', function () {
    return view('admin.dashboard');
});
Route::resource('user', adminUController::class);
Route::resource('category', adminCController::class);
Route::resource('product', adminPController::class);
Route::resource('order', adminOController::class);
Route::resource('message', adminMController::class);
Route::resource('deliveryAdmin', adminDController::class);

//adminSearch
Route::get("/searchCategory", [AdminSearchController::class , 'SearchCat']);
Route::get("/searchProduct", [ProductSearchController::class , 'productSearch']);