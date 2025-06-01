<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::view('/login', 'auth.loginform')->name('login');
Route::view('/signup', 'auth.signupform')->name('signup');


Route::group(['prefix' => 'admin', 'sa' => 'admin', 'middleware'=>['auth','CheckAdminRole']], function () {
    Route::view('/', 'dashboards.dashboard')->name('admin.dashboard');
    Route::view('/settings/users', 'dashboards.users.users')->name('admin.users');
    Route::view('/settings/permissions', 'dashboards.permissions.permissions')->name('admin.permissions');
    Route::view('/settings/settings', 'dashboards.settings.settings')->name('admin.settings')->can('viewAny', \App\Models\Setting::class);
    Route::view('/settings/main_categories', 'dashboards.main-categories.main-categories')->name('admin.main_categories');
    Route::view('/settings/subcategories', 'dashboards.subcategories.subcategories')->name('admin.subcategories');
    Route::view('/stores/users', 'dashboards.stores.users.users')->name('stores.users');
    Route::view('/stores/stores', 'dashboards.stores.stores.stores')->name('stores.stores');
    Route::view('/stores/categories', 'dashboards.stores.categories.categories')->name('stores.categories');
    Route::view('/stores/products', 'dashboards.stores.products.products')->name('stores.products');
    Route::view('/stores/orders', 'dashboards.stores.orders.orders')->name('stores.orders');
});
Route::group(['prefix' => 'merchants', 'sa' => 'merchants', 'middleware'=>['auth','CheckVendorRole']], function () {
    Route::view('/', 'merchants.dashboard')->name('merchants.dashboard');
});
