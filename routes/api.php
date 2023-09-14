<?php

use App\Http\Controllers\VendasController;
use App\Http\Controllers\VendedoresController;
use Illuminate\Support\Facades\Route;

Route::get('vendedores/all', [VendedoresController::class, 'index']);
Route::post('vendedores/add', [VendedoresController::class, 'create']);
Route::get('vendedores/{id}', [VendedoresController::class, 'showAllSellerSales']);

Route::get('venda/all', [VendasController::class, 'index']);
Route::post('venda/add', [VendasController::class, 'create']);




