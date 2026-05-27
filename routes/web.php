<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\admin\CategoryController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\ContactMessageController;
use App\Http\Controllers\Admin\FaqController;

Route::get('/', [HomeController::class, 'index'])->name('home');
    

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/admin-test', function () {
    return view('admin.index'); 
});

Route::get('/', [AdminHomeController::class, 'index'])->name('admin.index');
Route::get('/admin/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/admin/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/admin/categories/store', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/admin/products', [ProductController::class, 'index'])->name('admin.products.index');
Route::get('/admin/products/create', [ProductController::class, 'create'])->name('admin.products.create');
Route::post('/admin/products/store', [ProductController::class, 'store'])->name('admin.products.store');
Route::get('/orders', [OrderController::class, 'index'])->name('admin.orders.index');
Route::get('/messages', [ContactMessageController::class, 'index'])->name('admin.messages.index');
Route::get('/reviews', [ReviewController::class, 'index'])->name('admin.reviews.index');
Route::get('/faqs', [FaqController::class, 'index'])->name('admin.faqs.index');
Route::get('/faqs/create', [FaqController::class, 'create'])->name('admin.faqs.create');
Route::post('/faqs/store', [FaqController::class, 'store'])->name('admin.faqs.store');
Route::get('/faqs/edit/{id}', [FaqController::class, 'edit'])->name('admin.faqs.edit');
Route::put('/faqs/update/{id}', [FaqController::class, 'update'])->name('admin.faqs.update');
Route::delete('/faqs/destroy/{id}', [FaqController::class, 'destroy'])->name('admin.faqs.destroy');
Route::delete('/admin/categories/destroy/{category}', [CategoryController::class, 'destroy'])->name('admin.categories.destroy');
Route::get('/admin/categories/edit/{category}', [CategoryController::class, 'edit'])->name('admin.categories.edit');
Route::put('/admin/categories/update/{category}', [CategoryController::class, 'update'])->name('admin.categories.update');
Route::get('/admin/categories/show/{category}', [CategoryController::class, 'show'])->name('admin.categories.show');
Route::get('/admin/products/show/{product}', [ProductController::class, 'show'])->name('admin.products.show');
Route::get('/admin/products/edit/{product}', [ProductController::class, 'edit'])->name('admin.products.edit');
Route::put('/admin/products/update/{product}', [ProductController::class, 'update'])->name('admin.products.update');
Route::delete('/admin/products/destroy/{product}', [ProductController::class, 'destroy'])->name('admin.products.destroy');
Route::post('/reviews/{id}/status', [ReviewController::class, 'updateStatus'])->name('admin.reviews.status');
Route::delete('/reviews/{id}', [ReviewController::class, 'destroy'])->name('admin.reviews.destroy');
Route::get('/orders/{id}', [OrderController::class, 'show'])->name('admin.orders.show');
Route::post('/orders/{id}/status', [OrderController::class, 'updateStatus'])->name('admin.orders.status');

Route::get('/messages/{id}', [ContactMessageController::class, 'show'])->name('admin.messages.show');
Route::delete('/messages/{id}', [ContactMessageController::class, 'destroy'])->name('admin.messages.destroy');

