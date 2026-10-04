<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PagesController::class, 'index'])->name('home');
Route::get('/admin/dashboard', [PagesController::class, 'admin']);
Route::get('/admin/product-management', [PagesController::class, 'productManagement']);
Route::get('/admin/product-management/create-product', [PagesController::class, 'createProductView']);
Route::post('/admin/product-management/create-product', [PagesController::class, 'createProduct']);
Route::get('/admin/product-management/edit-product/{id}', [PagesController::class, 'editProductView']);
Route::post('/admin/product-management/edit-product', [PagesController::class, 'editProduct']);
Route::delete('/admin/product-management/delete-product/{id}', [PagesController::class, 'deleteProduct']);
Route::get('/admin/product-attribute-management', [PagesController::class, 'attributeManagementView']);
