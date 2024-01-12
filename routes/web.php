<?php

use App\Http\Controllers\Dashboard_Controller;
use App\Http\Controllers\Product_Controller;
use Illuminate\Support\Facades\Route;
use app\Http\Controllers\productController;
use App\Http\Controllers\Sold_Controller;

Route::get('/', [Product_Controller::class, 'index']);

// Route::get('/', [Dashboard_Controller::class, 'index']);

Route::get('/sold-items', [Product_Controller::class, 'recentOrders']);

Route::get('/sold', [Product_Controller::class, 'sold_items']);

Route::get('/add-product', [Product_Controller::class, 'create']);
Route::post('/store-product', [Product_Controller::class, 'store']);

Route::get('/edit-product/{id}', [Product_Controller::class, 'edit']);
Route::put('/update-product/{id}', [Product_Controller::class, 'update']);

Route::get('/delete-product/{id}', [Product_Controller::class, 'delete']);

Route::get('sold-product/{id}',  [Product_Controller::class, 'sold']);
Route::post('sell-product/{id}',  [Product_Controller::class, 'sell']);

Route::post('/store-product', [Product_Controller::class, 'store']);