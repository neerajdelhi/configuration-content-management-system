<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\AdminAccess;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/news', function () {
    return view('pages.news');
});

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Admin routes
    Route::middleware(['auth', 'verified', 'can:access-admin'])->prefix('admin')->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
        Route::get('/cms', [AdminController::class, 'cmsIndex'])->name('admin.cms');
        Route::get('/partners', [AdminController::class, 'partnersIndex'])->name('admin.partners');
    });
});

Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('roles/create', [RoleController::class, 'create'])->name('roles.create');
    Route::post('roles', [RoleController::class, 'store'])->name('roles.store');

    Route::get('/roles', [RoleController::class, 'index'])->name('roles.index');
    Route::post('/roles', [RoleController::class, 'store'])->name('roles.store');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('partners', PartnerController::class);
    Route::resource('templates', TemplateController::class);
    Route::resource('pages', PageController::class);
    Route::resource('fields', FieldController::class);
    Route::resource('partner-templates', PartnerTemplateController::class);
    Route::resource('partner-pages', PartnerPageController::class);
    Route::resource('partner-fields', PartnerFieldController::class);
});

// Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
//     Route::get('/roles', [RoleController::class, 'index'])->name('roles.index');
//     Route::get('/roles/create', [RoleController::class, 'create'])->name('roles.create');
//     Route::post('/roles', [RoleController::class, 'store'])->name('roles.store');
// });
