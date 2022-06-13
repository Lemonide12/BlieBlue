<?php

use Illuminate\Support\Facades\Route;
use App\Models\Item;
use App\Http\Controllers\ItemController;

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
    return view('landing_page');
});

Route::get('/about', function () {
    return view('about_us');
});

Route::get('/contact', function () {
    return view('contact_us');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/service', function () {
    return view('services');
});

Route::get('/dashboard', [ItemController::class, 'index']);

Route::get('/dashboard/items', [ItemController::class, 'showItems']);

Route::post('/dashboard/items/add', [ItemController::class, 'addItem']);

Route::get('/dashboard/items/{item_id}', [ItemController::class, 'searchItemRow']);

Route::post('/dashboard/items/{item_id}/update', [ItemController::class, 'updateItem']);

Route::get('/dashboard/items/{item_id}/delete', [ItemController::class, 'deleteItem']);
