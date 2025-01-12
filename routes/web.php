<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SettingController;
use Illuminate\Support\Facades\App;

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

Route::get('/', function () {
    return auth()->check() ? redirect('/invoices') : view('auth.login');
});

Route::get('/switch-language/{locale}', function ($locale) {
    $availableLocales = config('app.available_locales');
    if (!in_array($locale, $availableLocales)) {
        $locale = config('app.locale');
    }
    session(['locale' => $locale]);
    return redirect()->back();
})->name('language.switch');


Auth::routes();

Route::middleware(['auth'])->group(function () {

    Route::resource('customers', CustomerController::class);
    Route::resource('products', ProductController::class);
    Route::resource('invoices', InvoiceController::class);

    route::get('settings', [SettingController::class, 'index'])->name('setting.index');
    route::post('store', [SettingController::class, 'store'])->name('setting.store');

});
