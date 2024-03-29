<?php


use App\Http\Controllers\AdminPanel\AdminPageHomeController;
use App\Http\Controllers\AdminPanel\ImageController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
use App\Http\Controllers\AdminPanel\CategoryController as AdminCategoryController;

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
//1-do sth in the route
Route::get('/hello', function () {
    return 'Hello World';
});
//2-call view in the route
Route::get('/welcome', function () {
    return view('welcome');
});


//3-call controller function
Route::get('/',[HomeController::class,'index'])->name('home');


//4-route controller->view
Route::get('/test',[HomeController::class,'test'])->name('test');

//5-route with parameters
Route::get('/param/{id}/{number}',[HomeController::class,'param'])->name('param');



//6-route with post
Route::post('/save',[HomeController::class,'save'])->name('save');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//*******************ADMİN ROUTES************************
Route::prefix('admin')->name('admin.')->group(function () {
Route::get('/',[AdminHomeController::class,'index'])->name('index');

//*******************ADMİN CATEGORY ROUTES************************
    Route::prefix('/category')->name('category.')->controller(AdminCategoryController::class)->group(function () {
    Route::get('/',  'index')->name('index');
    Route::get('/create',  'create')->name('create');
    Route::post('/store',  'store')->name('store');
    Route::get('/edit/{id}',  'edit')->name('edit');
    Route::post('/update/{id}',  'update')->name('update');
    Route::get('/destroy/{id}',  'destroy')->name('destroy');
    Route::get('/show/{id}', 'show')->name('show');
   });


    //*******************ADMİN PAGE HOME  ROUTES************************
    Route::prefix('/home')->name('home.')->controller(AdminPageHomeController::class)->group(function () {
        Route::get('/',  'index')->name('index');
        Route::get('/create',  'create')->name('create');
        Route::post('/store',  'store')->name('store');
        Route::get('/edit/{id}',  'edit')->name('edit');
        Route::post('/update/{id}',  'update')->name('update');
        Route::get('/destroy/{id}',  'destroy')->name('destroy');
        Route::get('/show/{id}', 'show')->name('show');
    });
    //*******************ADMİN PAGE HOME IMAGE GALLERY ROUTES************************
    Route::prefix('/image')->name('image.')->controller(ImageController::class)->group(function () {
        Route::get('/{hid}',  'index')->name('index');
        Route::post('/store/{hid}',  'store')->name('store');
        Route::get('/destroy/{hid}/{id}',  'destroy')->name('destroy');

    });
});

