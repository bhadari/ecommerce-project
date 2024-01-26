<?php

use App\Http\Controllers\ProductController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\EcommerceController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use Laravel\Sanctum\Sanctum;
use App\Http\Controllers\TypesController;

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

Route::get('/', [FrontController::class, 'index']);
Route::get('/viewproduct/{id}', [FrontController::class, 'viewproduct']);

Route::get('/dashboard', function () {
    return view('pages.dashboard');
});


route::get('/listcategory', [EcommerceController::class, 'listcategory']);
route::get('/addcategory', [EcommerceController::class, 'addcategory']);
route::get('/addtype', [EcommerceController::class, 'addtype']);
route::get('/listtype', [EcommerceController::class, 'listtype']);

route::get('/listproducts', [EcommerceController::class, 'listproducts']);
route::get('/addproducts', [EcommerceController::class, 'addproducts']);
route::get('/listorders', [EcommerceController::class, 'listorders']);
route::get('/listprofile', [EcommerceController::class, 'listprofile']);






//auth

Route::get('/register', [AuthController::class, 'register']);
Route::post('/register-confirm', [AuthController::class, 'store1']);

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login-confirm', [AuthController::class, 'loginconfirms']);


Route::middleware('auth:sanctum')->group(function () {

    // product CRUD


    Route::post('/products', [ProductController::class, 'store']);
    Route::get('/edit/{id}', [ProductController::class, 'show']);
    Route::post('/update/{id}', [ProductController::class, 'update']);
    Route::get('/destroy/{id}', [ProductController::class, 'destroy']);

    //category CRUD
    Route::post('/category', [CategoryController::class, 'store3']);
    Route::get('/editc/{id}', [CategoryController::class, 'showc']);
    Route::post('/update/{id}', [CategoryController::class, 'update']);
    Route::get('/destroyc/{id}', [CategoryController::class, 'destroyc']);

    // type CRUD

    Route::post('/type', [TypesController::class, 'storet']);
    Route::get('/editt/{id}', [TypesController::class, 'showt']);
    Route::post('/updatet/{id}', [TypesController::class, 'updatet']);
    Route::get('/destroyt/{id}', [TypesController::class, 'destroyt']);

});

Route::get('/home', [HomeController::class, 'home']);

Route::get('/singleproducts', [HomeController::class, 'single']);

