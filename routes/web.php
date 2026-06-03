<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\ProductController; 
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ContactMessageController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PageController;


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


Route::prefix('panel')->group(function () {
    Route::get('/', function () {
        return view('admin.index'); 
    })->name('admin.dashboard');
    
    Route::get('/', [AdminHomeController::class, 'index'])->name('admin.dashboard');

    Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
    Route::post('/categories/store', [CategoryController::class, 'store'])->name('categories.store');
    Route::get('/categories/show/{category}', [CategoryController::class, 'show'])->name('admin.categories.show');
    Route::get('/categories/edit/{category}', [CategoryController::class, 'edit'])->name('admin.categories.edit');
    Route::put('/categories/update/{category}', [CategoryController::class, 'update'])->name('admin.categories.update');
    Route::delete('/categories/destroy/{category}', [CategoryController::class, 'destroy'])->name('admin.categories.destroy');

    Route::get('/products', [ProductController::class, 'index'])->name('admin.products.index');
    Route::get('/products/create', [ProductController::class, 'create'])->name('admin.products.create');
    Route::post('/products/store', [ProductController::class, 'store'])->name('admin.products.store');
    Route::get('/products/show/{product}', [ProductController::class, 'show'])->name('admin.products.show');
    Route::get('/products/edit/{product}', [ProductController::class, 'edit'])->name('admin.products.edit');
    Route::put('/products/update/{product}', [ProductController::class, 'update'])->name('admin.products.update');
    Route::delete('/products/destroy/{product}', [ProductController::class, 'destroy'])->name('admin.products.destroy');


    Route::get('/orders', [OrderController::class, 'index'])->name('admin.orders.index');
    Route::get('/orders/{id}', [OrderController::class, 'show'])->name('admin.orders.show');
    Route::post('/orders/{id}/status', [OrderController::class, 'updateStatus'])->name('admin.orders.status');

    Route::get('/messages', [ContactMessageController::class, 'index'])->name('admin.messages.index');
    Route::get('/messages/{id}', [ContactMessageController::class, 'show'])->name('admin.messages.show');
    Route::delete('/messages/{id}', [ContactMessageController::class, 'destroy'])->name('admin.messages.destroy');

    Route::get('/reviews', [ReviewController::class, 'index'])->name('admin.reviews.index');
    Route::post('/reviews/{id}/status', [ReviewController::class, 'updateStatus'])->name('admin.reviews.status');
    Route::delete('/reviews/{id}', [ReviewController::class, 'destroy'])->name('admin.reviews.destroy');

    Route::get('/faqs', [FaqController::class, 'index'])->name('admin.faqs.index');
    Route::get('/faqs/create', [FaqController::class, 'create'])->name('admin.faqs.create');
    Route::post('/faqs/store', [FaqController::class, 'store'])->name('admin.faqs.store');
    Route::get('/faqs/edit/{id}', [FaqController::class, 'edit'])->name('admin.faqs.edit');
    Route::put('/faqs/update/{id}', [FaqController::class, 'update'])->name('admin.faqs.update');
    Route::delete('/faqs/destroy/{id}', [FaqController::class, 'destroy'])->name('admin.faqs.destroy');

    Route::get('/settings', [SettingController::class, 'index'])->name('admin.settings.index');
    Route::post('/settings', [SettingController::class, 'update'])->name('admin.settings.update');

    Route::get('/users', [UserController::class, 'index'])->name('admin.users.index');
    Route::get('/users/edit/{id}', [UserController::class, 'edit'])->name('admin.users.edit');
    Route::put('/users/update/{id}', [UserController::class, 'update'])->name('admin.users.update');
    Route::delete('/users/destroy/{id}', [UserController::class, 'destroy'])->name('admin.users.destroy');

    Route::get('/informational', [PageController::class, 'index'])->name('admin.informational.index');
    Route::get('/informational/create', [PageController::class, 'create'])->name('admin.informational.create');
    Route::post('/informational/store', [PageController::class, 'store'])->name('admin.informational.store');
    Route::get('/informational/edit/{id}', [PageController::class, 'edit'])->name('admin.informational.edit');
    Route::put('/informational/update/{id}', [PageController::class, 'update'])->name('admin.informational.update');
    Route::delete('/informational/destroy/{id}', [PageController::class, 'destroy'])->name('admin.informational.destroy');
});